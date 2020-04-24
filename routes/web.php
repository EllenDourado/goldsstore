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
    
    // como eu faria para pegar a  loja de um usuário
    //$user = \App\User::find(4);
    //dd($user->store()->count());//O objeto único (Store) se for collection de dados(objetos)

    //pegar os produtos de uma loja?
    //$loja = \App\Store::find(1);
    //return $loja->products; $loja->products()->where('id',9)->get();


    //Pegar as lojas de uma categoria de uma loja?
    //$categoria = \App\Category::find(1);
    //$categoria->products;

    //Criar uma loja para um usuário
 /*    $user = \App\User::find(10);
    $store = $user->store()->create([

        'name' => 'Loja Teste',
        'description' => 'Loja Teste de produtos de informática',
        'mobile_phone' => 'xx-xxxxx-xxx',
        'phone' => 'xx-xxxxx-xxx',
        'slug' => 'loja-teste'
    ]); */

    //Criar um produto  pra uma loja
  /*   $store = \App\Store::find(41);
    $product = $store->products()->create([

        'name' => 'Notebook Dell',
        'description' => 'CORE I5 10GB',
        'body' => 'Qualquer coisa...',
        'price' => 2999.90,
        'slug' =>'notebook-dell',
    ]); 
 */

    //Criar categoria
    /* \App\Category::create([
        'name' => 'Games',
        'description' => null,
        'slug' => 'games'
    ]);

    \App\Category::create([
        'name' => 'Notebooks',
        'description' => null,
        'slug' => 'notebooks'
    ]);

   return \App\Category::all(); */

   /* $product =  \App\Product::find(60);
   dd($product->categories()->sync([2])); */

   return \App\User::all();
});
