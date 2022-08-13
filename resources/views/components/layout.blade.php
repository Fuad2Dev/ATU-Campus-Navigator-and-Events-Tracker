@props(['page' => ''])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset("css/mdb.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("css/custom.css" ) }}"/>

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

</head>

<body {{ $attributes }}>
    <!-- Start your project here-->
    <div class="d-flex flex-column vh-100">
        {{ $slot }}
    </div>
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>



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
