<?php
#Arquivos diretórios raizes

$PastaInterna="mvc";

define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}/");

(substr($_SERVER['DOCUMENT_ROOT'], -1) =='/') ? 
define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}/") : 
define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}/");

#Diretórios especificos

define('DIRIMG', DIRPAGE."public/img/");

define('DIRCSS', DIRPAGE."public/css/");

define('DIRJS', DIRPAGE."/public/js/");

#Acesso ao banco de dados
define('HOST',"localhost");
define('DB',"sistema");
define('USER',"root");
define('PASS',"");