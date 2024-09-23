<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css”rel=”nofollow” integrity=”sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm” crossorigin=”anonymous”>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel='stylesheet'>
    <style>

        body, html{
            margin: 0;
            padding: 0;
            height: 100%;
        }
        .container1{
            display: flex;
            height: 100%;
        }
        .sidebar{
            flex: 0 0 250px;
            background-color: #333;
            color: #fff;
        }
        .sidebar ul{
            list-style: none;
            padding: 0;
        }
        .sidebar ul li{
            padding: 10px;
        }
        .sidebar ul li a{
            color: #fff;
            text-decoration: none;
        }
        .sidebar ul li a:hover{
            color: #000;
            background-color: #fff;
            padding: 5px;
            
        }
        .content{
            flex: 1;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container1">
        <nav class="sidebar">
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Categorey</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </nav>
        <main class="content">
                 @yield('content')
        </main>
    </div>
</body>
</html>