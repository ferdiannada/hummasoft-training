@extends('layouts.admin.master')

@section('content')    

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ $title }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            {{ $titleForm }}
          </div>
          <div class="card-body">
            <form action="{{ route('articles.store') }}" method="post">
              @csrf
              <div class="row">
                <div class="col-5">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Judul" name="judul">
                    <label for="floatingInput">Judul</label>
                  </div>
                </div>
              </div>
            
              <div class="row">
                <div class="col-5">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Author" name="author">
                    <label for="floatingInput">Author</label>
                  </div>
                </div>
                <div class="col-8">
                  <div class="form-floating">
                    <textarea name="content" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 200px"></textarea>
                    <label for="floatingTextarea">Content</label>
                  </div>
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-sm-1">
                  <button class="btn btn-primary" type="submit" name="save">
                    Save
                  </button>
                </div>
                <div class="col-sm-2">
                  <a href="{{ route('articles.index') }}" class="btn btn-danger">Cancel</a>
                </div>
              </div>
            </form>
          </div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection