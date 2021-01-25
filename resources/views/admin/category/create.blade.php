@extends("admin.layout.default")

@section("content")
    <div class="container" id="CreateCustomer">
        <form action="/admin/category/store" method="POST">
            <?php $category = ''; ?>
            @include("admin.category.form")

        </form>
        @if(session("success"))
            <h3 class="text-primary">{{session("success")}}</h3>
        @endif
    </div>
@endsection

