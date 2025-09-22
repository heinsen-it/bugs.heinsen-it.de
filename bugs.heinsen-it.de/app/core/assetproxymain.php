<?php
namespace hitbugsreader\app\core;
/**
 *
 */
class AssetProxyMain
{
    private static bool $cdn = true;
    private static string $cdnurl = \CDNURL;


    private static function getcdn():string{
        if(self::$cdn){
            return self::$cdnurl;
        } else {
            return '';
        }
    }

    private static function filecombine(string $path,string $filename,string $ext):string{
        return $path.$filename.$ext;
    }

    public static function JScript(string $filename,string $path = 'assets/'):string
    {
         $path = self::filecombine($path,$filename,'.js');
         return DIR . $path;
    }

    public static function EXJScript(string $filename,string $path = ''):string
    {
        $path = self::filecombine($path,$filename,'.js');
        if(self::$cdn){
            return self::getcdn().'?path='.$path;
        } else {
            return DIR . $path;
        }
    }

    public static function STYLES(string $filename,string $path = 'assets/'):string
    {
        $path = self::filecombine($path,$filename,'.css');
        return DIR . $path;


    }

    public static function EXSTYLES(string $filename ,string $path = ''):string
    {
        $path = self::filecombine($path,$filename,'.css');
        if(self::$cdn){
            return self::getcdn().'?path='.$path;
        } else {
            return DIR . $path;
        }
    }

    public static function IMAGES(string $filename,string $path = 'assets/',string $ext = '.jpg'):string
    {
        if ($filename) {
            $path .= "$filename$ext";
        }
        return DIR . $path;
    }

    public static function EXIMAGES(string $filename,string $path = ''):string
    {
        if ($filename) {
            $path .= "$filename.jpg";
        }
        if(self::$cdn){
            return self::getcdn().'?path='.$path;
        } else {
            return DIR . $path;
        }
    }

}
