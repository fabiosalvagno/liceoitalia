<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contatto;

class ContattoController extends Controller
{
    public function mostraForm()
    {
        return view('contatto');
    }

    public function invia(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email',
            'messaggio' => 'required|string'
        ]);

        // Salva nel database
        Contatto::create($validated);

        // Redireziona con messaggio di successo
        return redirect()->route('contatto.successo');

    }

    
}
