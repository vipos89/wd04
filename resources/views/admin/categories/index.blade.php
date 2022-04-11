@extends('layouts.admin')

@section('content')
<div class="grid_3 grid_5">
    <h3 class="head-top">Категории товаров</h3>
    

    <div class="but_list">
        <div class="col-md-12 page_1">
            <p><a href="{{ route('admin.category.create') }}" class="btn btn-info"> Создать</a> </p>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th >#</th>
                    <th >Название категории</th>
                    <th > Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                <tr>
                    <td> {{$loop->iteration}}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('admin.category.edit', ['category'=> $category ]) }}" class="btn btn-lg btn-info">Редактировать</a>
                        <form method="POST" action="{{ route('admin.category.destroy', ['category'=> $category ]) }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-lg btn-danger">Удалить</button>
                        </form>

                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>
@endsection