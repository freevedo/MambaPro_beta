<?php
require_once ('views/View.php');

    class ControllerApply{
        private $_studentManager;
        private  $view;
        
        public function __construct($url)
        {
            if(isset($url) && count($url) > 1)//control le nombre de parametres sur nos differents controllers 
                throw new Exception('Page introuvable');
            else
            {
                $this->apply();
            }
                

        }

        public function apply(){

            $this->_studentManager = new StudentManager;
            //$student1 = $this->_studentManager->getForm();
            $this->_view = new View('Apply');
            $this->_view->generate(array());
            //  require_once('templates/.php');
        }
        
    }