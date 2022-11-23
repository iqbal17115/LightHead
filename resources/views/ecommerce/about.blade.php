@extends('layouts.ecommerce')
@section('content')
<style>
    .center {
        display: flex;
        justify-content: center;
    }

    .containerss {
        position: relative;
        text-align: center;
        color: white;
    }

    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>
<main class="main about">
    <div class="page-header page-header-bg text-left">
        <div class="col-md-12 center" style="background-color: aquamarine">
            <div class="col-md-6">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzRWu7i6R9krXAMoqflVyrm4Us6kak273xZCTQfHgPSMW5ryTTsf_PBBPxrzy75E31plg&usqp=CAU"
                    alt="..." class="img-thumbnail">
            </div>
            <div class="col-md-6">
                <p>sdfsdfsdfsdfsd</p>
            </div>
        </div>

        <div class="col-md-12 center" style="background-color: rgb(52, 105, 61)">
            <div class="col-md-6">
                <p>sdfsdfsdfsdfsd</p>
            </div>

            <div class="col-md-6">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzRWu7i6R9krXAMoqflVyrm4Us6kak273xZCTQfHgPSMW5ryTTsf_PBBPxrzy75E31plg&usqp=CAU"
                    alt="..." class="img-thumbnail">
            </div>
        </div>

        <div class="col-md-12 center" style="background-color: rgb(16, 209, 235)">
            <div class="col-md-6">
                <p>Our Vision</p>
            </div>

            <div class="col-md-6">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzRWu7i6R9krXAMoqflVyrm4Us6kak273xZCTQfHgPSMW5ryTTsf_PBBPxrzy75E31plg&usqp=CAU"
                    alt="..." class="img-thumbnail">
            </div>
        </div>

        <div class="col-md-12 center" style="background-color: rgb(226, 19, 157)">
            <p>Our Mission</p>
        </div>


        <div class="col-md-12 center" style="background-color: rgb(179, 187, 192)">
            <p>Our Value</p>
        </div>

        <div class="col-md-12 center" style="background-color: rgb(179, 187, 192)">
            <div class="col-md-4 containerss">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzRWu7i6R9krXAMoqflVyrm4Us6kak273xZCTQfHgPSMW5ryTTsf_PBBPxrzy75E31plg&usqp=CAU"
                    alt="..." class="img-thumbnail">
                <div class="centered">Centered</div>
            </div>
            <div class="col-md-4 containerss">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzRWu7i6R9krXAMoqflVyrm4Us6kak273xZCTQfHgPSMW5ryTTsf_PBBPxrzy75E31plg&usqp=CAU"
                    alt="..." class="img-thumbnail">
                    <div class="centered">Centered</div>
            </div>
            <div class="col-md-4 containerss">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzRWu7i6R9krXAMoqflVyrm4Us6kak273xZCTQfHgPSMW5ryTTsf_PBBPxrzy75E31plg&usqp=CAU"
                    alt="..." class="img-thumbnail">
                    <div class="centered">Centered</div>
            </div>
        </div>


        <div class="col-md-12 center" style="background-color: rgb(226, 19, 157)">
               our Value
        </div>

        <div class="col-md-12 center" style="background-color: rgb(179, 187, 192)">
            <div class="col-md-6">
                 
            </div>
            <div class="col-md-6">

            </div>
        </div>

    </div>
</main>
@endsection
