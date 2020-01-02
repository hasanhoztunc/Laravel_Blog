@extends('layouts.adminlayout')
@section('adminContent')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Posts</h1>
            <a href="/posts/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Create Post</a>
          </div>

          <!-- Content Row -->
          <div class="row">
            <table class="table">
                <tr>
                    <th>Title</th>
                    <th>Created At</th>
                    <th></th>
                </tr>
                @if(count($posts)>1)
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td>{{$post->created_at}}</td>
                        <td><a href="posts/{{$post->id}}/edit" class="btn btn-warning">Update</a>
                            {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST'])!!}
                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('DELETE',['class'=>'btn btn-danger'])}}
                            {!!Form::close()!!}
                        </td>
                        </tr>
                    @endforeach
                @else
                    <tr>There is no posts!</tr><tr></tr><tr></tr>
                @endif
            </table>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

@endsection