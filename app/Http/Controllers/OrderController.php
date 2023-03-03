<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Order;
use App\Models\Person;
use App\Http\Resources\OrderResource;

class OrderController extends Controller
{

    protected $singleName="Order";
    protected $pluralName="Orders";
    protected $titles=[
        'ID',
        'Reference',
        'Date to complete',
        'Status',
        'Comments',
        'Person'
    ];

    /**
     * Create a new controller instance.
     *
     * @param  \App\Repositories\ProductRepository  $users
     * @return void
     */
    public function __construct() 
    {
        $this->middleware(['auth'])->except(['all']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::join('person', 'person.id', '=', 'order.person_id')->select(
            'order.id', 
            'order.reference', 
            'order.date', 
            'order.status', 
            'order.comments', 
            'person.name as person'
        )->paginate(10);

        return Inertia::render('Orders/Index', [
            'tableItems' => $orders,
            'tableTitles' => $this->titles,
            'singleName' => $this->singleName,
            'pluralName' => $this->pluralName,
            'success' => session()->get('success')
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $orders = Order::paginate(10);
        return OrderResource::collection($orders);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $persons=Person::pluck('name','id');
        return Inertia::render('Orders/Form', [
            'singleName' => $this->singleName,
            'pluralName' => $this->pluralName,
            'formTitles' => $this->titles,
            'persons' => $persons,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'reference' => 'required|string',
            'date' => 'required|date',
            'status' => 'required|string',
            'comments' => 'required|string',
            'person_id' => 'required|integer'
        ]);

        $input = $request->all();
        $order=Order::create($input);

        return redirect()->route('orders.index')->with('success', 'Order Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $order = $order->join('person', 'person.id', '=', 'order.person_id')->select(
            'order.id', 
            'order.reference', 
            'order.date', 
            'order.status', 
            'order.comments', 
            'person.name as person'
        )->first();

        return Inertia::render('Orders/Show', [
            'Items' => $order,
            'showTitles' => $this->titles,
            'pluralName' => $this->pluralName
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $persons=Person::pluck('name','id');
        return Inertia::render('Orders/Form', [
            'singleName' => $this->singleName,
            'pluralName' => $this->pluralName,
            'formTitles' => $this->titles,
            'id' => $order->id,
            'order' => $order,
            'persons' => $persons,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'reference' => 'required|string',
            'date' => 'required|date',
            'status' => 'required|string',
            'comments' => 'required|string',
            'person_id' => 'required|integer'
        ]);

        $input = $request->all();
        $order->update($input);

        return redirect()->route('orders.index')->with('success', 'Updated Order.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Removed Order.');
    }

}
