<?php 





// $conn = new mysqli('localhost','root','','registration');

// if($conn ->connect_error){
//     die('Connection failed : '. $conn ->connect_error);
// }else{
//     $use = $conn->prepare("insert into user(username, password, email)
//         values(?,?,?)");
//         $use ->bind_param(
//             "sis",
//             $username,
//             $password,
//             $email

//             //"sis" mostra a sequência de string, int, string
//         );
//         $use -> execute();

//         echo"Registration sucessfully...";
//         $use->close();
//         $conn->close();

// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form action="index.php" method="post" class = 'container d-flex flex-column w-25 text-center'>
    <label for="username">piaui</label>
    <input type="text" name="username" id="username">
    <label for="email">matogrosso</label>
    <input type="text" name="email">
    <label for="password">password</label>
    <input type="password" name="password">
    <button>submit</button>
    </form>
</body>
</html>