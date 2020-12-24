<?php
class ProgressBarController{
   public function index()
   {
       require_once 'views/ProgressBar/index.php';
   }
    public function create()
    {
        require_once 'models/progressBar.php';
        $progressBar=new ProgressBar();
        $color=$_GET['color'];
        # show 
        require_once 'views/ProgressBar/create.php';
    }
}