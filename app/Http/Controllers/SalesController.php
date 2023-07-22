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
        //insert the corresponding fields from $data into sales table
        //return $data;
         $sales = new Sale();
        //return $request->table;
        // $table=$request->table;
        // $id=$request->id;
        //return $table;
        // $data = DB::table($table)->find($id); 
       // $data = $row->attributesToArray();
        // $sales->first_name = $data['first_name'];
        // $sales->last_name = $data['last_name'];
        // $sales->postcode = $data['postcode'];
        // $sales->city = $data['city'];
        // $sales->street_name = $data['street_name'];
        // $sales->save();

        $tableName = $request->input('table');
        $recordId = $request->input('id');
        $table = DB::table($tableName);
        $record = $table->find($recordId);
        //$record->id='';
       // $record::make('id')->deselected();
        //$data=  $record->fetch_assoc();
        //return $record;
        //  DB::table('sales')->insert([ 'first_name' => $record->first_name, 'last_name' => $record->last_name, 
        // 'postcode' => $record->postcode, 'city' => $record->city->nullable(), 'street_name' => $record->street_name->nullable()]);
        //$sales::create($record);

        $salesData = [ 'first_name' => $record->first_name, 'last_name' => $record->last_name, 'postcode' => $record->postcode, 
        'city' => property_exists($record, 'city') ? $record->city : null,'street_name' => property_exists($record, 'street_name') ? $record->street_name : null];
        DB::table('sales')->insert($salesData); 

        //DB::table('sales')->insert((array)$record);

        //produce the view of sales table


         $sales = Sale::all();
        //  return back()->withInput();
        //  return redirect(view('sales.show'));
        // return View('sales.show', compact(('sales')));

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
