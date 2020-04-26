@extends('layouts.app')

@section('content')
    <h1>Criar Loja</h1>
    <form action="rout('admin.stores.update',['store'=>$store->id])}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <label>Nome Loja</label>
            <input type="text" name="name" value="{{$store->name}}" class="form-control">
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="description" value="{{$store->description}}" class="form-control">
        </div>

        <div class="form-group">
            <label>Telefone</label>
            <input type="text" name="phone" value="{{$store->phone}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Celular/Whatsapp</label>
            <input type="text" name="mobile_phone" value="{{$store->mobile_phone}}" class="form-control">
        </div>

        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" value="{{$store->slug}}" class="form-control">
        </div>
        <div>
            <button type="submit" class="btn btn-success">Alterar Loja</button>
        </div>
    </form>
@endsection