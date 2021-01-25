@extends("admin.layout.default")

@section("content")
    <div class="container-fluid">
        <button class="btn btn-primary"><a href="/PaymentType/create" style="color: white" class="text-white text-decoration-none mb-5">Add new Payment Type</a></button>
        <hr>
        <?php $i=0; ?>
        <table class="table table-responsive">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Status</th>
                <th colspan="2" class="text-center">Action</th>
            </tr>
            <tbody>
            @foreach($Payment_Type as $Payment_Type)
                <tr>
                    <td>{{$i=$i+1}}</td>
                    <td>{{$Payment_Type->name}}</td>

{{--                    <td><input type="checkbox"--}}
{{--                         checked  placeholder="status" class="form-control" ></td>--}}
                    @if($Payment_Type->status == "1")<td>Active @else <span>Deactived</span></td> @endif
                    <td></td>
                    $Payment_Type->status
                    <td><button class="btn btn-warning"><a href="/Payment_Type/edit/{{$Payment_Type->id}}" class="text-white text-decoration-none" style="color: white;">Edit</a></button></td>
                    <td>
{{--                        @include("Payment_Type.delete")--}}
                        <button class="btn btn-danger"><a data-toggle="modal" href="#delete{{$Payment_Type->id}}" title="Delete this Promotion" style="color: white">
                                <i class="icon-trash text-danger"></i>Delete
                            </a></button>
                    </td>
                </tr>
{{--                                    @else()--}}
{{--                                        <td colspan="7"><h1 class="text-center">No data available</h1></td>--}}
            @endforeach
            </tbody>
        </table>
{{--        {{->links()}}--}}
    </div>

@endsection
