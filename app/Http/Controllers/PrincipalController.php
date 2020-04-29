<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PrincipalController extends Controller
{
    /**
     * Muestra la pagina principal con algunos productos por categoria
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	// Seccion Lanapelo
        $lanapelos_id = 1;
    	// Seccion Kanekalon
        $kanekalon_id = 2;
    	// Seccion Moños o Colas
        $colas_id = 3;
    	// Seccion Accesorios
        $accesorios_id = 4;

        // Hay que tener cuidado en que existan productos en la categoria
        $productos_lanapelos = $this->getProducts($lanapelos_id, 10);
        $productos_kanekalon = $this->getProducts($kanekalon_id, 10);
        $productos_colas = $this->getProducts($colas_id, 10);
        $productos_accesorios = $this->getProducts($accesorios_id, 10);

        // dd($productos_lanapelos);

        return view('index', 
        	compact(
        		'productos_lanapelos',
        		'productos_kanekalon',
        		'productos_colas',
        		'productos_accesorios'
        	)
        );
    }

    /**
     * Muestra la pagina solicitada y sus productos
     *
     * @return \Illuminate\Http\Response
     */
    public function renderPage()
    {
    	$route = Route::current()->uri();
        $categoria_id = App\Categoria::where('nombre', $route)->value('id');
		$productos = $this->getProductsAll($categoria_id);

		return view($route, compact('productos'));
    }

    /**
     * Obtener una cantidad de productos
     */
    private function getProducts($categoria_id, $limit = 20) {
    	$productos = App\Producto::select('productos.*', 'imagenes.principal', 'imagenes.ruta')
	    	->leftJoin('imagenes', 'imagenes.producto_id', '=', 'productos.id')
	        ->latest()->limit($limit)
	        ->where([
	            ['productos.unidades', '>', 0],
	            ['productos.categoria_id', $categoria_id]
        	])->get();
        return $productos;
    }

    // Obtener todos los productos
    private function getProductsAll($categoria_id) {
	    $productos = App\Producto::select('productos.*', 'imagenes.principal', 'imagenes.ruta')
	    	->leftJoin('imagenes', 'imagenes.producto_id', '=', 'productos.id')
	        ->latest()
	        ->where([
	            ['productos.unidades', '>', 0],
	            ['productos.categoria_id', $categoria_id]
	        ])->paginate(20);
        return $productos;
    }
}
