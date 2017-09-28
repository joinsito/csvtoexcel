<?php
namespace app\Libs\Fileconverter;

class Converter {
    private $fileconverter;

    public function __construct (Fileconverter $fileconverter) 
    {
        $this->fileconverter = $fileconverter;
    }

    public function saveFile($content,$filename=null) {
        try {
            $this->fileconverter->setContent($content);
            $this->fileconverter->savefile($filename);
        }catch (Exception $e) {
            throw Exception("There was a problem saving file:".$e->getMessage());
        }
    }


}
