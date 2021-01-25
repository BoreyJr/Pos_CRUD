@extends("admin.layout.default")
@section("content")
    <div class="container" id="CreateCustomer">
        <form action="/admin/sub_category/store" method="POST">
            @include("admin.sub_category.form")
        </form>
        @if(session("success"))
            <h3 class="text-primary">{{session("success")}}</h3>
        @endif
    </div>
@endsection

