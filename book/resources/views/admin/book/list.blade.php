@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->

            <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tile</th>
                        <th>Description</th>
                        <th>Author</th>
                        <th>Img</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                
                <tbody>
                     @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif

                    @foreach ($book as $key => $value) 
                            
                   
                    <tr class="odd gradeX" align="center">
                        <td>{{$value->id}}</td>
                        <td>{{$value->title}}</td>
                        <td>{{$value->description}}</td>
                        <td>{{$value->author}}</td>
                        <td>{{$value->img}}</td>
                        <td>
                        
                            <button class="btn btn-danger" data-catid={{$value->id}} data-toggle="modal" data-target="#delete">Delete</button>
                       
                            <div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
                                  </div>
                                  <form action="delete" method="post">
                                        {{csrf_field()}}
                                      <div class="modal-body">
                                            <p class="text-center">
                                                Are you sure you want to delete this?
                                            </p>
                                            <input type="hidden" name="category_id" id="cat_id" value="">

                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
                                        <button type="submit" class="btn btn-warning">Yes, Delete</button>
                                      </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                       </td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/book/edit/{{$value->id}}">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection