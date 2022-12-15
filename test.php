<?php 
    // $hash = '$2y$10$.kF2X61vk0AQBFORXYK5XuXa1P8oL4Vohry1FYyzHiZ';

    // if (password_verify('kingpeace12345', $hash)) {
    //     echo 'Password is valid!';
    // } else {
    //     echo 'Invalid password.';
    // }


    $pass = "kingpeace12345";
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    echo '<br>';
    echo 'Word ..'.$pass;
    echo '<br>';
    echo 'Hashed ..'.$hash;
    echo '<br>';
    // if (password_verify($pass, $hash))
    if (password_verify('kingpeace12345', '$2y$10$p5rr6AHHeIYFBuWaBtWr2upgQJl4g9y5REIy9yfm0.8LlZvYGlzFK'))
    {
        echo "Ok, that worked";
    }
    else
    {
        echo "WTF?";
    }


?>