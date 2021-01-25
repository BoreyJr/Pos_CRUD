@extends("layouts.index")

@section("content")
    <div class="container" id="CreateCustomer">
        <form action="/admin/user/store" method="POST">
            @include("admin.user.form")
        </form>
        @if(session("success"))
            <h3 class="text-primary">{{session("success")}}</h3>
        @endif
    </div>
@endsection

