<?php
/**
 * Router control all the controllers using autoloader
 */
class Router{
    private $ctrl;
    private $view;
    
    /**
     * routeReq 
     *
     * @return void
     */
    public function routeReq()
    {
        try{
            $url = '';
            if(isset($_GET['url']))
            {
                $url = explode('/',filter_var($_GET['url'],FILTER_SANITIZE_URL));
                $controller = ucfirst(strtolower($url[0]));
                $controllerClass = "Controller".$controller;
                    $controllerFile  = "controllers/".$controllerClass.".php";

                    //verify if file exist
                    if(file_exists($controllerFile))
                    {
                        require_once($controllerFile);
                        $this->_ctrl = new $controllerClass($url);
                    }
                    else
                    {
                        throw new Exception('Page introuvable');
                    }
                
            }
            else//charge la page de defaut lorsque on fait pas appel a une page en particulier
            {
                require_once('controllers/ControllerHome.php');
                $this->_ctrl = new ControllerHome($url);
            }

        }
        //gestion des erreurs
        catch(Exception $e)
        {
            $errorMsg = $e->getMessage();
            $this->_view = new View('Error');
            $this->_view->generate(array('errorMsg' => $errorMsg));
            // require_once ('views/viewError.php');//charger page d'erreur
        }
    }
}