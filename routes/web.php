<?php

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

Route::get('/', function() {

    $helloWord = 'Hello Word';

    return view('welcome',compact('helloWord'));
});

Route::get('/model', function(){

    //$products = \App\Product::all(); // select * from products

    //$user = new \App\User();
    //$user = \App\User::find(1);
    //$user->name = 'Usuário Teste Editado...';

    //$user->save();
    // \App\User::all(); //- retorna todos os usuários
    // \App\User::find(3); // - retorna o usuário com base no id
    //\App\User::where('name','Kay Sporer"')->first(); //select * from users where name = 'Kay Sporer"'
    //\App\User::paginate(10); // - paginar todos com laravel

    //Mass Assignment - Atribuíção em massa

    /* $user = \App\User::create([

        'name' => 'Ellen Dourado',
        'email'=> 'ellend.geral@gemail.com',
        'password' => bcrypt('142529')
    ]); */

    
    //Mass Update
    //$user = \App\User::find(42);

    // sobrescreve o valor da variável com o retorno do update se quiser usá-lo pra alguma coisa. Se vc quiser manter os dados do obj usuário, não atribui a variável
    //$user = $user->update([ 
       // 'name' => 'Atualizando com Mass Update'
    //]);// true or false
    
    //dd($user);

   return \App\User::all();
});
