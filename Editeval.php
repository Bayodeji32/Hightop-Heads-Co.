<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Editeval</title>
    <style type="text/css">
        body {
            padding: 0;
            margin: 0;
            background: #0c47c8;
        }

        h1 {
            font-size: 5em;
            margin: 0;
            padding: 0;
            text-align: center;
            font-family: 'arial';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
        }
        h2{
            padding: 0;
            text-align: center;
            font-family: 'arial';
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
        }

        .btn {
            padding: 3;
            background-color: #0cc725;
            color: white;
            width: 20%;
            padding: 0;
            text-align: center;
            font-family: 'arial';
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
        }
    </style>
</head>

<body>
    <h1>Order confirmed!</h1>
    <br></br>
    <h2>If you would still want to update your checkout details , please click the button below</h2>
    <br></br>
    <form action="Edit.php" method='POST'>
        <input type="submit" name='editnow' value="Update Info" class="btn"> </input>
    </form> 

</body>

</html>