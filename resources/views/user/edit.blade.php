@extends('layouts/main')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать пользователя</h1>
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

                <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('patch')

                    <div class="form-group">
                        <input type="text" name="email" value="{{$user->email}}" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" name="surname" value="{{$user->surname}}" class="form-control" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <input type="text" name="patronymic" value="{{$user->patronymic}}" class="form-control" placeholder="Отчество">
                    </div>
                    <div class="form-group">
                        <input type="text" name="age" value="{{$user->age}}" class="form-control" placeholder="Возраст">
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" value="{{$user->address}}" class="form-control" placeholder="Адрес">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Редактировать">
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
