<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">

        
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <!-- Styles -->
        <style>
            @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";

            body {
                font-family: 'Poppins', sans-serif;
                background: #fafafa;
                margin: 0;
            }

            p {
                font-family: 'Poppins', sans-serif;
                font-size: 1.1em;
                font-weight: 300;
                line-height: 1.7em;
                color: #999;
            }

            h1 {
                font-family: 'Poppins', sans-serif;
                font-size: 1.1em;
                font-weight: 300;
                line-height: 1.7em;
            }

            a,
            a:hover,
            a:focus {
                color: inherit;
                text-decoration: none;
                transition: all 0.3s;
            }

            /* ---------------------------------------------------
                NAVBAR STYLE
            ----------------------------------------------------- */

            .navbar {
                margin-bottom: 0;
                background-color: #11ADA4;
                z-index: 9999;
                border: 0;
                font-size: 15px !important;
                line-height: 2 !important;
                letter-spacing: 3px;
                border-radius: 0;
                font-family: Montserrat, sans-serif;
                height: 70px;
            }

            .navbar-btn {
                box-shadow: none;
                outline: none !important;
                border: none;
            }

            .navbar li a, .navbar .navbar-brand {
                color: white !important;
                background-color: #11ADA4;
            }

            .navbar .dropdown-menu {
                background-color: #11ADA4;
            }

            .toggle {
                background-color: #0958A3;
            }

            .navbar-nav li a:hover, .navbar-nav li.active a {
                color: #11ADA4 !important;
                background-color: #FCDA37 !important;
                font-weight: bold;
            }

            .navbar-default .navbar-toggle {
                border-color: transparent;
                color: #0958A3 !important;
            }

            .line {
                width: 100%;
                height: 1px;
                border-bottom: 1px dashed #ddd;
                margin: 40px 0;
            }

            /* ---------------------------------------------------
                SCROLL BAR
            ----------------------------------------------------- */
            .my-custom-scrollbar
            {
                position: left;
                height: 600px;
                overflow: auto;
            }
            
            .table-wrapper-scroll-y
            {
                display: block;
            }

            /* ---------------------------------------------------
                SIDEBAR STYLE
            ----------------------------------------------------- */

            .wrapper {
                display: flex;
                width: 100%;
                align-items: stretch;
            }

            #sidebar {
                min-width: 250px;
                max-width: 250px;
                background: #11ADA4;
                color: #fff;
                transition: all 0.3s;
            }

            #sidebar.active {
                margin-left: -250px;
            }

            #sidebar .sidebar-header {
                padding: 20px;
                background: #304f50;
            }

            #sidebar .sidebar-mini-header {
                padding: 10px;
                background: #304f50;
            }

            #sidebar ul.components {
                padding: 20px 0;
                border-bottom: 1px solid #47748b;
            }

            #sidebar ul p {
                color: #fff;
                padding: 10px;
            }

            #sidebar ul li {
                background-color: white;
                border-radius: 15px;
                width: 70%;
            }

            #sidebar ul li a {
                padding: 10px;
                font-size: 1.1em;
                display: block;
                border-radius: 15px;
                color: #0958A3;
                font-weight: bold;
            }

            #sidebar ul li a:hover {
                color: #0958A3;
                background: #FCDA37;
            }

            #sidebar ul li.active>a,
            a[aria-expanded="true"] {
                color: #fff;
                background: #6d7fcc;
            }

            a[data-toggle="collapse"] {
                position: relative;
            }

            .dropdown-toggle::after {
                display: block;
                position: absolute;
                top: 50%;
                right: 20px;
                transform: translateY(-50%);
            }

            ul ul a {
                font-size: 0.9em !important;
                padding-left: 30px !important;
                background: #6d7fcc;
            }

            ul.CTAs {
                padding: 20px;
            }

            ul.CTAs a {
                text-align: center;
                font-size: 0.9em !important;
                display: block;
                border-radius: 5px;
                margin-bottom: 5px;
            }

            /* ---------------------------------------------------
                CONTENT STYLE
            ----------------------------------------------------- */

            #content {
                width: 100%;
                padding: 20px;
                min-height: 100vh;
                transition: all 0.3s;
            }

            /* ---------------------------------------------------
                MEDIAQUERIES
            ----------------------------------------------------- */

            @media (max-width: 768px) {
                #sidebar {
                    margin-left: -250px;
                }
                #sidebar.active {
                    margin-left: 0;
                }
                #sidebarCollapse span {
                    display: none;
                }
            }

            .customFont {
                color: white;
            }

            #customButton {
                background-color: #11ADA4;
                border: none;
                color: white;
                padding: 50px 50px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                border-radius: 20px;
            }

            #customButton:hover {
                background-color: #FCDA37;
                color: #0958A3;
            }

            #customAlert {
                background-color: #436e70;
                border: none;
                color: white;
            }

            /* ---------------------------------------------------
                FOOTER
            ----------------------------------------------------- */

            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: #FCDA37;
                color: #11ADA4;
                text-align: center;
            }
        </style>
        
        <!-- put logo on browser tab -->
        <link rel="icon" href="images/logoUMPwhite.png">
    </head>

    <body>

    <nav class="navbar navbar-expand-lg navbar-fixed-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Right Side of navbar -->
                <ul class="nav navbar-nav ms-auto">
                    <!-- Notification Icon (Modal)-->
                    <!-- Button trigger modal -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-bell" style="color:white;"></i>
                        </a>
                    </li>
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle customFont" style="color:white;" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                            <!-- Profile Icon -->
                            <i class="bi bi-person" style="color:white;"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                </ul>
            </div>
        </div>
        <!-- RIGHT SIDE OF NAVBAR -->
        <!-- <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Course</a>
                </li>			
            </ul>		  
        </div> -->
    </nav>

        <div class="wrapper">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div style="background-color:#11ADA4">
                    <!-- UMP Logo -->
                    <div class="sidebar-header text-center" style="background-color: white;">
                        <img class="text-center" src="{{URL::asset('/images/logoUMP.png')}}" alt="UMP Logo" width="200" height="100">
                        
                    </div>

                    <!-- PSMES -->
                    <a href="/studentHomepage">
                        <div class="sidebar-header text-center" style="background-color:white; color:#0958A3;">
                            <h3 style="font-size:48px;">P S M E S</h3>
                            <h1 style="font-size:15px;">- PSM Evaluation System -</h1>
                        </div>
                    </a>
                </div>

                <!-- Current Page Name -->
                <div class="sidebar-mini-header text-center" style="background-color:#FCDA37; color:#11ADA4;">
                    <h3>Student Page</h3>
                </div>

                <ul class="list-inline components">
                    <center>
                        <li>
                            <a class="customFont" href="/studentHomepage">Home</a>
                        </li><br>
                        <li>
                            <a class="customFont" href="#">Student FYP Details</a>
                        </li><br>
                        <li>
                            <a class="customFont" href="/StsvView">Rubric</a>
                        </li><br>
                        <li>
                            <a class="customFont" href="#">Evaluation Details and Mark</a>
                        </li><br>
                        <li>
                            <a class="customFont" href="/studentEvaluationSchedule">Industry Evaluation</a>
                        </li><br>
                    </center>
                </ul>
            </nav>

            <!-- Page Content  -->
            <div id="content">
                <div>
                    <div class="container-fluid rounded bg-white p-4">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

        <!-- Notification (Modal Button) -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">NOTIFICATIONS</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                <div class="modal-body">
                    <!-- notifications -->
                    <form action="/studentList/create" method="POST">
                    {{csrf_field()}}
                        
                        <!-- Notifications -->
                        <div class="mb-3">
                            <div class="p-3" style="background-color:#e2e9e9;">
                                <b>CB19000</b> has requested for industry evaluation slot change
                                <button type="submit" class="btn btn-primary">Approve</button>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="p-3" style="background-color:#e2e9e9;">
                                <b>CA20000</b> has requested for industry evaluation slot change
                                <button type="submit" class="btn btn-primary">Approve</button>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <div class="p-3" style="background-color:#e2e9e9;">
                                <b>CD18000</b> has requested for industry evaluation slot change
                                <button type="submit" class="btn btn-primary">Approve</button>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Approve All Requests</button>
                    </form>
                </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Ends -->

        <!-- Footer -->
        <footer class="container-fluid text-center" style="background-color:#FCDA37;">
            <a href="#myPage" title="To Top">
                <p style="color:black;font-weight:bold;">Copyright &copy; 2022</p>
            </a>
        </footer>

        <!-- JS Codes -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script>
            //function to toggle sidebar
            $(document).ready(function () {
                    $('#sidebarCollapse').on('click', function () {
                        $('#sidebar').toggleClass('active');
                    });
                });

            //when the Confirm Attendance button is clicked
            function ConfirmAttendanceBtn() {
                alert("Your attendance status has been saved !");
            }

            //when the Confirm Change button is clicked
            function ConfirmChangeBtn() {
                alert("The PSM Coordinator has been notified of your slot change request !");
            }
        </script>
    </body>
</html>
