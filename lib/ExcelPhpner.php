<?php
namespace lib;
class ExcelPhpner{
    public $xls;
    public $sheet;
    /**
     * @var phpeexcel
     */
    public function __construct()
    {
        $this->xls = new \PHPExcel();
    }

    /**
     * @param int $set active sheet
     * @param int $get active sheet
     * @return \PHPExcel_Worksheet
     * @throws \PHPExcel_Exception
     */

    public function getSheet($set = , $get = 0)
    {
        $this->xls->createSheet($set);
        $this->sheet = $this->xls->getActiveSheet($get);
        return $this->sheet;
        $sheet->setTitle('Таблица умножения');
    }
    public function loop()
    {
        $v=1;
            for ($t=0; $t <= 3; $t++){

            echo "<tr>";
                  for ($i=0; $i <= 4 ; $i++) {
                     echo "<td class='col-md-2 colectionTr'>$v</td>";
                     $this->sheet->setCellValueByColumnAndRow($i, $t  +1 ,$v);
                     $this->sheet->getStyleByColumnAndRow($i,$t +1)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                    $v++;

                 }
            echo "</tr>";
         }
         $this->saveXls();
    }
    private function saveXls()
    {
        $objWriter = \PHPExcel_IOFactory::createWriter($this->xls, 'Excel2007');
        $objWriter->save('name.xlsx');
    }
}