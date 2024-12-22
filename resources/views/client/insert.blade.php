@extends('Client.masterlayout')

@section('title', 'Home Page')

@section('content')

    <div class="container-fluid bannerContainer">
        <div class="row">
            <div class="col-md-12 text-center">
                <br><br>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class=" mt-5">Meezan Digital Selling Account</h1>
                <h5 class="">For Skilled Professionals Freelancer Just Starting Out</h5>

                <br>

                <p>Meezan Digital Freelancer Account is being offered to Resident individual Pakistanis, who are engaged in
                    provision of any digital/online services, including IT and IT related services. The account can be
                    opened digitally without physically visiting the branch, and completely fulfils the banking needs of
                    freelancers, enabling them to easily receive their work-related local and international payments
                    directly into their accounts.

                </p>

                <p style="font-weight: bold">NOTE: This account is offered only to New to Bank customers. Only one Digital
                    Freelancer Account will be offered per customer.</p>


                <br>
                <br>

                <h3>Account Features & Benefits</h3>
                <ul>
                    <li>Instant account opening

                    </li>

                    <li> No physical documentation requirements</li>
                    <li> No physical documentation requirements</li>
                    <li> No physical documentation requirements</li>
                </ul>

                <p>Freelancer account in PKR is connected to FCY retention account* where you can retain your exports’
                    earning in USD to make foreign business payments in future.

                    *(This is an Exporters’ Special Foreign Currency Retention Account (ESFCA), which is linked to your
                    existing Meezan Freelancer Digital Account (PKR) at Meezan. Export’s proceeds will be credited into the
                    special foreign currency account for FCY retention as per provided percentage. The funds available in
                    the ESFCA can be converted into PKR at any time upon the request of the customer.</p>

            </div>
        </div>
    </div>

    <div class="container-fluid bg-primary mt-5" style="padding-top: 60px">
        <div class="row text-white">
            <div class="col-md-12">

                <h3 class="text-center">How does Meezan Digital Freelancer Account work?</h3>
                <p class="text-center">Meezan Digital Freelancer Account is offered in both current & savings accounts under
                    the Islamic concept of Qard & Mudarabah.</p>
            </div>
        </div>

        <div class="row p-5 text-white">
            <div class="col-md-6">
                <p>On agreeing to become a Pak Rupee Account holder, the customer enters into a relationship based on
                    Mudarabah with Meezan Bank. Under this relationship, the customer is an Investor (Rab-ul-Maal) and the
                    Bank is the Manager (Mudarib) of the funds deposited by the customers. The Bank allocates the funds
                    received from the customers to a deposit pool; funds from the pool are utilized to provide financing to
                    customers under Islamic modes that include, but are not restricted to Murabaha, Ijarah, Istisna and
                    Diminishing Musharakah.</p>
            </div>

            <div class="col-md-6">
                <p>On agreeing to become a Pak Rupee Account holder, the customer enters into a relationship based on
                    Mudarabah with Meezan Bank. Under this relationship, the customer is an Investor (Rab-ul-Maal) and the
                    Bank is the Manager (Mudarib) of the funds deposited by the customers. The Bank allocates the funds
                    received from the customers to a deposit pool; funds from the pool are utilized to provide financing to
                    customers under Islamic modes that include, but are not restricted to Murabaha, Ijarah, Istisna and
                    Diminishing Musharakah.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row ">
            <div class="col-md-9">
                <h4 class="text-center">Please Provide your Property Details</h4>
                <br>

            </div>

            <div class="col-md-2">
                <a href="{{ route('businessregpage') }}">Apply Now</a>
            </div>
        </div>

        <br>

    </div>



    <div class="container-fluid mt-5 bg-primary text-center p-4">
        <div class="row text-white">

            <div class="col-md-3" style="border-right:1px solid white">
                <span class="d-flex">
                    <i class="fa fa-home " style="font-size: 24px"></i>
                    <h5 class="ms-2">Location Branch</h5>
                </span>
            </div>


            <div class="col-md-3" style="border-right:1px solid white">
                <span class="d-flex">
                    <i class="fa fa-home " style="font-size: 24px"></i>
                    <h5 class="ms-2">Location Branch</h5>
                </span>
            </div>

            <div class="col-md-3" style="border-right:1px solid white">
                <span class="d-flex">
                    <i class="fa fa-home " style="font-size: 24px"></i>
                    <h5 class="ms-2">Location Branch</h5>
                </span>
            </div>



            <div class="col-md-3" style="border-right:1px solid white">
                <span class="d-flex">
                    <i class="fa fa-home " style="font-size: 24px"></i>
                    <h5 class="ms-2">Location Branch</h5>
                </span>
            </div>

        </div>
    </div>

    {{-- 
    <h1 class="text-danger">Insert Location Page</h1>
    <p>This is the content of the index page.</p>

    <!-- Form -->
    <form id="locationForm" method="POST" action="#">
        @csrf
        <div>
            <label for="latitude">Latitude:</label>
            <input type="text" id="latitude" name="latitude" readonly>
        </div>
        <div>
            <label for="longitude">Longitude:</label>
            <input type="text" id="longitude" name="longitude" readonly>
        </div>
        <div>
            <button type="button" onclick="getLocation()">Get My Location</button>
            <button type="submit">Submit</button>
        </div>
    </form>

    <!-- JavaScript to Get User's Location -->
    <script>
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            document.getElementById('latitude').value = position.coords.latitude;
            document.getElementById('longitude').value = position.coords.longitude;
        }

        function showError(error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    alert("User denied the request for Geolocation.");
                    break;
                case error.POSITION_UNAVAILABLE:
                    alert("Location information is unavailable.");
                    break;
                case error.TIMEOUT:
                    alert("The request to get user location timed out.");
                    break;
                case error.UNKNOWN_ERROR:
                    alert("An unknown error occurred.");
                    break;
            }
        }
    </script> --}}



    <br>
    <br>


@endsection
