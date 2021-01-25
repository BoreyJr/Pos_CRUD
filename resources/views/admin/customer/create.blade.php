@extends("admin.layout.default")

@section("content")
    <div class="container" id="CreateCustomer">
        <form action="/admin/customer/store" method="POST">
            @include("admin.customer.form")
        </form>
        @if(session("success"))
            <h3 class="text-primary">{{session("success")}}</h3>
        @endif
    </div>
@endsection

