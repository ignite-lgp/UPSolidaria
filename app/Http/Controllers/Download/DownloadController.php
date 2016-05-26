<?php

namespace App\Http\Controllers\Download;

use App\Http\Controllers\Controller;
use View;
use DB;

class DownloadController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Download Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for Downloading Files
    |
    */


    /**
    *
    * Download file in pathToFile
    * @return file
    */
    protected function DownloadFile1(){

        $pathToFile = "../public/src/DownloadFiles/Principios_Enquadramento_voluntariado_UP.pdf";

        return response()->download($pathToFile);
    }
}
