<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Roboto', sans-serif;
        }

        nav {
            background: linear-gradient(90deg, #2980b9, #3498db);
            color: white;
            padding: 15px;
            text-align: right;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #2c3e50;
        }

        nav p {
            display: inline-block;
            margin-right: 20px;
        }

        .dashboard-buttons {
            text-align: center;
            margin-top: 20px;
        }

        .dashboard-buttons a {
            display: inline-block;
            margin: 0 10px;
            padding: 15px 30px;
            text-decoration: none;
            color: #fff;
            background-color: #27ae60;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .dashboard-buttons a:hover {
            background-color: #219d53;
        }

        .dashboard-description {
            text-align: center;
            margin: 50px 0 30px 0;
            color: #333;
        }
    </style>
</head>
<body>
    <nav>
        @if(Auth::guard('admin2')->check())
            <p>Welcome, {{ Auth::guard('admin2')->user()->name }}</p>
        @endif
        <a href="{{route('logout-user')}}">Logout</a>
    </nav>




</body>
</html>
