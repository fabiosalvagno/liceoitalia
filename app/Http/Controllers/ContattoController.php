<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contatto;
use Illuminate\Support\Facades\Mail;

class ContattoController extends Controller
{
    public function mostraForm()
    {
        return view('contatto');
    }

    public function invia(Request $request)
    {
        // Valida i dati del form
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email',
            'messaggio' => 'required|string'
        ]);

        // Salva nel database
        Contatto::create($validated);

        // Usa Mailjet API per inviare l'email
        $mj = new \Mailjet\Client(
            env('MAILJET_APIKEY'),
            env('MAILJET_APISECRET'),
            true,
            ['version' => 'v3.1']
        );

        // Corpo del messaggio
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "fabiosalvagno@yahoo.co.jp", // Usa il tuo indirizzo email verificato
                        'Name' => "Liceo Italia"
                    ],
                    'To' => [
                        [
                            'Email' => "fsalvagnofabio@outloo.jp", // Cambia con il tuo indirizzo di destinazione
                            'Name' => "Destinatario Test"
                        ]
                    ],
                    'Subject' => "Nuovo messaggio di contatto",
                    'TextPart' => "Nuovo messaggio da: " . $validated['nome'] . "\n\n" . "Messaggio: " . $validated['messaggio'],
                    'HTMLPart' => "<h3>Nuovo messaggio di contatto da " . $validated['nome'] . "</h3><p>" . nl2br($validated['messaggio']) . "</p>"
                ]
            ]
        ];

        // Invia l'email tramite Mailjet API
        $response = $mj->post(\Mailjet\Resources::$Email, ['body' => $body]);

        // Verifica la risposta e reindirizza
        return $response->success()
            ? redirect()->route('contatto.successo')->with('successo', 'Il tuo messaggio è stato inviato con successo!')
            : redirect()->route('contatto.form')->with('errore', 'Si è verificato un errore nell\'invio dell\'email.');
    }
}
