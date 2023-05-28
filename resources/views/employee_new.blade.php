<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Employee</title>
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
        <h1>Add new Employee</h1>
        <form action=<?=route('add')?> method="post">
            @csrf
            <div>
                <label>Name</label>
                <input type="text" name="name" >
            </div>
            <div>
                <label>Age</label>
                <input type="text" name="age" >
            </div>
            <div>
                <label>Job Title</label>
                <input type="text" name="job_title" >
            </div>
            <div>
                <label>Department</label>
                <input type="text" name="department" >
            </div>
            <input type="submit" value="Add">
        </form>
    </main>
</body>
</html>