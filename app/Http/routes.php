<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Main@index');//pagina de inicio

Route::get('index', 'Usuario@index');//pagina principal usuario

Route::resource('main','Main');

Route::get('autentificacion', 'Main@autentificacion');

Route::resource('main','Main');

Route::get('/uri', ['as' => 'autentificacion', 'uses' => 'Main@autentificacion']);


Route::resource('log','LogController');

Route::get('logout','LogController@logout');

Route::resource('usuario','Usuario');

Route::resource('producto','Usuario_prod');



Route::get('imageform', 'usuario@show')//para redimencionar imagen

   
;


Route::post('imageform', function()
{
    $rules = array(
        'image' => 'required|mimes:jpeg,jpg|max:10000'
    );

    $validation = Validator::make(Input::all(), $rules);

    if ($validation->fails())
    {
        return Redirect::to('imageform')->withErrors($validation);
    }
    else
    {
    	$fecha=getdate();
    	   	
    	$rut=Auth::user()->rut;
    	$src='images/'.$rut;
        $file = Input::file('image');
        $file_name=$fecha['year'].$fecha['mon'].$fecha['mday'].$fecha['hours'].$fecha['minutes'].$fecha['seconds'].'.jpg';
       //$file_name = 'auto.jpg';//elegir nombre archivo con 
        $final=$rut.'/'.$file_name;
        if ($file->move($src, $file_name))
        {
            return Redirect::to('jcrop')->with('image',$final);
        }
        else
        {
            return "Error uploading file";
        }
    }
});


Route::get('jcrop', 'Usuario@edit');


Route::post('jcrop', function()
{
    $quality = 90;

   /* $fecha=getdate();
    $file_name=$fecha['year'].$fecha['mon'].$fecha['mday'].$fecha['hours'].$fecha['minutes'].$fecha['seconds'].'.jpg';
    $rut=Auth::user()->rut;*/
   	$src=Input::get('image');    
    $pagina_anterior=$_SERVER['HTTP_REFERER'];

    echo $pagina_anterior;

    
    $img  = imagecreatefromjpeg($src);
    
    //imagescale($img,400);
   // $size = getimagesize($src);
    $dest = ImageCreateTrueColor(200,200);
   
   $imagen=imagescale($img,400);
   imagejpeg($imagen,$src);
   $img  = imagecreatefromjpeg($src);
   //echo $imagen;
   
    imagecopyresampled($dest, $img, 0, 0, Input::get('x'),
        Input::get('y'), 200,200,
       Input::get('w'), Input::get('h'));
    imagejpeg($dest,$src, $quality);

    
   
    return "<img src='" . $src . "'>";
});


Route::get('newproduct','Usuario@update');

Route::get('myproducts','Usuario_prod@show');