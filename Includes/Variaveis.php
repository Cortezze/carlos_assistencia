<?php
if(isset($_POST['u_id'])){
    $u_id=filter_input(INPUT_POST,'u_id',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['u_nome'])){
    $u_id=filter_input(INPUT_POST,'u_id',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $u_id=0;
}

if(isset($_POST['u_nome'])){
    $u_nome=filter_input(INPUT_POST,'u_nome',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['u_nome'])){
    $u_nome=filter_input(INPUT_POST,'u_nome',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $u_nome="";
}

if(isset($_POST['u_telefone'])){
    $u_nome=filter_input(INPUT_POST,'u_telefone',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['u_telefone'])){
    $u_nome=filter_input(INPUT_POST,'u_telefone',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $u_nome="";
}

if(isset($_POST['u_endereco'])){
    $u_nome=filter_input(INPUT_POST,'u_endereco',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['u_endereco'])){
    $u_nome=filter_input(INPUT_POST,'u_endereco',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $u_nome="";
}

if(isset($_POST['u_numero_casa'])){
    $u_nome=filter_input(INPUT_POST,'u_numero_casa',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['u_numero_casa'])){
    $u_nome=filter_input(INPUT_POST,'u_numero_casa',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $u_nome="";
}

if(isset($_POST['u_email'])){
    $u_nome=filter_input(INPUT_POST,'u_email',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['u_email'])){
    $u_nome=filter_input(INPUT_POST,'u_email',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $u_nome="";
}

if(isset($_POST['u_senha'])){
    $u_nome=filter_input(INPUT_POST,'u_senha',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['u_senha'])){
    $u_nome=filter_input(INPUT_POST,'u_senha',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $u_nome="";
}

?>