<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CodesImport;
use App\Models\Code;
use phpDocumentor\Reflection\Types\Null_;

use function PHPUnit\Framework\isNull;

class HomeController extends Controller
{
    public function home(){

        $import = new CodesImport();

        Excel::import($import, 'CPdescarga.xls');

        echo "hola";

    }


    public function searchCodePostal($cp){

        try {

            $zip_code = Code::where('d_codigo', $cp)->first();

            if($zip_code == Null)
                return response()->json(['zip_code' => "not found"]);

            return response()->json(['zip_code' => $zip_code]);

        } catch (\Throwable $th) {

            $status = $th->getMessage();
            return response()->json(['status' => $status])->setStatusCode(500);

        }



    }

}
