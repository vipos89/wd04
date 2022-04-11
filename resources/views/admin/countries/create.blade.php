@extends('layouts.admin')

@section('content')

    @if(count($errors->all()))
    @dump($errors->all())
    @endif
    <div class="grid-form">
        <div class="grid-form1">
            <h3 id="forms-example" class="">Добавление статьи</h3>
            <form action="{{ route('admin.country.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label >Название</label>
                    <input type="text" name="name" class="form-control"  >
                </div>
                <div class="form-group">
                    <label >Код страны</label>
                    <input type="text" name="code" class="form-control"  >
                </div>



                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
@endsection