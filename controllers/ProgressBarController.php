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
        $quantity=$_POST['quantity'];
        $goal=$_POST['goal'];
        $progressBar->setQuantity($quantity);
        $progressBar->setGoal($goal);
        $progress=$progressBar->getProgress();
        # show 
        require_once 'views/ProgressBar/create.php';
    }

}