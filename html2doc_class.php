<?php

/**
*
* author iamguruman
* https://github.com/iamguruman
* use LibreOffice for opening doc files,
* Libre is fast, lightweight and opensource
*
**/


class html2doc
{
        public function getfile($html, $filename = null){
                if(!$filename) { $filename = "filename"; }
                header("application/msword");
                header("Content-Disposition: attachment; filename={$filename}.doc");
                header("Content-Transfer-Encoding: binary");
                exit($html);
        }
}
