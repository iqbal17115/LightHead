@extends('layouts.ecommerce')
@section('content')

<main class="main">

    <style>
        .bg-image {
            background-image: url('/images/contactbgimage.jpg');
            min-height: 500px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
        </div>
    </nav>

    <div id="map"></div>

    <div class="container contact-us-container">
        <div class="contact-info">
            <div class="row">
                <div class="col-12 bg-image">
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box text-center">
                        <i class="sicon-location-pin"></i>
                        <div class="feature-box-content">
                            <h3>Address</h3>
                            <h5>
                                @if(isset($companyInfo->address))
                                {{$companyInfo->address}}
                                @endif
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box text-center">
                        <i class="fa fa-mobile-alt"></i>
                        <div class="feature-box-content">
                            <h3>Phone Number</h3>
                            <h5>
                                @if(isset($companyInfo->phone))
                                {{$companyInfo->phone}}
                                @endif
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box text-center">
                        <i class="far fa-envelope"></i>
                        <div class="feature-box-content">
                            <h3>E-mail Address</h3>
                            <h5>
                                @if(isset($companyInfo->email))
                                {{$companyInfo->email}}
                                @endif
                            </h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box text-center">
                        <i class="sicon-location-pin"></i>
                        <div class="feature-box-content">
                            <h3>Address</h3>
                            <h5>
                                @if(isset($companyInfo->address))
                                {{$companyInfo->address}}
                                @endif
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box text-center">
                        <i class="fa fa-mobile-alt"></i>
                        <div class="feature-box-content">
                            <h3>Phone Number</h3>
                            <h5>
                                @if(isset($companyInfo->phone))
                                {{$companyInfo->phone}}
                                @endif
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-8"></div>
</main>
@endsection
