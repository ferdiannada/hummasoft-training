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
        <div class="row mb-3 ms-2">
          <a href="{{ route('articles.create') }}" class="btn btn-success col-1">
            Add New
          </a>
        </div>
        <div class="row row-cols-1 row-cols-md-3">
          @foreach ($article as $post)
          <div class="col">
            <div class="card">
              <div class="card-body">
                <a href="{{ route('articles.show', $post->id_article) }}">
                  <h5 class="card-title">{{ Str::limit($post->title, 15) }}</h5><br>
                </a>
                <p>by: {{ $post->author }}</p>
                <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-12 col-md-3">
                    <a href="{{ route('articles.edit', $post->id_article) }}" class="btn btn-success ">
                        Edit
                    </a>
                  </div>
                  <div class="col-12 col-md-3">
                    <form action="{{ route('articles.destroy', $post->id_article) }}" method="POST">
                      @csrf
                      @method("DELETE")
                      <button class="btn btn-danger" type="submit">
                        Delete
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>            
          @endforeach
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection