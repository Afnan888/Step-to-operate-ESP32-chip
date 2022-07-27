<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <style>
        div{
            width: 50%;
            margin: auto;
        }
        form{

            margin-top: 100px;
        }
        label{
            margin: 10px;
            font-size: 32px;
        }
        #mark{
            font-size: 32px;
        }
        #submit{
            font-size: 22px;
            background-color: blue;
            color: wheat;
            padding: 10px;
            display: block;
            margin: 20px auto;
            cursor: pointer;

        }

    </style>
</head>
<body>
        <form action="process.php" method="GET">
            <div>
                <label for="mark">Enter Mark</label>
                <input type="number" id="mark" name="mark">
            </div>
            <input id="submit" type="submit">
        </form>
</body>
</html>