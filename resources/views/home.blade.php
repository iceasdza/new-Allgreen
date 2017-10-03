@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Create catagories
                    <form  method="POST" action="/admin">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <h4>Catagory name</h4> <input type="text" name="catagoryName" class="form-control">
                    {{--  <h4>Catagory descriprion</h4> <input type="text" name="catagoryDes" class="form-control">  --}}
                    <br>
                    <input class="btn btn-default" type="submit" value="Add catagory">
                    </form>
                    <hr>
                    @foreach($items as $item)
                        <div class="panel-body">
                        <a href="/admin/catagoriesID={{$item->CatagoriesID}}">{{$item->catagoriesName}}</a>
                        <hr>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
