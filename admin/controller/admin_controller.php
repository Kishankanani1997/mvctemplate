<?php
require_once("model/admin_model.php");

class admin_controller extends admin_model
{
    public function __construct()
    {
        parent:: __construct();

        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case'/':
                    require_once("index.php");
                    require_once("login.php");
                break;

                case'/Admin_Dashboard':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("content.php");
                    require_once("footer.php");
                    break;

                case'/Register_here':
                    require_once("index.php");
                    require_once("register.php");
                 
                case'/User_Profile':
                    require_once("index.php"); 
                    require_once("header.php"); 
                    require_once("sidebar.php");
                    require_once("userprofile.php");
                    require_once("footer.php");  
                    break;

                case'/Show_Data':
                    require_once("index.php"); 
                    require_once("header.php"); 
                    require_once("sidebar.php");
                    require_once("datashow.php");
                    require_once("footer.php");
                    break;    
                        
                case'/Online_Order':
                    require_once("index.php"); 
                    require_once("header.php"); 
                    require_once("sidebar.php");
                    require_once("customerorder.php");
                    require_once("footer.php");
                    break;
                    
                case'/Payment_Details':
                    require_once("index.php"); 
                    require_once("header.php"); 
                    require_once("sidebar.php");
                    require_once("paymentdetails.php");
                    require_once("footer.php");
                    break;    

                default:
                    require_once("index.php");
                    require_once("404.php");
                    break;
            }
        }
    }
}
$obj=new admin_controller;
?>