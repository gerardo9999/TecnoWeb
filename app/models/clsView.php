<?php 
    class ViewModel{
        /*          obtener las vistas              */ 
        protected static function getViewModel($view){
            
            $listWhite=[    "dashboard",
                            "home",
                            "reserva",
                            "recepcion",
                            "cliente",

                            "producto",
                            "venta",

                            'servicio',
                            'tipo-servicio',

                            "apertura-caja",
                            "cierre-caja",
                            "liquidacion",

                            "egreso",

                            "hotel",
                            "habitacion",
                            "categoria",
                            "nivel",

                            "reporte-diario",
                            "reporte-mensual",
                            "reporte-recepcionista",

                            "usuario",
                            "perfil"
                        ];


            if (in_array($view,$listWhite)) {
                
                if (is_file("./app/views/".$view.".php")) {
                    $content = "./app/views/".$view.".php";
                } else {
                    $content = "404";
                }

            }elseif($view=="login" || $view == "index"){
                $content = "login";
            }else{
                $content = "404";
            }
            return $content;
        } 
    
    }
