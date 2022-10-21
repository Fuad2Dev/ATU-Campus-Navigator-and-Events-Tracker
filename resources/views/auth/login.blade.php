{{-- <x-layout > --}}
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


            <form action="{{ route('login') }}" method="POST" class="row g-4 container">
                @csrf
                <x-alert />

                <x-form.text-box label="ID" name="id" />
                <x-form.text-box name="password" label="Password" type="password" />


                <!-- 2 column grid layout for inline styling -->
                <div class="row my-4 col-lg-6 m-auto">
                    <div class="col-sm-12 col-md-6 d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check ">
                            <input class="form-check-input" type="checkbox" name="remember_me" value="yes" checked />
                            <label class="form-check-label" for="form2Example34"> Remember me </label>
                        </div>
                    </div>

                    <div class="text-center col-sm-12 col-md-6">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                    </div>
                </div>

                <!-- Submit button -->
                <div class="text-center">

                    <button type="submit" class="btn btn-primary mb-4 col-5">Sign in</button>
                </div>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Not a member? <a href="{{ route('user.register') }}">Register</a></p>

                </div>
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
