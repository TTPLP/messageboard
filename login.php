<!DOCTYPE html>
 <?php include 'init.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        
        $json = json_decode(file_get_contents("data.json"), true);

        foreach ($json as $key => $value) {

            if($json[$key]['email'] === $_POST['email'] && $json[$key]['password'] === $_POST['password']){//if email and password you input is in data.json

                $_SESSION['username'] = $key;
                $_SESSION['email'] = $json[$key]['email'];

                echo "Successful login";
                comfirmseeall();           
                break;
            }

        }
        if($_SESSION['username'] === null){
            echo "email or password error" ;
            backtoindex();

        }
    ?>
</body>
</html>