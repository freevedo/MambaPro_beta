<?php
require_once ('views/View.php');

    class ControllerHome{
        private $_articleManager;
        private  $view;
        
        public function __construct($url)
        {
            if(isset($url) && count($url) > 1)//control le nombre de parametres sur nos differents controllers 
                throw new Exeception('Page introuvable');
            else
            {
                $this->articles();
            }
                

        }

        public function articles(){
            

            $this->_articleManager = new ArticleManager;
            $hero1 = $this->_articleManager->getHero1();
            $hero2    = $this->_articleManager->getHero2();
            $hero3    = $this->_articleManager->getHero3();
            // $this->_imageManager = new ImageManager;
            // $images = $this->_imageManager->getImages();
            
            $this->_view = new View('Home');
            $this->_view->generate(array('hero1' => $hero1,'hero2' => $hero2,'hero3' =>$hero3));
            // require_once('views/viewHome.php');
        }
    }