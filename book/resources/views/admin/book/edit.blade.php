@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
               @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}
                        @endforeach
                    </div>
                @endif

                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
                <form action="admin/book/edit/{{$book->id}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label>Title</label>
                        <input class="form-control" value="{{$book->title}}" name="title" placeholder="Please Enter Username" />
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" value="{{$book->description}}" rows="3" name="desc">{{$book->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Author</label>
                        <input class="form-control" value="{{$book->author}}" name="author" placeholder="Please Enter Username" />
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <img src="upload/img/{{$book->img}}" alt="">
                        <input type="file" name="image" >
                    </div>
                    
                    <button type="submit" class="btn btn-default">Add</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection