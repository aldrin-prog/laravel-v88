<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        *{
            font-family:arial;
        }
        .headerTitle{
            font-size:20px;
            font-weight:600;
            text-align:center;
            margin-top:60px;
        }
        form{
            border:4px solid black;
            width:35%;
            border-radius:15px;
            padding:20px;
            margin:auto;
        }
            form div{
                display:flex;
                justify-content: space-between;
                align-items:baseline;
                margin:10px 0px
            }
                form div label{
                    font-weight:600;
                }
                form div input{
                    display: block;
                    border:3px solid black;
                    height:30px;
                    width:50%
                }
                form div textarea{
                    display: block;
                    border:3px solid black;
                    min-width:50%;
                    max-width:50%;
                    min-height:100px;
                    max-height:100px;

                }
                form div select{
                    display: block;
                    border:3px solid black;
                    height:30px;
                    width:52%
                }
                form div input:focus{
                    outline:none;
                }
                form .alert-danger{
                    display:block;
                    color:red;
                   
                }
                    form .aler-danger p{
                        margin:0px;
                        padding:0px;
                    }
            input[type='submit']{
                display:block;
                margin-left:auto;
                padding:5px 10px;
                background-color:#2B78E4;
                color:white;
                border:3px solid black;
            }
    </style>
</head>
<body>

    <p class='headerTitle'>Job Application Form</p>
    <form action=<?=route('result')?> method="post">
        @if ($errors->any())
            <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
            </div>
        @endif
        @csrf
        <div class='container-field'>
            <label for="">Full Name</label>
            <input type="text" name="fullname" id="fullname">
        </div>
        <div class='container-field'>
            <label for="">Email</label>
            <input type="text" name="email" id="email">
        </div>
        <div class='container-field'>
            <label for="">Phone Number</label>
            <input type="text" name="phoneNumber" id="phoneNumber">
        </div>
        <div class='container-field'>
            <label for="">Resume Link</label>
            <input type="text" name="resumeLink" id="resumeLink">
        </div>
        <div class='container-field'>
            <label for="">Cover Letter</label>
            <textarea name="coverLetter" id="coverLetter" cols="30" rows="10"></textarea>
        </div>
        <div class='container-field'>
            <label for="">Position</label>
            <select name="position" id="position">
                <option value=''>Select position</option>
                <option value="Web Developer">Web Develop</option>
            </select>
        </div>
        <div class='container-field'>
            <label for="">Salary Expectation</label>
            <input type="text" name="expectedSalary" id="expectedSalary">
        </div>
        <input type="submit" value="Submit Application">
    </form>
</body>
</html>