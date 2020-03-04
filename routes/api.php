<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

Route::get('sales/branch','Sales\BranchController@listarBrachs');

/* Route::get('sales/branch', function (){
	//return App\User::all();
	return datatables()
		->eloquent(App\Branch::query())
		->addColumn('btn', 'sales.branch.actions')
        ->rawColumns(['btn'])
		->toJson();
}); */
