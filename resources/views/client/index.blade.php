@extends('Client.masterlayout')

@section('title', 'Home Page')

@section('content')

    <div class="container-fluid bannerContainer">
        <div class="row">
            <div class="col-md-12 text-center">
                <br><br>

                <div class="mt-4 text-center">

                    <h1 class="text-white bannertitle" id="bannertitle">
                        <span style="font-size: 3.8rem; font-weight: bold;">The #1 site real estate <br> professionals
                            trust</span>
                        <span class="text-white;" style="font-size: 1px;">*</span>
                    </h1>
                    <br>


                    <!-- Centered List -->
                    <span class="d-flex justify-content-center text-center text-white">
                        <ul class="list-unstyled d-flex justify-content-center">
                            <li class="mx-3 hover-underline">Rent</li>
                            <li class="mx-3 hover-underline">Rent</li>
                            <a href="{{ route('mappage') }}">
                                <li class="mx-3 hover-underline">Map</li>
                            </a>
                        </ul>
                    </span>


                    <br>

                    <!-- Search Bar with Search button -->
                    <div class="Searchdiv container" style="position: relative; padding-left: 300px; padding-right: 300px;">
                        <input type="search" id="search" name="search" placeholder="Search"
                            class="form-control headerSearch"
                            style="padding-right: 50px; border-radius: 25px; height: 40px; padding-left: 15px;">
                        <button id="search-btn">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>




            </div>
        </div>
    </div>

    <div class="container" style="max-width: 1250px">
        <div class="row reviewcard mt-5">


            <div class="col-md-6">
                <h2>Selling? Get Free Parposal <br>
                    From Agent in your Atrea</h2>
                <p>find a Trusted expert, no obligaitons</p>
            </div>

            <div class="col-md-3">

            </div>

            <div class="col-md-3 mt-2 ">
                <a href="" class="btnreview ">Start Now For Free</a>

            </div>

        </div>
    </div>



    <br>
    <br>


@endsection
