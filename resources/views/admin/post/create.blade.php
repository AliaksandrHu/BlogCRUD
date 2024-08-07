@extends('admin.layouts.admin')

@section('content')
    <h1>Admin CREATE POSTS</h1>
    {{--
            $table->string('title');
            $table->text('description');
            $table->text('content');
            $table->text('prev_img');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('user_id');
            --}}

    <form action="" method="post">
        <div>
            <label for="title">Заголовок статьи</label>
            <input type="text" id="title" name="title">
        </div>

        <div>
            <label for="description">Краткое описание</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>

        <div>
            <label for="content">Текст статьи</label>
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
        </div>

        <div>
            <label for="category_id">Категория</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Космос</option>
                <option value="1">Музыка</option>
                <option value="2">Технологии</option>
                <option value="3">Коты</option>
            </select>
        </div>
        <button type="submit">Добавить</button>
    </form>
@endsection
