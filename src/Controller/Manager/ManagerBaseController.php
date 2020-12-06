<?php


namespace App\Controller\Manager;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ManagerBaseController extends AbstractController
{
    public function renderDefualt()
    {
        return ['title' => 'value default Admin'];
    }
}
