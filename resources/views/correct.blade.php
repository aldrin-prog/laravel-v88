<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correct</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div style="width:400px; margin:auto;text-align:center">
        <p class='titleHead'>Correct!</p>
        <p>You got it right. Good job!<p>
        <a class='btn' href=<?=route('game')?>>Next Question</a>

    </div>
</body>
</html>