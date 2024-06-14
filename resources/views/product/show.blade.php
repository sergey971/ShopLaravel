@extends('layouts/main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Продукт</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Главная</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="card-header d-flex p-3">
                    <div class="mr-3">
                        <a href="{{route('category.edit', $product->id)}}" class="btn btn-primary">Редактировать</a>
                    </div>
                    <form action="{{route('product.delete', $product->id)}}" method="POST">
                        <input type="submit" class="btn btn-danger" value="Удалить">
                        @csrf
                        @method('delete')
                    </form>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <tbody>

                        <tr>
                            <td>ID</td>
                            <td>{{$product->id}}  </td>
                        </tr>
                        <tr>
                            <td>Наименование</td>
                            <td>{{$product->name}}  </td>
                        </tr>
                        <tr>
                            <td>ID</td>
                            <td>{{$product->id}}  </td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td>{{$product->description}}  </td>
                        </tr>
                        <tr>
                            <td>Контент</td>
                            <td>{{$product->content}}  </td>
                        </tr>
                        <tr>
                            <td>Изображние</td>
                            <td><img src="{{$product->preview_img}}" alt=""></td>
                        </tr>
                        <tr>
                            <td>Цена</td>
                            <td>{{$product->price}}  </td>
                        </tr>
                        <tr>
                            <td>Колличество на складе</td>
                            <td>{{$product->count}}  </td>
                        </tr>
                        <tr>
                            <td>Публикация</td>
                            <td>{{$product->is_published}}  </td>
                        </tr>
                        <tr>
                            <td>Категория id</td>
                            <td>{{$product->category_id}}  </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
