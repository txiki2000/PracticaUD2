<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductosController extends AbstractController
{
    /**
     * @Route("/alta", name="alta")
     */
    public function altaProducto()
    {
        return $this->render('productos/altaProducto.html.twig');
    }
    /**
     * @Route("/baja", name="baja")
     */
    public function bajaProducto()
    {
        return $this->render('productos/bajaProducto.html.twig');
    }
    /**
     * @Route("/listado", name="listado")
     */
    public function listadoProducto()
    {
        $tabla = array(["codigo" => "id0", "nombre" => "Producto N.0", "stock"=> 33.0, "precio" => 33.0],
        ["codigo" => "id1", "nombre" => "Producto N.1", "stock"=> 331, "precio" => 33.1],
        ["codigo" => "id2", "nombre" => "Producto N.2", "stock"=> 332, "precio" => 33.2],
        ["codigo" => "id3", "nombre" => "Producto N.3", "stock"=> 333, "precio" => 33.3],
        ["codigo" => "id4", "nombre" => "Producto N.4", "stock"=> 334, "precio" => 33.4],
        ["codigo" => "id5", "nombre" => "Producto N.5", "stock"=> 335, "precio" => 33.5],
        ["codigo" => "id6", "nombre" => "Producto N.6", "stock"=> 336, "precio" => 33.6],
            );

        return $this->render('productos/listadoProducto.html.twig', [
            'tabla' => $tabla,
        ]);
    }
    /**
     * @Route("/modifica", name="modifica")
     */
    public function modificaProducto()
    {
        return $this->render('productos/modificaProducto.html.twig');
    }
}
