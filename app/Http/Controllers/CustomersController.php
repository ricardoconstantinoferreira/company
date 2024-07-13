<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $city = new City();

        return view('cliente', [
            'states' => $city->getStates()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data_birth = str_replace("/", "-", $request->input('date_birth'));
        $data_birth = date("Y-m-d", strtotime($data_birth));

        $customers = new Customers();
        $customers->document = $request->document;
        $customers->name = $request->name;
        $customers->date_birth = $data_birth;
        $customers->gender = $request->gender;
        $customers->address = $request->address;
        $customers->city_id = $request->cidade;

        $customers->save();

        return redirect()->route("customers.index")
            ->with('success', 'Customers created successfully.');
    }

    /**
     * Show search page customers
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function search()
    {
        $customers = new Customers();
        $city = new City();

        return view('search', [
            'customers' => $customers->getAllCustomers(),
            'states' => $city->getStates()
        ]);
    }
}
