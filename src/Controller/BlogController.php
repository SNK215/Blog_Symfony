<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use App\Entity\Category;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\Request;
use App\Form\CommentType;
use App\Entity\Comment;




class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="app_blog")
     */
    public function index(ArticleRepository $repo): Response
    {
        $articles = $repo->findAll();
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            "articles" => $articles
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render("blog/home.html.twig", [
            "title" => "Hello world !",
        ]);
    }

    /**
     * @Route("/blog/new", name="blog_create")
     * @Route("/blog/{id}/edit", name="blog_edit")
     */
    public function form(Article $article = null, Request $request, EntityManagerInterface $manager)
    {

        if (!$article) {
            $article = new Article();
        }

        $form = $this->createFormBuilder($article)
            ->add("title")
            ->add("content")
            ->add("image")
            ->add("category", EntityType::class, [
                "class" => Category::class,
                "choice_label" => "title"
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if (!$article->getId()) {
                $article->setCreatedAt(new \DateTime());
            }
            $manager->persist($article);
            $manager->flush($article);

            return $this->redirectToRoute("blog_show", ["id" => $article->getId()]);
        }

        return $this->render("blog/create.html.twig", [
            "formArticle" => $form->createView(),
            "editMode" => $article->getId() !== null
        ]);
    }

    /**
     * @Route("/blog/{id}", name="blog_show")
     */
    public function show($id, ArticleRepository $repo, Request $request, EntityManagerInterface $manager)
    {

        //Affiche article correspondant
        $article = $repo->find($id);

        //Ajout de commentaire 
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setCreatedAt(new \DateTime());
            $comment->setArticle($article);

            $manager->persist($comment);
            $manager->flush($comment);

            return $this->redirectToRoute("blog_show", ["id" => $article->getId()]);
        }

        return $this->render("blog/show.html.twig", [
            "formComment" => $form->createView(),
            "article" => $article
        ]);
    }

    /**
     * @Route("/{id}", name="app_delete", methods={"POST"})
     */
    public function delete(Request $request, Article $article, ArticleRepository $articleRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $article->getId(), $request->request->get('_token'))) {
            $articleRepository->remove($article);
        }

        return $this->redirectToRoute('app_blog', [], Response::HTTP_SEE_OTHER);
    }
}
