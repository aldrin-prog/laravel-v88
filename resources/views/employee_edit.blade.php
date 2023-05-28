<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <style>
        form{
            border:2px solid black;
            width:300px;
            padding: 10px;
        }
            form div{
                display:flex;
                justify-content:space-between;
                margin-bottom:10px
            }
                form input[type='submit']{
                    display:block;
                    margin-left:auto;
                }

    </style>
</head>
<body>
    <main>
        <a href=<?=route('employee')?>>Go back</a>
        <h1>Edit Employee #{{$employee->id}}</h1>
        <form action=<?=route('patch',['id'=>$employee->id])?> method="post">
            @method('PATCH')
            @csrf
            <div>
                <label>Name</label>
                <input type="text" name="name" value="{{$employee->name}}">
            </div>
            <div>
                <label>Age</label>
                <input type="text" name="age" value="{{$employee->age}}" >
            </div>
            <div>
                <label>Job Title</label>
                <input type="text" name="job_title" value="{{$employee->job_title}}" >
            </div>
            <div>
                <label>Department</label>
                <input type="text" name="department" value="{{$employee->department}}" >
            </div>
            <input type="submit" value="Save">
        </form>
    </main>
</body>
</html>