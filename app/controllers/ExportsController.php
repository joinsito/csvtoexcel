<?php
use Phalcon\Mvc\Controller;
use app\Libs\Fileconverter\Converter;
use app\Libs\Fileconverter\Excelconverter;
use File as File;

class ExportsController extends Controller
{
    public function addFile()
    {
        if ($this->request->isPost()) {
            // Inject desired conversor type.
            $converter = new Converter(new Excelconverter);
            foreach ($this->request->getUploadedFiles() as $file) {
                $fileName = pathinfo($file->getName(),PATHINFO_FILENAME)."_".rand().".xls";
                $fileContent = file_get_contents($file->getTempName());
            }
            $fileName = APP_PATH."files/".$fileName;
            $converter->saveFile($fileContent,$fileName);
            
            // Insert database row
            $file = new File();
            $file->filename = basename($fileName);
            $file->date_created = date("Y-m-d H:i:s");
            
            if ($file->save() === true) {
                $data = [
                    'code'    => 200,
                    'status'  => 'ok',
                    'message' => 'file created',
                    'id'        => $file->id
                ];
            }else {
                $data = [
                    'code'    => 500,
                    'status'  => 'fail',
                    'message' => 'There was a problem creating the file.'
                ];
            }
            $this->response->setStatusCode($data["code"], $data["status"]);
            $this->response->setJsonContent($data);
            return $this->response;            
        }
    }

    public function getFiles() 
    {
        $data = File::find();

        $this->response->setJsonContent($data);
        $this->response->setStatusCode(200, "Not Found");
        return $this->response;
    }

    public function showFileInfo($id) 
    {
        $data = File::findFirst($id);
        $link = "https://".$_SERVER['HTTP_HOST']."/files/".$data->filename;
        $this->response->setJsonContent(['filedata' => $data, 'download_link' => $link]);
        if ($data!==false ){
            $this->response->setStatusCode(200, "ok");
        }else {
            $this->response->setStatusCode(404, "Not Found");
        }

        return $this->response; 
    }
}