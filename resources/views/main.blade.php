<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
           
            border-radius: 5px;
            margin-top: 14px;
        }
        .greyBlueBtn{
            background-color: #5a6262  ;
            color:white;
           
            border-radius: 5px;
            margin-top: 14px;
        }
        .greyBlueBtn:hover{
            background-color: #404646;
        }
        .crudBtn{
            margin: 0px 5px 0px 5px;
            border-radius: 5px;
            color:white;
            border:none;
            background-color: #5a6262;
        
        }
        label{
            margin-top: 5px;
        }
        .crudBtn:hover{
            margin: 0px 5px 0px 5px;
            color : #383c44;
            font-weight: bold ;
            border:none;
            
        }
        .postfield{
            margin-top: 20px;
            border-radius: 20px;
            /*background-color: #7F8C8D;*/
            background-color: #444c54;
            padding: 15px;
            padding-top: 30px;
            padding-left: 50px;
            padding-right: 50px;
        }
        textarea{
            resize:none; 
            margin-top: 10px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            /*background-color: #F2F3F4;*/
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
        h1,h3,h4,label,th,td,p{
            color: white;
        }
        h2{
            color: whitesmoke;
        }
        hr{
            margin-left:0px;
            border-color: #2471A3;
        }
     
        .postContent{
            background-color: #F2F3F4;
            color:#797D7F;
            margin-top:10px;
            padding-left: 20px;
            padding-top:10px;
            border-radius: 10px;
        }

        select{
            border-radius: 10px;
            background-color: #F2F3F4;
            color:#2E4053;
        }
        .date{
            color : #566666;
        }
        .titulo{
            color : #566666;
            font-style: italic;
        }
        .tema{
            color : #566666;
         
        }
        .bubblePost{
            padding-left: 20px;
        }
        .bubbleLabel{
            color: #AEB6BF;
        }
        html, body {
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        footer{
            padding: 10px 10px 0px 10px;
            margin-top: auto;
            width: 100%;
            height: 40px;
            text-align: center;
            color: silver;
            padding: 50px;
        }

        .copyright{
            font-size: 18px ;
            font-family: sans-serif;
            font-weight: 300;
        }
        h1{
            margin-bottom: 20px;
        }
        .lightRounded{
            width:200px;
            border-radius: 5px;
        }
        .textEdited{
           color: #797D7F;
        }
        .postsVacios{
            color:#2471A3;
        }
        .author{
            color: whiteSmoke;
        }
        .titulo{
            margin-top: 5px;
        }
        .checkLabel{
            color: whitesmoke;
            margin-left: 5px;   
        }
        .whiteSmoke{

            color: whiteSmoke;
        }
        .labelCheckBox{
            margin-top: 20px;
        }
        .alert{
            width:200px;
            padding-top: 2px;
            padding-bottom:2px;
            margin-top:10px;
            text-align: center;
        }
        
        /******************************* */

    </style>
</head>
<body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="/">Users-Posts PROJECT</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                    <a class="nav-item nav-link" href="/usuarios">Añadir Usuario</a>
                    <a class="nav-item nav-link" href="/direccion">Añadir Dirección </a>
                    <a class="nav-item nav-link" href="/asignar">Asignar Dirección a Usuario</a>
                    <a class="nav-item nav-link" href="{{route('posts-index')}}">Escribir Posts</a>
                    <a class="nav-item nav-link" href="{{route('temas-index')}}">Crear Tema</a>
                    </div>
                </div>
            </nav>
            <hr>
        
            <div class= 'p-5 '>
            @yield('content')
             </div>
        
             <!---->
             <footer id="footer" >
              <span class='copyright'> © Alberto Bueno - Server Side Development 2022-2023</span>
            </footer>
</body>
</html>