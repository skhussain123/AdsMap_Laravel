@extends('client.masterlayout')
@section('title', 'Business Register')

@section('content')


    <br>
    <br>

    <div class="container">
        <form action="" method="post">
            <h3 class="text-center">Please Provide Your Business Details</h3>
            <div class="row mt-5">

                <div class="col-md-6">
                    <label for="">Full Name</label>
                    <input type="email" class="form-control" name="" id="">

                    <br>

                    <label for="">Full Name</label>
                    <input type="email" class="form-control" name="" id="">

                    <br>

                    <label for="">Full Name</label>
                    <input type="email" class="form-control" name="" id="">


                </div>

                <div class="col-md-6">
                    <label for="">Email Address</label>
                    <input type="email" name="" class="form-control" id="">

                    <br>

                    <label for="">Full Name</label>
                    <input type="email" class="form-control" name="" id="">

                    <br>

                    <label for="">Full Name</label>
                    <input type="email" class="form-control" name="" id="">

                </div>


                <input type="submit" value="Submit" class="form-control btn btn-primary mt-5">

            </div>

        </form>
    </div>

@endsection
