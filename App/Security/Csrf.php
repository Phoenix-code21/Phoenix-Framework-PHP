<?php 

function checkCsrfToken($formToken,$sessionToken)
{
    if($formToken != $sessionToken):
        die('CSRF Token inválido');
    endif;       
}

function csrfToken()
{
    $token = bin2hex(random_bytes(16));

    if(isset($_SESSION['csrf'])):
        array_push($_SESSION['csrf'],$token);
    else:
        $_SESSION['csrf'][0] = $token; 
    endif;    

    return $token;
}

if(CSRF_TOKEN)
{
    if($_SERVER['REQUEST_METHOD'] === 'POST'):
        if(isset($_POST['_csrf']) && isset($_SESSION['csrf'])):
            $index = count($_SESSION['csrf']);
            checkCsrfToken($_POST['_csrf'],$_SESSION['csrf'][$index - 1]);
        else:
            die('CSRF Token inválido');
        endif;    
    endif;
}