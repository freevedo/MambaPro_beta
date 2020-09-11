<?php
require_once ('views/View.php');

    class ControllerHome{
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
            

            // require_once ('views/viewHome.php');

            $this->view = new View('Home');
            $this->view->generate(array('articles'));
        }
    }