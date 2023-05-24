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
        .container-result{
            border:4px solid black;
            width:35%;
            border-radius:15px;
            padding:20px;
            margin:auto;
        }
            .container-result div{
                display:flex;
                justify-content: space-between;
                align-items:baseline;
                margin:10px 0px;
            }
                .container-result div label{
                    font-weight:600;
                }
                .container-result div p{
                    width:50%;
                    text-align:left;
                }
                
           .btn-primary{
                width:max-content;
                display:block;
                margin-left:auto;
                padding:5px 10px;
                background-color:#2B78E4;
                color:white;
                border:3px solid black;
                text-decoration:none;
                padding:5px 20px;
            }
    </style>
</head>
<body>
    <p class='headerTitle'>Job Application Form</p>
    <div class="container-result">
        <div class='container-field'>
            <label for="">Full Name</label>
            <p class='value'><?=$fullname?></p>
        </div>
        <div class='container-field'>
            <label for="">Email</label>
            <p class='value'><?=$email?></p>
        </div>
        <div class='container-field'>
            <label for="">Phone Number</label>
            <p class='value'><?=$phoneNumber?></p>
        </div>
        <div class='container-field'>
            <label for="">Resume Link</label>
            <p class='value'><?=$resumeLink?></p>
        </div>
        <div class='container-field'>
            <label for="">Cover Letter</label>
            <p class='value'><?=$coverLetter?></p>
        </div>
        <div class='container-field'>
            <label for="">Position</label>
            <p class='value'><?=$position?></p>
        </div>
        <div class='container-field'>
            <label for="">Salary Expectation</label>
            <p class='value'><?=$expectedSalary?></p>
        </div>
        <a href="/" class='btn-primary'>Return</a>
    </div>
</body>
</html>