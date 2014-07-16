<!DOCTYPE html>
<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<style>
        * {
            font-family: 'Open Sans', sans-serif;
        }
		body {
			background-color: #ff8500;
            
		}
        #wrapper {
            margin: 0 auto;
        }
        .card {
            width: 450px;
            background-color: #fff;   
            padding: 10px;
            margin: 0 auto;
            border-style: solid;
            border-color: #e3e3e3;
            border-width: 2px;
        }
        .content_card{
           // min-height: 200px;
            text-align: justify
        }
        .first {
            margin-top: 50px;
            
        }
        h1 {
            margin-top: 0;
            width: 60%;
            height: 40px;
            float:left;
        }
        .time {
            float: right;
            width: 40%;
            text-align: right;
            position: absolute;
            bottom: 0;
            color: #f5f5f5;
            font-size: 11pt;
        }
        .card {
            display: block;
        }
        .card div {
            display: block;
        }
        div .card_header{
            height: 40px;
            position: relative;
        }
        hr {
            width: 100%;
        }
        .bigtitle {
            max-height:100px;
            background-color: #d6d6d6;
        }
        .peoplesay {
            font-weight: bold;
        }
        .said {
            color: #bfbfbf;
            width: 100%;
        }
        a:link {
            color: #FFF;
        }

        /* visited link */
        a:visited {
            color: #FFF;
        }

        /* mouse over link */
        a:hover {
            color: #FFF;
        }

        /* selected link */
        a:active {
            color: #FFF;
        }
	</style>
	<title>
		Public Board
	</title>
</head>
<body>
	<div id="wrapper">
		@yield('content')
	</div>
</body>
</html> 
<!--html>
	<body>
		<h1>Simple Board</h1>
		@yield('content')
	</body>
</html-->