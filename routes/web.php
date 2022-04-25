<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//primera ruta
Route::get('hola', function(){
    //return view();
    echo "pagina hola";
});
Route::get('arreglos', function(){
    //return view();
    $estudiantes = ["YX" =>"Yox2","ML" =>"Manuel","EN" =>"Esteban","YD" =>"Yoxd"];
    echo "<pre>";
    var_dump($estudiantes);
    echo "</pre>";
    echo "<HR>";
    //agregar
    $estudiantes ["mo"]= "marco";
    echo "<pre>";
    var_dump($estudiantes);
    //eliminar
    echo "<HR>";
    unset($estudiantes["mo"]);
    echo "<pre>";
    var_dump($estudiantes);
});
Route::get('paises', function(){
    $paises = ["Colombia"=>["capital"=>"Bogota", "moneda"=>"Peso(COP)", "poblacion"=>51.6, "cuidades"=>["Medellin", "Cali"]],
                "Peru"=>["capital"=>"Lima", "moneda"=>"Sol", "poblacion"=>32.97, "cuidades"=>["Cuzco", "Piura"]],
                 "Paraguay"=>["capital"=>"Asunción", "moneda"=>"Guarani", "poblacion"=>7.1, "cuidades"=>["cuidad del este"]]];

    //foreach($paises as $pais => $infopais){
        //var_dump($pais);
        //echo "<h1>$pais</h1>";
        //echo "Capital: <br>".$infopais["capital"];
        //echo "<br>Moneda: <br>".$infopais["moneda"];
        //echo "<br>Poblacion: <br>".$infopais["poblacion"];
        //echo "<hr>";
    //};
    //foreach($paises as $pais => $infopais){
        //echo "<hr>";
        //echo "<h1>$pais</h1>";
        //foreach($infopais as $clave =>$valor){
            //echo "$clave : $valor<br>";
        //};
        
    //};
    return view('paises')->with("paises", $paises);
});
