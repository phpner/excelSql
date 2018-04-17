<?php
class excelPhpner{
    private static $_instance = null;
    /**
     * @var phpeexcel
     */
    static public $excelphp = '';
    private function __construct()
    {
        self::$excelphp =  new PHPExcel();
    }

    protected function __clone(){}
    static function getInstance()
    {
        if (is_null(self::$_instance))
        {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    public function getAjax()
    {
        var_dump($_POST);
    }
}