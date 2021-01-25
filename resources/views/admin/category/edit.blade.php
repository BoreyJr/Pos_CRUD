@extends("admin.layout.default")
@section("content")
    <div class="container" >
        <form action="/admin/category/update" method="POST">
            @include("admin.category.form")
        </form>
        @if(session("success"))
            <h3 class="text-primary">{{session("success")}}</h3>
        @endif
    </div>
@endsection
