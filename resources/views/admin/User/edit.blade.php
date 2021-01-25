@extends("layouts.index")

@section("content")
    <div class="container" >
        <form action="/admin/user/update" method="POST">
            @include("admin.user.form")
        </form>
        @if(session("success"))
            <h3 class="text-primary">{{session("success")}}</h3>
        @endif
    </div>
@endsection
