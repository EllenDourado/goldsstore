<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class StoreController extends Controller
{
    public function index(){

        $stores = \App\Store::paginate(10);

        return view('admin.stores.index', compact('stores'));
    }

    public function create(){

        $users = \App\User::all(['id','name']);

        return view('admin.stores.create', compact('users'));
    }

    public function store(Request $request){

        $data = $request->all();

        $user = \App\User::find($data['user']);
        $store = $user->store()->create($data);

        return $store;
    }

    public function edit($store){

        $store = \App\Store::find($store);

        return view('admin.stores.edit',compact('store'));
    }

    public function update($store, Request $request){

        $data = $request->all();
        $store = \App\Store::find($store);
        $store->update($data);

        return $store;
    }

    public function destroy($store){

        $store = \App\Store::find($store);
        $store->delete();

        return redirect('/admin/stores');
    }
}
