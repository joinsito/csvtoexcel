<?php
namespace app\Libs\Fileconverter;

interface Fileconverter {
    /**
     * Set content to be converted.
     *
     * @param [string] $content
     * @return void
     */
    public function setContent($content);
    /**
     * Export to file.
     *
     * @param [string] $fileName
     * @return void
     */
    public function saveFile($fileName);
}