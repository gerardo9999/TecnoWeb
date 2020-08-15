<?php 
    require_once './app/models/clsView.php';

class ViewController extends ViewModel{


    /* Obtiene el contenido principal */ 
    public function getIndexController(){

        return require_once './app/index.php';
    }

    /* Obtiene la vista */ 
    public function getViewController(){
        
        if (isset($_GET['views'])) {
            
            $view = explode("/",$_GET['views']);
            $request = ViewModel::getViewModel($view[0]);
            
        }else{
            $request = "login";
        }
        return $request;
    }


}