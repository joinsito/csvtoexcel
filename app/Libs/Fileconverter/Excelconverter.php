<?php
namespace app\Libs\Fileconverter;

class Excelconverter implements Fileconverter{
    private $content;
    /**
     * Set csv content
     *
     * @param string $content
     * @return void
     */
    public function setContent($content) 
    {
        $this->content = $content;
    }

    /**
     * Save to xls file
     *
     * @param [type] $fileName
     * @return void
     */
    public function saveFile($fileName)
    {
        $objReader = \PHPExcel_IOFactory::createReader('CSV');
        $tmpFile = tempnam("/tmp", "csv");
        $gestor = fopen($tmpFile, "w");
        fwrite($gestor, $this->content);
        fclose($gestor);
        $objPHPExcel = $objReader->load($tmpFile);
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save($fileName);
    }
}