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

    .heading {
        font-family: Arial, Helvetica, sans-serif;
        color: #FFFFFF;
        font-size: 36px;
        text-shadow: 0px 0px 0px rgb(0 0 0 / 30%);
    }

    .heading-latest {
        color: #FFFFFF;
        font-family: "Roboto", Sans-serif;
        font-size: 19px;
        font-weight: 400;
    }

    .content-heading{
        font-family: Arial, Helvetica, sans-serif;
        color: #FFFFFF;
        font-size: 26px;
        text-shadow: 0px 0px 0px rgb(0 0 0 / 30%);
    }

    .content-heading-description{
        font-family: Arial, Helvetica, sans-serif;
        color: #FFFFFF;
        line-height: 1.2;
        font-size: 21px;
        text-shadow: 0px 0px 0px rgb(0 0 0 / 30%);
    }

    .vision_heading{
        font-family: Arial, Helvetica, sans-serif;
        color: #FFFFFF;
        font-size: 36px;
        text-shadow: 0px 0px 0px rgb(0 0 0 / 30%);
    }

    .page-header {
        padding-bottom: 3px;
        margin: -31px 0 20px;
        border-bottom: 1px solid #eee;
    }

    .button {
        position: relative;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background: #f72359;
        padding: 1em 2em;
        border: none;
        color: white;
        font-size: 1.2em;
        cursor: pointer;
        outline: none;
        overflow: hidden;
        border-radius: 100px;
    }

    .button span {
        position: relative;
        pointer-events: none;
    }

    .button::before {
        --size: 0;
        content: '';
        position: absolute;
        left: var(--x);
        top: var(--y);
        width: var(--size);
        height: var(--size);
        background: radial-gradient(circle closest-side, #4405f7, transparent);
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        transition: width .2s ease, height .2s ease;
    }

    .button:hover::before {
        --size: 400px;
    }
</style>
<main class="main about">
    <div class="page-header page-header-bg text-left">
        <div class="col-md-12 center" style="background-color: aquamarine">
            <div class="col-md-6 ml-6">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzRWu7i6R9krXAMoqflVyrm4Us6kak273xZCTQfHgPSMW5ryTTsf_PBBPxrzy75E31plg&usqp=CAU"
                    alt="..." class="img-thumbnail">
            </div>
            <div class="col-md-6">
                <p class="heading" style="margin-top: 29px;">
                    @if(isset($AboutUsInfo->heading))
                    {{$AboutUsInfo->heading}}
                    @endif
                </p>
                <p class="heading">
                    @if(isset($AboutUsInfo->sub_heading))
                    {{$AboutUsInfo->sub_heading}}
                    @endif
                </p>

                <p class="heading-latest">
                    Here Some of Our Latest Work
                </p>

                <button class="button">
                    <span>Discover More</span>
                </button>
            </div>
        </div>

        <div class="col-md-12 center" style="background-color: rgb(52, 105, 61)">
            <div class="col-md-6">
                <p class="content-heading" style="margin-top: 31px;">
                    @if(isset($AboutUsInfo->content_heading))
                       {{$AboutUsInfo->content_heading}}
                    @endif
                </p>

                <h1 class="content-heading-description">
                    @if(isset($AboutUsInfo->content_description))
                       {!!$AboutUsInfo->content_description!!}
                    @endif
                </h1>
            </div>

            <div class="col-md-6">
                @if(isset($AboutUsInfo->content_image))
                {{-- <img src="{{ asset('storage/photo/' .$category->image1) }}" width="205"
                height="205" alt="product"> --}}
                 <img src="{{ asset('storage/photo/' .$AboutUsInfo->content_image) }}" alt="..." class="img-thumbnail">
                @endif
            </div>
        </div>

        <div class="col-md-12 center" style="background-color: rgb(16, 209, 235)">
                @if(isset($AboutUsInfo->vision_heading))
                    <p class="vision_heading">{{$AboutUsInfo->vision_heading}}</p>
                @endif

                @if(isset($AboutUsInfo->vision_sub_heading))
                   <p class="vision_heading">{{$AboutUsInfo->vision_sub_heading}}</p>
                @endif
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
                <p>Test test</p>
                <p>Test test</p>
                <p>Test test</p>
            </div>
            <div class="col-md-6">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzRWu7i6R9krXAMoqflVyrm4Us6kak273xZCTQfHgPSMW5ryTTsf_PBBPxrzy75E31plg&usqp=CAU"
                    alt="..." class="img-thumbnail">
            </div>
        </div>


        <div class="col-md-12 center" style="background-color: rgb(223, 16, 95)">
            <p>Making Marketing Smarter</p>
        </div>
    </div>
</main>
@endsection
{{-- <script>
    document.querySelector('.button').onmousemove = function (e) {
	var x = e.pageX - e.target.offsetLeft;
	var y = e.pageY - e.target.offsetTop;
	e.target.style.setProperty('--x', x + 'px');
	e.target.style.setProperty('--y', y + 'px');
};
</script> --}}
