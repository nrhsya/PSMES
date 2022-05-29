<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UMP PSM Evaluation System </title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">

	 <!-- Favicons -->
	 <link href="{{URL::asset('/images/logoUMPWhite.png')}}" rel="icon">

	<!-- Styles -->
	<style>
	*{
		margin: 0;
	    padding: 0;
    }
    body {
		font-family: 'Poppins', sans-serif;
    }
    .wrapper {
		width: 1170px;
	    margin: auto;
    }
    header {
		background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(https://news.ump.edu.my/sites/default/files/articles/UMP%20suspends%20academic%20operations%20a%20week%20starting%2022%20December%202021.jpg);
	    height: 100vh;
	    -webkit-background-size: cover;
	    background-size: cover;
	    background-position: center center;
	    position: relative;
    }
    .nav-area {
		float: right;
		list-style: none;
		margin-top: 30px;
    }
    .nav-area li {
		display: inline-block;
    }
	.nav-area li a {
		color: #fff;
	    text-decoration: none;
	    padding: 5px 20px;
	    font-family: sans-serif;
	    font-size: 16px;
	    text-transform: uppercase;
    }
    .nav-area li a:hover {
	    background: #9999ff;
	    color: #333;
    }
    .logo {
		float: left;
		padding-top: 25px;
    }
    .logo h5 {
		font-family: sans-serif;
	    color: #fff;
	    text-transform: uppercase;
	    font-size: 20px;
    }
	.welcome {
		position: absolute;
	    width: 700px;
	    height: 300px;
	    margin: 20% 30%;
	    text-align: center;
    }
	.welcome h1 {
		text-align: center;
	    color: #fff;
	    text-transform: uppercase;
	    font-size: 27px;
	}
	.welcome h1 span {
		color: #15a195;
    }
	.welcome a {
		border: 2px solid #fff;
	    padding: 10px 25px;
	    text-decoration: none;
	    text-transform: uppercase;
	    font-size: 14px;
	    margin-top: 20px;
	    display: inline-block;
	    color: #fff;
    }
    .welcome a:hover {
	    background: #15a195;
	    color: #333;
    }
/*resposive*/

@media (max-width:600px) {
	.wrapper {
		width: 100%;
	}
	.logo {
		float: none;
		width: 50%;
		text-align: center;
		margin: auto;
	}
	img {
		width: ;
	}
	.nav-area {
		float: none;
		margin-top: 0;
	}
	.nav-area li a {
		padding: 5px;
		font-size: 11px;
	}
	.nav-area {
		text-align: center;
	}
	.welcome {
		width: 100%;
		height: auto;
		margin: 30% 0;
	}
	.welcome h1 {
		font-size: 27px;
	}
}
    </style>
</head>

<!-- Body -->
<body>
    <header>
    <div class="wrapper">
        <div class="logo">
		<h5>University Malaysia Pahang</h5>
        </div>
    </div>
	<div class="welcome">
		<h1> <img src="{{URL::asset('/images/logoUMP.png')}}" alt="UMP Logo" class="logo"> Welcome To <span>UMP PSM Evaluation System </span></h1>
		
            <a href="{{ route('login') }}"><b>PSM Coordinator</b></a>
			<a href="{{ route('login') }}"><b>Student</b></a>
           <a href="{{ route('evaluator.login') }}" ><b>Evaluator</b></a>

    </div>
</header>

</body>
</html>
