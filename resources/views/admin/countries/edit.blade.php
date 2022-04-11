@extends('layouts.admin')

@section('content')
 
    @if(count($errors->all()))
        @dump($errors->all())
    @endif
    <div class="grid-form">
        <div class="grid-form1">
            <h3 id="forms-example" class="">Edit статьи</h3>
            <form action="{{ route('admin.country.update', ['country'=> $country]) }}" method="POST" enctype="multipart/form-data">
               @method('PUT')
                @csrf
                <div class="form-group">
                    <label >Название</label>
                    <input type="text" name="name" class="form-control"  value="{{$country->name}}">
                </div>
                <div class="form-group">
                    <label >Код страны</label>
                    <input type="text" name="code" class="form-control"  value="{{$country->code}}">
                </div>



                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
@endsection