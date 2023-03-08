<?php
require_once("model/model.php");

    class product extends item
    {
        public function __construct()
        {
            parent ::__construct();

            if(isset($_SERVER["PATH_INFO"]))
            {
                switch($_SERVER["PATH_INFO"])
                {
                    case '/':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("slider.php");
                        require_once("content.php");
                        require_once("footer.php");
                        break;

                    case '/About-Us':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("about.php");
                        require_once("footer.php");
                        break;   
                        
                    case '/Our-Services':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("services.php");
                        require_once("footer.php");
                        break;     
                        
                    case '/Our-Pricing':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("pricing.php");
                        require_once("footer.php");
                        break; 
                        
                    case '/Contact-Us':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("contact.php");
                        require_once("footer.php");
                        break;    

                    case '/Get-A-Quote':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("get-a-quote.php");
                        require_once("footer.php");
                        break;
                     
                    case '/Our-Service-Details':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("service-details.php");
                        require_once("footer.php");
                        break;    

                    default:
                    require_once("index.php");
                    require_once("header.php");
                    require_once("404.php");
                    require_once("footer.php");
                    break;

                }
            }
        }
    }
$obj= new product;     
?>