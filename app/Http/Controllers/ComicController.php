<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        $data = [
            'comics' => $comics
        ];

        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->paramsToValidate());
        $data = $request->all();
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        $data = [
            'comic' => $comic
        ];
        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        $data = [
            'comic' => $comic
        ];
        return view('comics.edit', $data);
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
        $request->validate($this->paramsToValidate());

        $form_data = $request->all();

        $comic = Comic::find($id);
        $comic->update($form_data);

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::find($id);
        $comic->delete();
        return redirect()->route('comics.index');
    }

    public function search(Request $request)
    {
        $search = $request->input('search'); // string
        $search = explode(' ', $search); // array
        $params = [];
        foreach ($search as $word) {
            $params[] = ['title', 'LIKE', '%' . $word . '%']; //title a titolo esemplificativo
        }; 
        dump($params);
        dump($search);
        $search = implode('%', $search); 
        $results = Comic::query()
            ->where($params) // array of arrays
            ->orWhere('series', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->get();
        $data = [
            'results' => $results
        ];

        return view('search', $data);
    }

    protected function paramsToValidate()
    {
        return [
            'series' => 'required|min:3|max:50',
            'title' => 'required|max:100',
            'price' => 'required',
            'pages' => 'required',
            'release_date' => 'required',
            'number' => 'required'
        ];
    }
}
