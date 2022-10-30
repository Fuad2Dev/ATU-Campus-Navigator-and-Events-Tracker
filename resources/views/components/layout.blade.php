@props(['page' => ''])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">

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

    

    {{-- page --}}
    @switch($page)
        @case('event.create')
            <!-- Jquery -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

            <!-- Select2 -->
            <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        @break

        {{-- @case(2)
            
            @break --}}

        @default
    @endswitch

    <style>

    </style>

</head>

<body {{ $attributes }}>

    <!-- Start your project here-->
    <div class="d-flex flex-column vh-100 w-100">
        <!-- nav -->
        <div class="">
            <x-sidebar />
            <div class="main-panel">
                <div class="panel-header">

                    <x-navbar />
                </div>
                <div class="panel-body">
                    <div class="panel-right">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <script  src="{{asset('js/sidebar.js')}}"></script>


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
