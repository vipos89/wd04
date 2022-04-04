@extends('layouts.admin')

@section('content')


    <div class="grid-form">
        <div class="grid-form1">
            <h3 id="forms-example" class="">Добавление статьи</h3>
            <form action="{{ route('admin.article.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label >Название</label>
                    <input type="text" name="name" class="form-control"  >
                </div>
                @if($errors->has('name'))
                    @foreach($errors->get('name') as $errorMessage)
                    <div class="alert alert-danger" role="alert">
                      {{ $errorMessage }}
                    </div>
                    @endforeach
                @endif
                <div class="form-group">
                    <label >Image</label>
                    <input type="file" name="image" class="form-control"  >
                </div>
                <div class="form-group">
                    <label >Содержание</label>
                    <textarea name="content" cols="30" rows="10" class="form-control "></textarea>
                </div>
                @if($errors->has('content'))
                    @foreach($errors->get('content') as $errorMessage)
                        <div class="alert alert-danger" role="alert">
                            {{ $errorMessage }}
                        </div>
                    @endforeach
                @endif

                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
@endsection