<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div style="width:350px; margin:auto;text-align:center">
        <p class='titleHead'>Welcome to Fact or Bluff</p>
        <p>Test your knowledge with our trivia game. Can you seperate the facts from the bluffs?<p>
        <a class='btn' href=<?=route('game')?>>Start Game</a>
    </div>
</body>
</html>