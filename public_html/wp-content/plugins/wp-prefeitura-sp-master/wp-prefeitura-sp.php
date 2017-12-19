<?php
/*
Plugin Name: Barra da Prefeitura de São Paulo
Plugin URI: https://github.com/hacklabr/wp-prefeitura-sp/
Description: Adiciona uma barra da Prefeitura de São Paulo no topo do tema Cultural
Author: Hacklab
Version: 1.0
Author URI: http://hacklab.com.br/
*/


add_action('before', function(){
    include 'barra.php';
});