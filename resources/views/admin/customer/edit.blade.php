@extends("layouts.index")

@section("content")
    <div class="container" >
        <form action="/admin/customer/update" method="POST">
            @include("admin.customer.form")
        </form>
        @if(session("success"))
            <h3 class="text-primary">{{session("success")}}</h3>
        @endif
    </div>
@endsection
