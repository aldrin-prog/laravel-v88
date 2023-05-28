<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Employee #{{$employee->id}}</h1>
        <p>Name: {{$employee->name}}</p>
        <p>Age: {{$employee->age}}</p>
        <p>Job Title: {{$employee->job_title}}</p>
        <p>Department: {{$employee->department}}</p>
        <a href=<?=route('employee')?>>Go back</a>
        <a href=<?=route('edit',['id'=>$employee->id])?>>Edit</a>
    </main>
</body>
</html>