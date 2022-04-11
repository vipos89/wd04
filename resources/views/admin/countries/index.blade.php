@extends('layouts.admin')

@section('content')
<div class="grid_3 grid_5">
    <h3 class="head-top">Countries</h3>



    @includeIf('partials.ololo' , ['message' => '111111'])

    <div class="but_list">
        <div class="col-md-12 page_1">
            <p>Add modifier classes to change the appearance of a badge.</p>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th >#</th>
                    <th >Название статьи</th>
                    <th > Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach($countries as $country)
                <tr>
                    <td> {{$loop->iteration}}</td>
                    <td>{{ $country->name }}</td>
                    <td>
                        <a href="{{ route('admin.country.edit', ['country'=> $country ]) }}" class="btn btn-lg btn-info">Редактировать</a>
                        <form method="POST" action="{{ route('admin.country.destroy', ['country'=> $country ]) }}">
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