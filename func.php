/**
*
* author iamguruman
* https://github.com/iamguruman
* use LibreOffice for opening doc files,
* Libre is fast, lightweight and opensource
*
**/


function html2doc($html, $filename = null){
    if(!$filename) { $filename = "filename"; }
    header("application/msword");
    header("Content-Disposition: attachment; filename={$filename}.doc");
    header("Content-Transfer-Encoding: binary");
    exit($html);
}
