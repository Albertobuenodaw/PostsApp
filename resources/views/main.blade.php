<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .blueButton{
            background-color: #34495E;
            color:white;
            border: 1px solid grey;
            border-radius: 5px;
            /*box-shadow: 2px 2px 10px #D0D0D0;*/
            margin-top: 14px;
        }

        .grayBtn{
            background-color: #85929E;
            color:white;
            border: 1px solid grey;
            border-radius: 5px;
           /* box-shadow: 2px 2px 10px #85929E;*/
        }

        .editBtn{
            background-color: #73C6B6;
            color:white;
            border:none;
            border-radius: 5px;
            margin-left:10px;
        }
        .deleteBtn{
            background-color: #F1948A ;
            color:white;
            border:none;
            border-radius: 5px;
          
            margin-left:10px;
       
        }
        p{
            margin-bottom: 0px;
        }

        .postContent{
            background-color: white;
            padding-left:5px;
            padding-top:5px ;
            padding-bottom:20px;
            border-radius: 5px;
        }

        .post{
            margin-top: 10px;
        }

        .darkBlueBtn{
            background-color: #2471A3  ;
            color:white;
            border:none;
            border-radius: 5px;
        }
        .postfield{
            margin-top: 20px;
            border-radius: 5px;
            background-color: #7F8C8D;
            padding: 15px;
        }
        textarea{
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
        }
        .grayBtn:hover{
            border: 2px solid white;   
        }
        .darkBlueBtn:hover{
            border: 2px solid white;
        }
        .deleteBtn:hover{
            border: 2px solid white;
        }
        .editBtn:hover{
            border: 2px solid white;
        }
        .blueButton:hover{
            border: 2px solid white;
        }
        body {
            background-color: #3D3D3D
        }
        h1,h2,h3,h4,label,th,td{
            color: white;
        }
       
    </style>
</head>
<body>
    <ul>
        <li>
            <a href="/usuarios">Añadir Usuario</a>
        </li>
        <li>
            <a href="/direccion">Añadir Dirección</a>
        </li>
        <li>
            <a href="/asignar">Asignar Dirección a Usuario</a>
        </li>
        <li>
            <a href="{{route('posts-index')}}">Escribir Posts</a>
        </li>
    </ul>
    <hr>
    @yield('content')
</body>
</html>