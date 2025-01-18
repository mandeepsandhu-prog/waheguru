<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade as PDF;

class VisitorController extends Controller
{
    public function index()
    {
        $visitors = Visitor::orderBy('created_at', 'desc')->paginate(10); // 10 items per page
        return view('visitors.index', compact('visitors'));
    }
    

    public function create()
    {
        return view('visitors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'occupation' => 'required',
        ]);

        Visitor::create($request->all());

        return redirect()->route('visitors.index')->with('success', 'Visitor added successfully!');
    }

    public function edit($id)
    {
        $visitor = Visitor::findOrFail($id);
        return view('visitors.edit', compact('visitor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'occupation' => 'required',
        ]);

        $visitor = Visitor::findOrFail($id);
        $visitor->update($request->all());

        return redirect()->route('visitors.index')->with('success', 'Visitor updated successfully!');
    }

    public function destroy($id)
    {
        $visitor = Visitor::findOrFail($id);
        $visitor->delete();

        return redirect()->route('visitors.index')->with('success', 'Visitor deleted successfully!');
    }

    public function exportExcel()
    {
        return Excel::download(new \App\Exports\VisitorsExport, 'visitors.xlsx');
    }

    public function exportPdf()
    {
        $visitors = Visitor::all();
        $pdf = PDF::loadView('visitors.pdf', compact('visitors'));
        return $pdf->download('visitors.pdf');
    }
}
