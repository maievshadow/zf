<?php
/**
 * Created by PhpStorm.
 * User: maievshabu
 * Date: 2018/6/27
 * Time: 下午2:02
 */

// src/Controller/MicroController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class MicroController extends Controller
{
    /**
     * @Route("/random/{limit}")
     */
    public function randomNumber($limit)
    {
        $number = rand(0, $limit);

        return $this->render('micro/random.html.twig', array(
            'number' => $number
        ));
    }
}