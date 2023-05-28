<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>
    <style>
        main{
            width:max-content;
        }
        table{
            border:2px solid black;
            border-collapse:collapse;
            margin-bottom:10px;
        }
            table th{
                padding:10px
            }
            td{
                padding:10px;
            }
    </style>
</head>
<body>
    <main>
        <h1>Employee List</h1>
        <table border>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Job Title</th>
                    <th>Department</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
@foreach($employees as $employee)
                <tr>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->age}}</td>
                    <td>{{$employee->job_title}}</td>
                    <td>{{$employee->department}}</td>
                    <td>
                        <a href=<?=route('show',['id'=>$employee->id])?>>Show</a><span>|</span>
                        <a href=<?=route('edit',['id'=>$employee->id])?>>Edit</a><span>|</span>
                        <a href=<?=route('delete',['id'=>$employee->id])?>>Delete</a><span>|</span>
                    </td>
                </tr>
@endforeach
            </tbody>
        </table>
        <a href=<?=route('new')?>>Add new Employee</a>
    </main>
</body>
</html>