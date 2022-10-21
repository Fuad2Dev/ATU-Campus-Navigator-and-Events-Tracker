{{-- <x-layout class="bg-white" style="height: 100vh; overflow: hidden"> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>

    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />

    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css"
        integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



</head class="bg-white" style="height: 100vh; overflow: hidden">

<body>

    <!-- Start your project here-->
    <div class="d-flex flex-column vh-100">
        <div class="d-flex align-items-center justify-content-center position-relative"
            style="height: 100%; overflow: hidden">

            <form action="{{ route('user.register') }}" method="POST" class="row g-4 container">
                @csrf
                <div class="row p-0 m-auto">
                    <div class="col">
                        <x-form.text-box label="First name" name="first_name" />
                    </div>
                    <div class="col">
                        <x-form.text-box label="Last name" name="last_name" />
                    </div>
                </div>

                <x-form.text-box label="ID" name="id" />
                <x-form.text-box label="Email" name="email" />
                <x-form.text-box label="password" type="password" name="password" />
                <x-form.text-box label="retype password" type="password" name="password_confirmation" />


                <div class="row my-4">
                    <div class="text-center">
                        <p class="m-0">Already have an account ?</p>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('login') }}">Sign in</a>
                    </div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block m-0">Sign up</button>

            </form>

        </div>
    </div>
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>



    <!-- Custom scripts -->
    {{-- @switch($page)
    @case('event.create')
        <script>
            $(document).ready(function() {
                $('.select2').select2({
                    // placeholder: 'Select Location'
                });
            });
        </script>
    @break

    @default
@endswitch --}}

</body>

</html>
