@extends('layouts/main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Пользователь</h1>
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
                        <a href="{{route('user.edit', $user->id)}}" class="btn btn-primary">Редактировать</a>
                    </div>
                    <form action="{{route('user.delete', $user->id)}}" method="POST">
                        <input type="submit" class="btn btn-danger" value="Удалить">
                        @csrf
                        @method('delete')
                    </form>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <tbody>

                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Имя</th>
                            <th>Отчество</th>
                            <th>Возраст</th>
                            <th>Адрес</th>
                            <th>Пол</th>
                        </tr>

                        <tr>

                            <td>{{$user->id}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->surname}}</td>
                            <td>{{$user->patronymic}}</td>
                            <td>{{$user->age}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{ $user->genderTitle}}</td>
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
