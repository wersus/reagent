<?php

namespace Reagent\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Reagent\Reagent;
use Illuminate\Http\Request;

class ReagentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = Reagent::orderBy('created_at', 'asc')->get();
        $fields = ['name', 'liquid'];
        $model = $models->first();
        return view('CRUD.index', compact('models', 'fields', 'model'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Reagent;
        $fields = ['text' => 'name', 'checkbox'=> 'liquid'];
        return view('CRUD.create', compact('model', 'fields'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'liquid' => 'required|bool',
        ]);

        if ($validator->fails()) {
            return Redirect::to('reagent/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {

            $model = new Reagent;
            $model->name = Input::get('name');
            $model->liquid = Input::get('liquid', false);
            $model->save();

            // redirect
            Session::flash('message', __('Successfully created'));
            return Redirect::to('reagent');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \Reagent\Reagent $reagent
     * @return \Illuminate\Http\Response
     */
    public function show(Reagent $reagent)
    {
        $model = $reagent;
        $fields = ['name', 'liquid'];
        return view('CRUD.view', compact('model', 'fields'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Reagent\Reagent $reagent
     * @return \Illuminate\Http\Response
     */
    public function edit(Reagent $reagent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Reagent\Reagent $reagent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reagent $reagent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Reagent\Reagent $reagent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reagent $reagent)
    {
        //
    }
}
