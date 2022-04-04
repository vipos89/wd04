@extends('layouts.admin')

@section('content')
<div class="grid_3 grid_5">
    <h3 class="head-top">Articles</h3>
    <div class="but_list">
        <div class="col-md-12 page_1">
            <p>Add modifier classes to change the appearance of a badge.</p>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th >Название статьи</th>
                    <th> Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach($articles as $article)
                <tr>
                    <td>{{ $article->name }}</td>
                    <td>
                        <a href="{{ route('admin.article.edit', ['article'=> $article ]) }}" class="btn btn-lg btn-info">Редактировать</a>
                        <form method="POST" action="{{ route('admin.article.destroy', ['article'=> $article ]) }}">
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