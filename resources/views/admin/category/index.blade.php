@extends("admin.layout.default")

@section("content")
    <div class="container-fluid">
        <button class="btn btn-primary"><a href="/admin/category/create" style="color: white" class="text-white text-decoration-none mb-5">Add new Category</a></button>
        <hr>
        <table class="table table-responsive">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th colspan="2" class="text-center">Action</th>
                </tr>
            <tbody>
                @foreach($categories as $category)
                  <tr>
                      <td>{{$category->id}}</td>
                      <td>{{$category->name}}</td>
                      <td>{{$category->description}}</td>
                      @if($category->status == "1")<td>Active @elseif($category->status == "0")<td>Deactivate</td> @endif
                      <td><button class="btn btn-warning"><a href="/admin/category/show/{{$category->id}}" class="text-white text-decoration-none" style="color: white;">Edit</a></button></td>
                      <td>
                          @include("admin.category.delete")
                          <button class="btn btn-danger"><a data-toggle="modal" href="#delete{{$category->id}}" title="Delete this Promotion" style="color: white">
                                  <i class="icon-trash text-danger"></i>Delete
                              </a></button>
                      </td>
                  </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
