<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destroy</title>
    <style>
        p{
            text-align:center;
            margin-top:100px;
        }
        h3{
            text-align:center;
            font-weight:normal
        }
            h3 span{
                color:blue;
            }
        div.action{
            display:flex;
            align-items:center;
            margin:auto;
            width:max-content;
        }
            div.action a{
                display:block;
                padding:10px 20px;
                margin:0px 20px;
                outline:3px solid black;
                text-decoration:none;
                color:black;

            }
                div.action form button {
                background-color: #CF2A27;
                color:white;
                padding:10px 20px;
                border:none;
                outline:3px solid black;
                }
        
    </style>
</head>
<body>
    <p>Are you sure you want to delete?</p>
    <h3>{{$bookmark->folder}}/{{$bookmark->name}}(<span>{{$bookmark->url}}</span>)</h3>
    <div class='action'>
        <a href="/">No</a>
        <form action="{{ route('bookmark.delete', ['id' => $bookmark->id]) }}" method='post'>
            @method('DELETE')
            @csrf
            <button type="submit">Delete</button>
        </form>
    </div>
</body>
</html>