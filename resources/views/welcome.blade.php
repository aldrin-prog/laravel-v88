<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forums</title>
    <style>
        *{
            margin:0px;
            padding:0px;
        }
        main{
            margin:auto;
            width:1000px;
            margin-top:50px;
        }    
            .btn-primary{
                display:block;
                text-decoration:none;
                border:3px solid black;
                width:80px;
                padding:10px;
                text-align:center;
                color:white;
                background-color:blue;
                margin-left:auto;
            }
            .forum{
                display:block;
                text-decoration:none;
                color:black;
            }
                .forum *{
                    margin-bottom:5px;
                }
                
    </style>
</head>
<body>
    <main>
        <a href="#" class='btn-primary'>Add New</a>
        @for($i = 0; $i < 5; $i++)
            <a href='#' class='forum'>
                <h3>Title {{$i+1}}</h3>
                <p>Descriptions</p>
            </a>
        @endfor
    </main>
</body>
</html>