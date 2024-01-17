<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Use with CDN Link</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet" />

    <!-- animate.css cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- viewall.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/viewall.css') }}" />

    <style>
        .english {
            font-family: Cambria, Arial, SansSerif;
        }

        .bigtitle {
            font-family: 'Courier New', Courier, monospace;
        }

        .myQuote {
            font-family: SansSerif;
            font-style: italic;
        }

        -----------------------

        /* Define styles for the card  */
        .card {
            background: #9bc9f7;
            /* Other styles for the card */
        }

        /* Styles for the card header */
        .card-header {
            background: rgb(121, 234, 238);
            border-radius: 5px;
            /* Other styles for the card header */
        }

        /* Styles for the card block */
        .card-block {
            background: #9bc9f7;
            /* Other styles for the card block */
        }

        /* Additional hover effect for the card */
        .card:hover {
            transform: scale(1.05);
            /* Example: Increase size on hover */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            /* Example: Add a shadow on hover */
            /* Add any other style changes for the hover effect */
        }

        /* Example hover effect for the button inside the card */
        .card:hover .btn {
            background-color: orange;
            /* Change button color on hover */
            /* Add other style changes for the button on hover */
        }

        .card {
            /* ... */
            transition: transform 0.3s, box-shadow 0.3s;
            /* Add transition for smooth effect */
        }

        /* ------------------------ */
        /* pagination css start  */
        .pagination {
            font-family: Arial, sans-serif;
        }

        .pagination ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        .pagination li {
            margin: 5px;
        }

        .pagination a {
            padding: 8px 12px;
            text-decoration: none;
            border: 1px solid #ddd;
            color: #333;
            transition: background-color 0.3s ease;
        }

        .pagination a:hover {
            background-color: #2ebede;
        }

        .pagination .active a {
            background-color: #efdc5f;
            color: #fff;
        }

        /* pagination css end */
        /* pagination custom s */
        .pagination {
            font-family: Arial, sans-serif;
        }

        .pagination ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        .pagination li {
            margin: 5px;
        }

        .pagination a {
            padding: 8px 12px;
            text-decoration: none;
            border: 1px solid #ddd;
            color: #333;
            transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
            border-radius: 4px;
        }

        .pagination a:hover {
            background-color: #f5f5f5;
            border-color: #aaa;
            color: #000;
            transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
        }

        .pagination .active a {
            background-color: #eee52e;
            color: #fff;
            border-color: #f5e83f;
        }

        .main {
            background-color: skyblue;
        }

        .sub-main {
            width: 100%;
            height: 60px;
        }

        /* pagination custom e */
    </style>

    @yield('style')

    {{-- <link rel="stylesheet" href="{{ asset('assets/js/css/home_page.css') }}"> --}}
</head>

<body>
    <div class="wrapper d-flex flex-column main">
        <div class="w-100 fixed-top main" style="z-index: 1;">
            <nav class="navbar navbar-expand-lg bg-body-tertiary pb-0 pt-3">
                <div class="container-fluid main sub-main">

                    <div class="nav-item mx-5 me-5">
                        <a href="{{ route('cart') }}"><button type="button" class="btn btn-outline-secondary">
                                <i class="fa-sharp fa-solid fa-cart-shopping fa-beat-fade"></i> My Cart</button>
                        </a>
                    </div>

                    {{-- ms-5 --}}
                    <a class="navbar-brand mx-auto me-5" href="#">Book Shop</a>

                    {{-- Home menu Search-box --}}
                    {{-- <div class="navbar-collapse collapse" id="navbarSupportedContent">
																												<form class="d-flex w-50 mx-auto" role="search">
																																<input class="form-control me-2" type="" placeholder="Search"
																																				aria-label="Search">
																																<button class="btn btn-outline-secondary" type="submit">Search</button>
																												</form>
																								</div> --}}

                    <div class="nav-item mx-auto me-5">
                        <!--<button type="button" class="btn btn-outline-secondary" href="/Login_in">-->
                        @if ($user->username != null)
                        <a href="{{ route('Login') }}"> <button type="submit" class="btn btn-outline-secondary disabled">
                            <i class="fas fa-user-circle me-1"></i> {{ $user->username }}
                        </button>
                    </a>
                        @else
                        <a href="{{ route('Login') }}"> <button type="submit" class="btn btn-outline-secondary">
                            <i class="fas fa-user-circle me-1"></i> Logout
                        </button>
                        @endif
                    </a>
                    </div>
                </div>
            </nav>

            {{-- <div class="navbar navbar-expand-lg navbar-light bg-light">
																				<div class="container-fluid align-self-center w-75">
																								<a class="navbar-brand" href="#">Fiction</a>
																								<a class="navbar-brand" href="#">Science</a>
																								<a class="navbar-brand" href="#">Action</a>
																								<a class="navbar-brand" href="#">Romance</a>
																				</div>
																</div> --}}

            {{-- Additon by Amm --}}
            <div class="container-fluid row mt-1 py-1">

                <div class="col-md-7">

                    <div id="buttons" class="my-4">
                        <button class="button-value" onclick="filterProduct('all')">All</button>
                        <button class="button-value" onclick="filterProduct('Topwear')">
                            Science
                        </button>
                        <button class="button-value" onclick="filterProduct('Bottomwear')">
                            Romance
                        </button>
                        <button class="button-value" onclick="filterProduct('Jacket')">
                            Advanture
                        </button>
                        <button class="button-value" onclick="filterProduct('Watch')">
                            Horror
                        </button>
                    </div>

                </div>

                <div class="col-md-5">
                    <div id="search-container" class="">
                        <div class="row">

                            <div class="col-md-8 my-1">
                                <input type="search" id="search-input" placeholder="Search book name here.." />
                            </div>

                            <div class="col-md-4 col-ms-6">
                                <button id="search">Search</button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            {{-- Addition by AMM end --}}
        </div>
    </div>

    @yield('header_footer')

    {{-- <footer class="footer bg-info-subtle mt-auto"> --}}
    <footer class="bg-primary fixed-bottom text-center text-white">
        <div class="container text-center">
            <span class="text-muted">&copy; 2023 Bookshop.com. All Rights Reserved.</span>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

@yield('script')

</html>

<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->
</div>
