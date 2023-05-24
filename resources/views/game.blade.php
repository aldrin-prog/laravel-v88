<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div style="width:400px; margin:auto;text-align:center">
        <p class='titleHead'>Fact or Bluff</p>
        <p><?=$question?><p>
        <form action=<?=route('check')?> method='post'>
            @csrf
            <input type="radio" id="fact" name="ans" value="fact">
            <input type="hidden" name="correctAnswer" value=<?=$answer?>>
            <label for="fact">Fact</label>
            <input type="radio" id="css" name="ans" value="bluff">
            <label for="css">Bluff</label>
            <input class='btn' type="submit" value="Check Answer">
        </form>

    </div>
</body>
</html>