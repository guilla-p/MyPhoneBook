<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entreprise;

class EntrepriseController extends Controller
{
    function show(){
      $this->authorize('view', User::class);
      $ent= entreprise::paginate(1);
      return view('entreprise/entreprise',['x'=>$ent]);  
    }

    function show_create(){
      $this->authorize('create', User::class);
      return view('entreprise/create_ent');
    }

    function create(array $data)
    {
        return entreprise::create([
            'nom_ent' => $data['nom_ent'],
            'rue-ent' => $data['rue_ent'],
            'code_postal_ent' => $data['code_postal_ent'],
            'ville_ent' => $data['ville_ent'],
            'numero_telephone_ent' => $data['numero_telephone_ent'],
            'email_ent' => $data(['email_ent']),
            
        ]);
    }

    protected function edit($id)
    {
        $this->authorize('update',User::class); 
        $data = entreprise::find($id);
        return view('entreprise/update_ent',['data'=>$data]);
    }

    function update(Request $req){
      $this->authorize('update',User::class);
      $data = entreprise::find($req->id);
      $data->nom_ent=$req->nom_ent;
      $data->rue_ent=$req->rue_ent;
      $data->code_postal_ent=$req->code_postal_ent;
      $data->ville_ent=$req->ville_ent;
      $data->numero_telephone_ent=$req->numero_telephone_ent;
      $data->email_ent=$req->email_ent;
      $data->save();
      return redirect ('entreprise/id');
  }


  protected function delete($id){
    $this->authorize('delete', User::class);
    $data = entreprise::find($id);
    $data->delete();
    return redirect('entreprise/id');
}
protected function addData(Request $req)
{
    $ent = new entreprise;

    $ent->nom_ent=$req->nom_ent;
    $ent->rue_ent=$req->rue_ent;
    $ent->code_postal_ent=$req->code_postal_ent;
    $ent->ville_ent=$req->ville_ent;
    $ent->numero_telephone_ent=$req->numero_telephone_ent;
    $ent->email_ent=$req->email_ent;
    $ent->save();

    return redirect('entreprise/id');
}

protected function searchCol(Request $req)
{
    if ($req->isMethod('post')) {
        $search = $req->get('search');
        $sch = entreprise::where('nom_ent', 'LIKE', '%'.$search.'%')
        ->orWhere('ville_ent','LIKE','%'.$search.'%')
        ->orWhere('email_ent','LIKE','%'.$search.'%')
        ->paginate();
    }
    return view('entreprise/entreprise',['x'=>$sch]);
}
    
}
