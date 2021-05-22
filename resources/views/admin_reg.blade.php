<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>
<center><h2>Admin Registration</h2></center>
    <form action="/admin_save" method="post">
    <table align="center" class="table table-borderless">
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" class="form-control" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" class="form-control" required></td>
        </tr>
        <tr>
            <td></td>
            <td><button class="btn btn-primary" type="submit">submit</button></td>
        </tr>
    </table>
    </form>
</body>
</html>