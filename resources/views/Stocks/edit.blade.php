@extends('layouts/backoffice')


@section('corps')
<div class="form-group">
        <form enctype="multipart/form-data" action="/save-stock" method="post" class="card col-6">
            @csrf
            <h4 class="text-center mt-2">Modifier {{$stock->name}}</h4>
            <div> 
                <input type="hidden" name="id" value="{{ $stock->id }}">
            </div>
            <div class="form-group mt-2">
                <input type="text" name="name" value="{{ $stock->name }}" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="numserie" placeholder="{{ $stock->numserie }}" class="form-control">
            </div>
            
            <div class="mb-2">
                <input type="submit" class="btn btn-success">
                <a href="/gestion-stocks" class="btn btn-danger">Annuler</a>
            </div>
            
        </form>
    </div>
@endsection