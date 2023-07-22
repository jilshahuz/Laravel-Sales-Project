<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\Sale;
use App\Models\Relation;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //Get all contents in sales table and display     

        $sales = Sale::all();
        return View('sales.show', compact(('sales')));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($row)
    {
    }


    public function store(Request $request)
    {
        //function to store corresponding record to sales table
        $sales = new Sale();
        //getting table name and id passed
        $tableName = $request->input('table');
        $recordId = $request->input('id');
        //getting the corresponding record
        $table = DB::table($tableName);
        $record = $table->find($recordId);
        //insert the row to sales table
         $salesData = [ 'first_name' => $record->first_name, 'last_name' => $record->last_name, 'postcode' => $record->postcode, 
        'city' => property_exists($record, 'city') ? $record->city : null,'street_name' => property_exists($record, 'street_name') ? $record->street_name : null];
        DB::table('sales')->insert($salesData);
        //redirecting to sales table view
        return redirect()->route('show');
    }

    /**
     * Display the specified resource.
     */
    public function show($data)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
