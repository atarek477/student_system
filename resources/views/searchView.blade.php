<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search Results</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="/assets/dcode.css">
    <meta name="viewport" content="width=device-widthy, initial-scale=1.0">

    <style>
        body {

            background-image: url("/images/adminBackground.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size : 100% 100%;
            font-family: sans-serif;
            color: white;
        }

        .center h1 {
            margin: 0px 50px;
            text-align: center;
            font-size: 50.5px;
            padding: 0 0 20px 0;
        }


        nav {
            height: 80px;
            width: 100%;
        }

        label.logo {
            font-family: sans-serif;
            color: white;
            font-size: 30px;
            line-height: 50px;
            font-weight: bold;
        }

        nav ul {
            float: right;
            margin-right: 30px;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline-block;
            position: relative;
            list-style: none;
        }

        nav ul li a {
            color: rgb(255, 255, 255);
            font-size: 17px;
            text-transform: uppercase;
            display: block;
            padding: 0 15px;
            text-decoration: none;
            line-height: 60px;
        }

        a:hover {
            background: #2980b9;
            transition: .5s;
        }

        .content-table {
            border-collapse: collapse;
            font-size: 1em;
            min-width: 400px;
            width: 75%;    
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            margin: 0px 200px;
        }

        .content-table thead tr {
            background-color: white;
            color: #2980b9;
            text-align: left;
            font-weight: bold;
        }

        .content-table th,
        .content-table td {
            padding: 12px 15px;
        }

        .content-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .content-table tbody tr:nth-of-type(even) {
            background-color: #0e1651;

        }

        .content-table tbody tr:last-of-type {
            border-bottom: 4px solid #dddddd;
        }

        .w-5 {
            display: none;
        }

        button[type="submit"] {
            width: 100%;
            height: 30px;
            border: 1px solid;
            background: white;
            border-radius: 25px;
            font-size: 18px;
            color: #e9f4fb;
            font-weight: 700;
            cursor: pointer;
            outline: none;
            color: purple;
        }

        button[type="submit"]:hover {
            border-color: #2691d9;
            transition: -5s;
        }

        .card {
            width: 15%;
            background-color: white;
            color: black;
            border-radius: 10px;
            border: solid black 1px;
            margin-bottom: 15px;
            text-align: center;
        }
    </style>

</head>

<body>
    <div class="center">
    <h1>Search Results</h1>
    </div>
    <table class="content-table">
        <thead>
            <tr>
                <td>Student ID</td>
                <td>Student Username</td>
                <td>E-mail</td>
                <td>GPA</td>
                <td>Teacher ID</td>
                <td>Course ID</td>
                <td>Course Name</td>
                <td>Credit Hours</td>
            </tr>

        </thead>

        <tbody>

            @foreach($search as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->username}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->gpa}}</td>
                <td>{{$item->tid}}</td>
                <td>{{$item->cid}}</td>
                <td>{{$item->coursename}}</td>
                <td>{{$item->hrs}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <br>
</body>

</html>
