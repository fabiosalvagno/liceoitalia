<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contatto;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;


class ContattoController extends Controller
{
    public function mostraForm()
    {
        return view('contatto');
    }


    // public function invia(Request $request)
    // {
    //     // Valida i dati del form
    //     $validated = $request->validate([
    //         'nome' => 'required|string|max:255',
    //         'email' => 'required|email',
    //         'messaggio' => 'required|string'
    //     ]);

    //     // Salva nel database
    //     Contatto::create($validated);

    //     $this->sendTelegram(
    //         "*📩 Nuovo messaggio di contatto!*\n\n" .
    //         "*👤 Nome:* " . $validated['nome'] . "\n" .
    //         "*📧 Email:* " . $validated['email'] . "\n\n" .
    //         "*📝 Messaggio:*\n" . $validated['messaggio']
    //     );
        
    //     // Usa Mailjet API per inviare l'email
    //     $mj = new \Mailjet\Client(
    //         env('MAILJET_APIKEY'),
    //         env('MAILJET_APISECRET'),
    //         true,
    //         ['version' => 'v3.1']
    //     );

    //     // Corpo del messaggio
    //     // Corpo del messaggio
    //     $body = [
    //         'Messages' => [
    //             [
    //                 'From' => [
    //                     'Email' => "fabiosalvagno@yahoo.co.jp", // Usa il tuo indirizzo email verificato
    //                     'Name' => "Liceo Italia"
    //                 ],
    //                 'To' => [
    //                     [
    //                         'Email' => "salvagnofabio@outlook.jp", // Cambia con il tuo indirizzo di destinazione
    //                         'Name' => "Destinatario Test"
    //                     ]
    //                 ],
    //                 'Subject' => "Nuovo messaggio di contatto",
    //                 'TextPart' => "Nuovo messaggio da: " . $validated['nome'] . "\n\n" . "Messaggio: " . $validated['messaggio'],
    //                 'HTMLPart' => "<h3>Nuovo messaggio di contatto da " . $validated['nome'] . "</h3><p><strong>Email:</strong> " . $validated['email'] . "</p><p><strong>Messaggio:</strong><br>" . nl2br($validated['messaggio']) . "</p>"
    //             ]
    //         ]
    //     ];


    //     // Invia l'email tramite Mailjet API
    //     $response = $mj->post(\Mailjet\Resources::$Email, ['body' => $body]);

    //     // Verifica la risposta e reindirizza
    //     return $response->success()
    //         ? redirect()->route('contatto.successo')->with('successo', 'Il tuo messaggio è stato inviato con successo!')
    //         : redirect()->route('contatto.form')->with('errore', 'Si è verificato un errore nell\'invio dell\'email.');
    // }

    public function invia(Request $request)
{
    $validated = $request->validate([
        'nome' => 'required|string|max:255',
        'email' => 'required|email',
        'messaggio' => 'required|string'
    ]);

    Contatto::create($validated);

    $this->sendTelegram(
        "*📩 Nuovo messaggio di contatto!*\n\n" .
        "*👤 Nome:* " . $validated['nome'] . "\n" .
        "*📧 Email:* " . $validated['email'] . "\n\n" .
        "*📝 Messaggio:*\n" . $validated['messaggio']
    );

    // ✉️ Invio tramite Postfix locale
    Mail::send('contatto', [
        'nome' => $validated['nome'],
        'email' => $validated['email'],
        'messaggio' => $validated['messaggio']
    ], function ($message) use ($validated) {
        $message->to('admin@fabiosalvagno.com')
                ->subject('📩 Nuovo messaggio di contatto da ' . $validated['nome']);
    });
    

    return redirect()->route('contatto.successo')->with('successo', 'Il tuo messaggio è stato inviato con successo!');
}

    public function sendTelegram($text)
    {
        $token = '7066886820:AAFa-hkmMVZOIlsKLJoMOkycaxFUeJ4DreU';
        $chat_id = '7031797599';
        $url = "https://api.telegram.org/bot$token/sendMessage";

        try {
            $response = Http::post($url, [
                'chat_id' => $chat_id,
                'text' => $text,
                'parse_mode' => 'Markdown', // abilita *grassetto*, _corsivo_, ecc.
            ]);

            if (!$response->successful()) {
                Log::error("Errore invio Telegram. Codice: " . $response->status() . " - " . $response->body());
            }
        } catch (\Exception $e) {
            Log::error("Eccezione invio Telegram: " . $e->getMessage());
        }
    }
}
