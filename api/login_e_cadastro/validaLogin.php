<?php
    
    session_start();

    $login = array("user01@gmail.com","user02@gmail.com","user03@gmail.com");
    $senha = array("senha01","senha02","senha03");

    $msg = FALSE;
    $adm = FALSE;

    if ( ( ($_POST["email"]) == ("admin@gmail.com") ) && ( ($_POST["senha"]) == ("admin") ) ){
        $adm = TRUE;
    }

    $tamArray = count($login);
    
    for($i = 0; $i < $tamArray; $i++){
        if( ( ($_POST["email"]) == ($login[$i]) ) && ( ($_POST["senha"]) == ($senha[$i]) ))
        {
            $msg = TRUE;
            break;
        }
    }

    if($msg)
    {
        $_SESSION["logado"] = TRUE;
        $_SESSION["user"] = $_POST["email"];

        header("Location: /index.php");
    } else if($adm){
        $_SESSION["adm_logado"] = TRUE;

        header("Location: /console-adm.php");
    } else{
        header("Location: /api/login_e_cadastro/login.php?erro=1");
    }
?>