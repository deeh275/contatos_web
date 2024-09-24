<?php

require '../model/Contato.php';
require '../dao/ContatoDAO.php';

$contato = new Contato(null, "João", "1199887766", "joao@mail.com");
$contatoDAO = new ContatoDAO();

echo $contatoDAO->create($contato);

?>