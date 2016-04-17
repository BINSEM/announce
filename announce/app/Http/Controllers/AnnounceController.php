<?php

namespace App\Http\Controllers;

use App\Announce;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AnnounceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $announce = Announce::all();

        return view('announce.index', compact('announce'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('announce.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();

        Announce::create($input);
        
        return redirect('announce/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $announce = Announce::find($id);

        return view('announce.show', compact('announce'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $announce = Announce::find($id);

         return view('announce.edit', compact('announce'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $announceUpdate = $request->all();
        $announce = Announce::find($id);
        $announce->update($announceUpdate);
        return redirect('announce/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Announce $announce)
    {
        $this->authorize('destroy', $announce);
        $announce->delete();
        return redirect('announce/index')->with('message', 'The announce is deleted !');
    }
}
