<?php

/* 
 * Archive of configuration of the system custom
 */

//Array of configuration 
$config = array();

//Directory root
define('RAIZ', '/mco');
define('BASE', 'https://localhost/mco/');



//Configuring the timezone of the Brazil
date_default_timezone_set('America/Sao_Paulo');


//Data of connection in database
$config['db'] = array(
    'type' => 'mysql',
    'host' => '54.232.250.55',
    'dbname' => 'mco_bd',
    'user' => 'acessoremoto',
    'pass' => 'Vy9wRVZX%+kAyS$eUQpSCa3r5w@#uSaceL_+n7VV9B7YEm@D-thpSL*$S-X+DmLrR=Wp6M$EbWgjzzu7AgGjqT6h?bmUsyrLeCcc'
);

//local
//$config['db'] = array(
//    'type' => 'mysql',
//    'host' => 'localhost',
//    'dbname' => 'mco_bd',
//    'user' => 'root',
//    'pass' => ''
//);


//código para BKP do banco, rodar em um eval
define('COD_BKP_MYSQLDUMP', 'mysqldump  -h localhost -u '.$config['db']['user'].' -p'.$config['db']['pass'].' mco_bd > assets\uploads\bkp\backup.sql ,$results, $result_value');



///////////////////////////////////////////////////////////////////////////
//////////////////////////   Dados das APIs   /////////////////////////////
///////////////////////////////////////////////////////////////////////////

// Chave Facebook
define('APP_KEY_FACEBOOK','1873236899415783');


// Chave Google
define('APP_KEY_GOOGLE','337008384030-gj0grfhl350g3keiu9gmsptddhu3ce9e.apps.googleusercontent.com');


// API Key IUGU
define('API_KEY_IUGU', 'e13a52d09b9130be7f47819b2df54b8d');






///////////////////////////////////////////////////////////////////////////
//////////////////////   Dados para Pagamento   ///////////////////////////
///////////////////////////////////////////////////////////////////////////

//Valor da parcela mínima
define('PG_MIN', 20.00);

//Quantidade máxima de parcelas 
define('PARCELAS', 6);







///////////////////////////////////////////////////////////////////////////
//////////////////////////   Dados do MCO   ///////////////////////////////
///////////////////////////////////////////////////////////////////////////

//Email que recebe novos serviços
define('EMAIL_PRODUCAO', 'meucartorioonline@gmail.com');

//Email destinado a assuntos financeiros
define('EMAIL_FINANCEIRO', 'meucartorioonline@gmail.com');

//Email destinado a assuntos administrativos
define('EMAIL_ADMIN', 'meucartorioonline@gmail.com');

//Email para disparo
define('EMAIL_SENDER', 'meucartorioonline@gmail.com');
define('PASS_SENDER', 'rwvladmin');


//Dados padrão do site - e-mail de contato
define('EMAIL_CONTATO','contato@meucartorionline.com.br');

//Dados padrão do site - telefone principal
define('TELEFONE_PRICINPAL','(31) 4041-1816');

//Dados padrão do site - celular principal
define('CELULAR_PRINCIPAL','(32) 99965-1000');

//Dados padrão do site - facebook
define('FACEBOOK','https://www.facebook.com/meucartorioonline');







///////////////////////////////////////////////////////////////////////////
//////////////////////////   Coisas do Pedrazzi  /////////////////////////////
///////////////////////////////////////////////////////////////////////////

/* Google App Client Id */
define('CLIENT_ID_GOOGLE', '337008384030-glscp8dphgigf8dsabp2of3qv5f3lsud.apps.googleusercontent.com');

/* Google App Client Secret */
define('CLIENT_SECRET_GOOGLE', 'YpyEqgIMF_MIZ8huZCKc6EHW');

/* Google App Redirect Url */
define('CLIENT_REDIRECT_URL_GOOGLE', BASE.'redirect_google');

// App ID Facebook
define('APP_ID_FACEBOOK', '536424660050142');

// App Secret Key Facebook
define('APP_SECRET_FACEBOOK','7419170865de9ef4f97e69a3eacbb0d9');
