<?php
namespace App\Controller {

    use Silex\Application;
    use Silex\ControllerProviderInterface;


    class IndexController implements ControllerProviderInterface
    {
        public function connect(Application $app)
        {
            // Front office
            $index = $app['controllers_factory'];
            $index->match("/", 'App\Controller\IndexController::index')->bind("index.index");
            $index->match("/prestation", 'App\Controller\IndexController::prestation')->bind("index.prestation");
            $index->match("/geotechnique", 'App\Controller\IndexController::geotechnique')->bind("index.geotechnique");
            $index->match("/machine", 'App\Controller\IndexController::machine')->bind("index.machine");
            $index->match("/reference", 'App\Controller\IndexController::reference')->bind("index.reference");
            $index->match("/contact", 'App\Controller\IndexController::contact')->bind("index.contact");
            
            // Connexion
            $index->match("/connexion", 'App\Controller\IndexController::connexion')->bind("admin.connexion");
            
            // Back office
            $index->match("/admin", 'App\Controller\IndexController::admin')->bind("admin.admin");

            return $index;
        }
        
		// Front office
		
		public function index(Application $app)
		{
   			return $app["twig"]->render("index/index.twig");
		}

		public function geotechnique(Application $app)
		{
			return $app["twig"]->render("index/geotechnique.twig");
		}

		public function prestation(Application $app)
		{
    		return $app["twig"]->render("index/prestation.twig");
		}
		
		public function machine(Application $app)
		{
    		return $app["twig"]->render("index/machine.twig");
		}
        
        public function reference(Application $app)
		{
    		return $app["twig"]->render("index/reference.twig");
		}
		
		public function contact(Application $app)
		{
    		return $app["twig"]->render("index/contact.twig");
		}
		
		// Connexion
		
		public function connexion(Application $app)
		{
			return $app["twig"]->render("admin/connexion.twig");
		}
		
		// Back office
		
		public function admin(Application $app)
		{
			return $app["twig"]->render("admin/admin.twig");
		}
		
    }
}