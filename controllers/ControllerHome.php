<?php
require_once ('views/View.php');

    class ControllerHome{
        private $_articleManager;
        private $_imageManager;
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
            $about1   = $this->_articleManager->getAbout1();
            $about2   = $this->_articleManager->getAbout2();
            $about3   = $this->_articleManager->getAbout3();
            $services = $this->_articleManager->getServices();
            $this->_imageManager = new ImageManager;
            $images = $this->_imageManager->getImages();
            $slide1 = $this->_imageManager->getSlide1();
            $slide2 = $this->_imageManager->getSlide2();
            $slide3 = $this->_imageManager->getSlide3();

            
            $this->_view = new View('Home');
            $this->_view->generate(array('hero1' => $hero1,'hero2' => $hero2,'hero3' =>$hero3,
                                        'slide1' => $slide1, 'slide2' => $slide2, 'slide3' => $slide3,
                                        'about1' => $about1, 'about2' => $about2, 'about3' => $about3,
                                        'services' => $services
                                    ));
            // require_once('views/viewHome.php');
        }
    }