<?php


namespace App\Controllers;

use Core\ConfigView;

class Upload
{
    private string $name;
    private string $extension;
    private string $type;
    private string $tempName;
    private string $pathUpload = "C:/xampp/htdocs/projetoIntegrador/public/imgs/uploads";
    private int $error;
    private int $size;

    public function __construct(array $file)
    {
        $this->type = $file['type'];
        $this->tempName = $file['tmp_name'];
        $this->error = $file['error'];
        $this->size = $file['size'];
        $info = pathinfo($file['name']);

        $this->name = $info['filename'];
        $this->extension = $info['extension'];
        $success = $this->upload($this->pathUpload);
        return $success;
    }


    public function getBaseName()
    {
        $extension = strlen($this->extension) ? '.' . $this->extension : '';
        return $this->name . $extension;
    }


    public function upload(string $dir)
    {
        if ($this->error != 0) return false;
        $path = $dir . '/' . $this->getBaseName();
        if (move_uploaded_file($this->tempName, $path)) {
            return true;
        } else {
            return false;
        }
    }
}
