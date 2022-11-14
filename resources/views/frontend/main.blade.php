@php $homeRoute =  request()->path() @endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('/images/icon.png') }}">
    <title>Icy Movies</title>

    <!--
    - custom css link
  -->

    @include('frontend.css')

</head>

<body>




    <!--
    - main container
  -->
    <div class="container">

        <!--
      - #HEADER SECTION
    -->

        <header class="">

            {{-- navbar start --}}

            @include('frontend.navbar')

            {{-- navbar end --}}

        </header>





        <!--
      - MAIN SECTION
    -->
        <main>

            @if ($homeRoute != '/')
                @yield('content')
            @endif

            <!--
        - #BANNER SECTION
      -->

            @if ($homeRoute == '/')
                <section class="banner">

                    @include('frontend.banner')

                </section>






                <!--
        - #MOVIES SECTION
      -->
                <section class="movies">

                    <!--
          - filter bar
        -->

                    @include('frontend.filter')


                    <!--
          - movies grid
        -->

                    @include('frontend.moviesGrid')

                    <!--
          - load more button
        -->
                    <button class="load-more">LOAD MORE</button>

                </section>





                <!--
        - #CATEGORY SECTION
      -->
                <section class="category" id="category">

                    @include('frontend.category')

                </section>





                <!--
        - #LIVE SECTION
      -->
                <section class="live" id="live">

                    @include('frontend.liveTV')

                </section>
            @endif

        </main>





        <!--
      - FOOTER SECTION
    -->
        <footer>

            @include('frontend.footer')

        </footer>

    </div>





    <!--
    - custom js link
  -->

    @include('frontend.script')

</body>

</html>
