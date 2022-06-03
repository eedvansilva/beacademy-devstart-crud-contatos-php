<?php

$url = explode ('?' ,$_SERVER['REQUEST_URI']);

include 'telas/head.php';
include 'telas/menu.php';
include  'acoes.php';


match ($url[0]){
     '/' => home(),
     '/login' => login(),
     '/listar' => listar(),
     '/cadastro' => cadastro(),
     '/relatorio' =>relatorio(),
     '/excluir' => excluir(),
     '/editar'=>editar(),
     default => erro404(),
};


/* Codigo anterior:

if($url==='/'){
  home();
}
elseif($url ==='/login'){
   login();
}
elseif($url==='/listar'){
    listar();
}
elseif($url==='/cadastro'){
    cadastro();
}
else{
   erro404();
}
*/
include 'telas/footer.php';

