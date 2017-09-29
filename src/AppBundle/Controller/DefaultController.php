<?php

namespace AppBundle\Controller;

use AppBundle\Form\ArticleType;
use AppBundle\Entity\Article;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/number", name="numberRandom") // Cible ou charger la page || le name est la variable qui contient l'url.
     */
    public function numberAction() {
        $number = mt_rand(0, 100); // function random.

        // Renvoie dans un tableau la valeur random de $number, dans de la variable 'number' || cible le url view.
        return $this->render(":default:number.html.twig", array(
           'number' => $number
        ));
    }

    // @Route /String (random)
    /**
     * @Route("/string", name="stringRandom")
     */
    public function stringAction() {
        $str = '123';
        $random = $str[mt_rand(0, strlen($str)-1)];
        return $this->render(":default:string.html.twig", array('str' => $random));
    }


    // @Route /blog
    /**
     * @Route("/blog/{title}/{year}/{_local}", name="blog",
     *     requirements ={
     *     "title" : "[A-Za-z-\-]+",
     *      "year" : "\d{4}$",
     *     "_local" : "en|fr||ru"
     * })
     */


    public function blogAction($title, $year, $_local) { //3 param
        return $this->render(":default:blog.html.twig", array(
            'title' => $title, 'year' => $year, '_local' => $_local
        ));
    }


    /**
     * @Route("/display", name="displayTest")
     */
    public function displayAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/db", name="article_list")
     */
    // Exersice 3 : add function of controler for the new entity created (list)
    public function listArticleFunction()
    {
        $em = $this->getDoctrine()->getManager()->getRepository(Article::class);
        $articles = $em->findAll();
        return $this->render(':twig:articles.html.twig', array('articles' => $articles));
    }

    // Exersice 3 : add function of controler for the new entity created (show)
    /**
     * @Route("/db/{id}", name="article_show")
     */
    public function showArticleAction($id) {

        $em = $this->getDoctrine()->getManager()->getRepository(Article::class);
        $article = $em->find($id);
        $form = $this->createDeleteForm($article); //Rappel la fonction delete
        return $this->render('default/display.html.twig', array(
            'article' => $article,
            'form' => $form->createView()
        )); //button + form de suppression
    }
    //Exo 4: Crée un formulaire et le mettre en lien avec la database.
    /**
     * @Route("/form")
     */
    public function ArtcicleForm(Request $request)
    {
        $article = new Article();

        $form = $this->createForm(ArticleType::class, $article); // ArticleType = le formulaire et je l'associe a mon entitée = class de ma db.

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) { //Vérifie si envoyer et valider
            $em = $this->getDoctrine()->getManager(); // récupérer l'EntityManager via $ this-> getDoctrine () & ajouter un argument à votre action: createAction (EntityManagerInterface $em)
            $em->persist($article); //dis à Doctrine  que je souhaite (éventuellement) enregistrer le produit (aucune requête pour le moment)
            $em->flush(); //exécute la requêtes (la requête INSERT)

            return $this->redirectToRoute('article_list');
        }
        return $this->render('twig/form.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    //Exo 4: Mettre a jour.
    /**
     * @Route("/update/{id}")
     */
    public function ArtcicleUpdate(Request $request, $id) {
        $em = $this->getDoctrine()->getManager()->getRepository(Article::class);
        $article = $em->find($id);

        $form = $this->createForm(ArticleType::class, $article); // ArticleType = le formulaire et je l'associe a mon entitée = class de ma db.

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('article_list');
        }
        return $this->render('twig/form.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    //Exo 4 : Crée un formulaire pour supprimer un Article
    /**
     *
     */
    private function createDeleteForm(Article $article)
        {
            //on crée un formulaire
            return $this->createFormBuilder()
                ->setAction($this->generateUrl('article_delete', array('id' => $article->getId())))
                ->setMethod('DELETE')
                ->add('delete', SubmitType::class)
                ->getForm()
                ;
        }

        //Exo 4 : Voir les artcles supprimer
        /**
         * @Route("/article_delete/{id}", name="article_delete")
         */
    public function articleDeleted(Request $request, Article $article)
    {
        $form = $this->createDeleteForm($article); //crée un form de suppression
        $form->handleRequest($request); //Récuperer les donner du formulaire.
        if($form->isSubmitted())
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($article);
            $em->flush();
        }
        return $this->redirectToRoute('article_list');
    }
}