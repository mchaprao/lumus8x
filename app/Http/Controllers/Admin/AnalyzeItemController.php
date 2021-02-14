<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Analyze;
use App\Models\AnalyzeItem;
use App\Models\ParameterAnalyze;
use Illuminate\Http\Request;

class AnalyzeItemController extends Controller
{
    public function create(Analyze $analyze)
    {
        $itens = AnalyzeItem::where('analyze_id', '=', $analyze->id)->get();
        $parameters = ParameterAnalyze::all();
        return view('admin.analyzeItens.create', ['analyze' => $analyze, 'parameters' => $parameters, 'itens' => $itens]);
    }

    public function store(Request $request, Analyze $analyze)
    {
        $dados = new AnalyzeItem();
        $dados->tenant_id = $analyze->tenant_id;
        $dados->analyze_id = $analyze->id;
        $dados->date_analyze = $analyze->date_analyzes;
        $dados->parameter_id = $request->parameter_id;
        $dados->location = $request->location;
        $dados->result = $request->result;
        $dados->save();

        return redirect()->route('analyze-item.create', ['analyze' => $analyze->id]);
    }
}
