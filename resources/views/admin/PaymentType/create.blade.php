@extends("admin.layout.default")

@section("content")
    <div class="container" id="CreatePaymentType">
        {{--        <form @submit.prevent="saveData">--}}


        {{--        <form action="/customer/create" method="POST">--}}
        <form method="post" action="/PaymentType/create">
            @include("admin.PaymentType.form")
        </form>
        @if(session("success"))
            <h3 class="text-primary">{{session("success")}}</h3>
        @endif
        {{--        @{{test}}--}}
    </div>
@endsection

