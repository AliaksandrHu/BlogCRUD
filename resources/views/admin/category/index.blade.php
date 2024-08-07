@extends('admin.layouts.admin')

@section('content')
    <h1>Admin CATEGORIES</h1>


    <form action="{{ route('admin.category.store') }}" method="post">
        <h2>Добавить категорию</h2>
        @csrf
        <input type="text" id="title" name="title">
        <button type="submit">Добавить</button>
    </form>



    <table>
        <thead>
            <tr>
                <th>Название категории</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->title }}</td>
                <td>
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseCategoryEdit{{ $category->id }} " role="button" aria-expanded="false" aria-controls="collapseCategoryEdit{{ $category->id }}">Редактировать</a> |
                    <form action="{{ route('admin.category.delete', $category->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">Удалить</button>
                    </form>
                </td>
            </tr>
           <tr>
               <td>
                   <p>Редактировать категорию.</p>
                    <div class="collapse" id="collapseCategoryEdit{{ $category->id }}">
                        <div class="card card-body">
                            <form action="{{ route('admin.category.update', $category->id) }}" method="post">
                                @method('patch')
                                @csrf
                                <input type="text" id="title" name="title" value="{{ $category->title }}">
                                <button type="submit">Сохранить</button>
                            </form>
                        </div>
                    </div>
               </td>
           </tr>
        @endforeach
        </tbody>
    </table>
@endsection
