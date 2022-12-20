<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('homepage');
    }



    public function motDirecteur()
    {
        return view('motDirecteur');
    }


    public function Presentation()
    {
        return view('Presentation');
    }


    public function Press()
    {
      return view('Press');
    }

    public function Technique()
    {
        return view('Technique');
    }

    public function Formation()
    {
        return view('Formation');
    }
    public function News()
    {
        return view('News');
    }
    public function Reportage()
    {
        return view('Reportage');
    }
    public function Couverture()
    {
        return view('Couverture');
    }
    public function Emission()
    {
        return view('Emission');
    }
    public function Magazine()
    {
        return view('Magazine');
    }
    public function Podcast()
    {
        return view('Podcast');
    }
    public function Making()
    {
        return view('Making');
    }
    public function Court()
    {
        return view('Court');
    }
    public function Documentaire()
    {
        return view('Documentaire');
    }
    public function Autres()
    {
        return view('Autres');
    }
    public function inscription()
    {
        return view('inscription');
    }
    public function Agenda()
    {
        return view('Agenda');
    }
    public function Gallery()
    {
        return view('Gallery');
    }
    public function Contacter()
    {
        return view('Contacter');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
