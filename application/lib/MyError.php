<?php

namespace app\lib;

use app\core\View;

class MyError extends \ErrorException
{
    public $code;
    public $line;
    public $message;
    public $file;

    public function __construct($message = null, $line = null, $code = null, $file = null)
    {
        $this->message = $message;
        $this->line = $line;
        $this->code = $code;
        $this->file = $file;
    }

    /**
     * Формирует информацию об ошибке
     *
     * @return string
     */
    private function getInfo()
    {
        return 'Message: ' . $this->message . '  ' .
        'Code: ' . $this->code . '  ' .
        'File: ' . $this->file . '  ' .
        'Line: ' . $this->line . '  ' .
        'DataTime: ' . date( 'd-m-Y G:i:s' );
    }

    /**
     * Записывает данные об ошибке в журнал
     *
     * @return int
     */
    private function writeLog()
    {
        $path = SITE_ROOT . '/error.log';
        $info = $this->getInfo() . "\n";
        $info = ( count( file( $path ) ) + 1 ) . "  " . $info;
        $text = null;

        //если файл журнала существует
        if( file_exists( $path ) )
        {
            $text = file_get_contents( $path ) . $info;        //считываем данные и дописываем строку
        }
        $file = file_put_contents( $path, $text );            //записываем файл

        return $file;
    }

    /**
     * Записать данные об ошибке в жернал и отобразить страницу ошибки
     */
    public function show()
    {
        $this->writeLog();
        $view = new View();
        $view->display( 'error/error.php' );
    }

}