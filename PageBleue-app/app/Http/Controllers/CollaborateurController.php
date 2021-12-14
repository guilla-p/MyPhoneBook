<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\collaborateur;

use function Symfony\Component\VarDumper\Dumper\esc;

class CollaborateurController extends Controller
{
    function show(){
        $this->authorize('view', User::class);
        $collab=collaborateur::paginate(1);
        return view('collaborateur/collaborateur', ['y'=>$collab]);

    }

    function show_create(){
        $this->authorize('create', User::class);
        return view('collaborateur/create_collab');
    }

    public function create(array $data)
    {
        return collaborateur::create([
            'civilite' => $data['civilite'],
            'nom_collab' => $data['nom_collab'],
            'prenom_collab' => $data['prenom_collab'],
            'rue_collab' => $data['rue_collab'],
            'code_postal_collab' => $data['code_postal_collab'],
            'ville_collab' => $data['ville_collab'],
            'numero_telephone_collab' => $data['numero_telephone_collab'],
            'email_collab' => $data['email_collab'],
            'entreprise_collab' => $data['entreprise_collab'],
            
        ]);
    }

    protected function edit($id)
    {
        $this->authorize('update',User::class); 
        $data = collaborateur::find($id);
        return view('collaborateur/update_collab',['data'=>$data]);
    }

    function update(Request $req){
        $this->authorize('update',User::class);
        $data = collaborateur::find($req->id);
        $data->nom_collab=$req->nom_collab;
        $data->prenom_collab=$req->prenom_collab;
        $data->numero_telephone_collab=$req->numero_telephone_collab;
        $data->email_collab=$req->email_collab;
        $data->entreprise_collab=$req->entreprise_collab;
        $data->save();
        return redirect ('collaborateur/id');
    }

    protected function delete($id){
        $this->authorize('delete', User::class);
        $data = collaborateur::find($id);
        $data->delete();
        return redirect('collaborateur/id');
    }

    protected function addData(Request $req)
    {
        $collab = new collaborateur;

        $collab->civilite=$req->civilite;
        $collab->nom_collab=$req->nom_collab;
        $collab->prenom_collab=$req->prenom_collab;
        $collab->rue_collab=$req->rue_collab;
        $collab->code_postal_collab=$req->code_postal_collab;
        $collab->ville_collab=$req->ville_collab;
        $collab->numero_telephone_collab=$req->numero_telephone_collab;
        $collab->email_collab=$req->email_collab;
        $collab->entreprise_collab=$req->entreprise_collab;
        $collab->save();

        return redirect('collaborateur/id');

    }

    protected function searchCol(Request $req)
    {
        if ($req->isMethod('post')) {
            $search = $req->get('search');
            $sch = collaborateur::where('nom_collab', 'LIKE', '%'.$search.'%')
            ->orWhere('prenom_collab','LIKE','%'.$search.'%')
            ->orWhere('entreprise_collab','LIKE','%'.$search.'%')
            ->orWhere('email_collab','LIKE','%'.$search.'%')
            ->orWhere('numero_telephone_collab','LIKE','%'.$search.'%')
            ->paginate();
        }
        return view('collaborateur/collaborateur',['y'=>$sch]);
    }
}
