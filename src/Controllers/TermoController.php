<?php

namespace Intuix\Termo\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Intuix\Termo\Models\Termo;
use Intuix\Termo\Models\TermoAceite;
use Intuix\Termo\Services\TermoService;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TermoController extends Controller
{

    protected $termoGrupoService;

    public function __construct(TermoService $termoService)
    {
        $this->termoService = $termoService;
    }

    public function termo($cliente_id, $slug){
        $data['cliente'] = Cliente::find($cliente_id);
        abort_unless($data['cliente'], 404);
        $data['termo'] = Termo::where('slug', $slug)->first();
        abort_unless($data['termo'], 404);
        return view('termo::termo', $data);
    }

    public function qrcode($cliente_id, $slug){
        $data['cliente'] = Cliente::find($cliente_id);
        abort_unless($data['cliente'], 404);
        $data['termo'] = Termo::where('slug', $slug)->first();
        abort_unless($data['termo'], 404);

        $data['qrcode'] = QrCode::size(400)->generate(route('termo', [$data['cliente']->clie_id_cliente, $data['termo']->slug]));

        return view('termo::qrcode', $data);
    }

    public function assinarTermo(Request $request)
    {
        TermoAceite::create($request->all());
        return back()->withInput()->with('status', 'Termo assinado com sucesso!');
    }

    public function index()
    {
        $data['termos'] = Termo::all();
        return view('termo::index', $data);
    }

    public function create()
    {
        return view('termo::create'); 
    }

    public function store(Request $request)
    {
        $termo = Termo::create($request->all());
        return redirect()->route('termos.index');
    }

    public function show($id)
    {
        $data['termo'] = Termo::find($id);
        return view('termo::show', $data);
    }

    public function edit($id)
    {
        $data['termo'] = Termo::find($id);
        return view('termo::edit', $data);
    } 

    public function update(Request $request, $id)
    {
        $grupo = TermoGrupo::find($id);
        $grupo->update($request->all());
        foreach($grupo->termos as $docsGrupo){
            $termo = Termo::find($docsGrupo->docu_id_termo);
            $termo->termo_grupo_id = NULL;
            $termo->save();
        }

        if(isset($request->termos)){
            foreach($request->termos as $docId){
                $termo = Termo::find($docId);
                $termo->termo_grupo_id = $id;
                $termo->save();
            }
        }

        return redirect()->route('termos.grupos.index');
    }

    public function destroy($id)
    {
        //
    } 

}
