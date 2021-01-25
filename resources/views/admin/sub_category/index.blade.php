@extends("admin.layout.default")

@section("content")
    <div class="container-fluid">
        <button class="btn btn-primary"><a href="/admin/sub_category/create" style="color: white" class="text-white text-decoration-none mb-5">Add new Sub Category</a></button>
        <hr>
        <table class="table table-responsive">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Category ID</th>
                    <th>Status</th>
                    <th colspan="2" class="text-center">Action</th>
                </tr>
            <tbody>
                @foreach($sub_categories as $sub_category)
                  <tr>
                      <td>{{$sub_category->id}}</td>
                      <td>{{$sub_category->name}}</td>
                      <td>{{$sub_category->description}}</td>
                      <td>{{$sub_category->category_id}}</td>
                      <td>{{$sub_category->status}}</td>
                      <td><button class="btn btn-warning"><a href="/admin/sub_category/show/{{$sub_category->id}}" class="text-white text-decoration-none" style="color: white;">Edit</a></button></td>
                      <td>
                          @include("admin.sub_category.delete")
                          <button class="btn btn-danger"><a data-toggle="modal" href="#delete{{$sub_category->id}}" title="Delete this Promotion" style="color: white">
                                  <i class="icon-trash text-danger"></i>Delete
                              </a></button>
                      </td>
                  </tr>

                @endforeach
            </tbody>
        </table>
    </div>

@endsection
