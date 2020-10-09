<?php
require_once ('views/View.php');

    class ControllerHome{
        private $_articleManager;
        private $_imageManager;
        private $_portfolioManager;
        private $_teamManager;
        private $_contactManager;
        private  $view;
        
        public function __construct($url)
        {
            if(isset($url) && count($url) > 1)//control le nombre de parametres sur nos differents controllers 
                throw new Exception('Page introuvable');
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
            $aboutlists = $this->_articleManager->getAboutLists();
            $services = $this->_articleManager->getServices();
            $faqs     = $this->_articleManager->getFaq();
            $this->_portfolioManager = new PortfolioManager;
            $portfolios= $this->_portfolioManager->getPortfolio();
            $this->_teamManager = new TeamManager;
            $teams  =  $this->_teamManager->getTeam();
            $this->_contactManager = new ContactManager;
            $contact1 = $this->_contactManager->getContact1();
            $this->_imageManager = new ImageManager;
            $images = $this->_imageManager->getImages();
            $slide1 = $this->_imageManager->getSlide1();
            $slide2 = $this->_imageManager->getSlide2();
            $slide3 = $this->_imageManager->getSlide3();

            
            $this->_view = new View('Home');
            $this->_view->generate(array('hero1'     => $hero1,'hero2' => $hero2,'hero3' =>$hero3,
                                        'slide1'     => $slide1, 'slide2' => $slide2, 'slide3' => $slide3,
                                        'about1'     => $about1, 'about2' => $about2, 'about3' => $about3,
                                        'aboutlists' => $aboutlists,
                                        'services'   => $services,
                                        'faqs'       => $faqs,
                                        'portfolios' => $portfolios,
                                        'teams'      => $teams,
                                        'contact1'   => $contact1
                                    ));
            //  require_once('templates/.php');
        }
    }