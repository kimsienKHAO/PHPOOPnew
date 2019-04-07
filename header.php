<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert into Database</title>
    <link rel="stylesheet" type="text/css" href="public/vendor/twitter/bootstrap/dist/css/bootstrap.min.css" >
</head>
<body>
 <div class="container">
    <div class="col-2"></div>
    <div class="col-8">
    <div class="card mt-4">
        <div class="card-header"><h1 class="text-center">This is register from:</h1></div>
        <div class="card-body">
            <form action="getData.php" class="form" method="post">
            <div class="form-group">
            <label for="name">Student Name:</label>
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                            <label>Gender:</label>
                            <input type="radio" name="gender" value="Male" id="male"> <label for="male">Male</label>
                            <input type="radio" name="gender" value="Female" id="female"> <label for="female">Female</label>
                        </div>
                <div class="form-group">
                <label for="email">Student Email:</label>
                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                </div>
                <div class="card-footer">
                <button name="btn-submit" class="btn btn-info float-right">Insert Student</button>
                </div>
            </form>
            </div>
    </div>
    <div class="col-2"></div>
    </div>
