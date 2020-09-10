<?php
session_start();
session_destroy(); //essa funcao destroi todas as funcoes existentes
header ('Location: index.html');
exit();
