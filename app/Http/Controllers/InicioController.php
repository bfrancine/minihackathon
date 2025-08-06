<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class InicioController extends Controller
{
    public function index()
    {
        try {
            DB::connection()->getPdo();
            $dbName = DB::connection()->getDatabaseName();
            $message = "Muy buen día, la conexión ha sido exitosa.";
            $success = true;
        } catch (\Exception $e) {
            $message = "Error de conexión a la base de datos <br><code>" . $e->getMessage() . "</code>";
            $success = false;
        }

        return view('welcome', compact('message', 'success'));
    }
}
