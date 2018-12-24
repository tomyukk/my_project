<?php

class Config
{

    // config local DateBase
    public static $host = '127.0.0.1';
    public static $dbname = 'kidestore';
    public static $user = 'root';
    public static $password = '';
    public static $dsn = 'mysql:host=127.0.0.1;dbname=kidestore;charset=utf8';

    // config site
    public static $url = 'http://kidesotre.ua/';
    public static $serverTest = false;

    public static $debugQueriesDB = false;
    public static $errorReporting = -1;
    public static $showErrors = false;

    // ssl, tls
    public static $SMTPSecure = '';
    public static $SMTPAuth = true;
    public static $password_mail = 'Jfefoihrgqw';
    public static $type_send_mail = 'HTML';
    public static $ajax_include = true; // include test ajax query

    public static $v_cache_styles_and_js = 44;
    public static $v_session = 7;

    public static $loadMinimizedScripts = false;
}
