<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;

class ContattoController extends Controller
{
    public function index()
    {
        return view('contatto');
    }

    public function invia(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:100',
            'email' => 'required|email',
            'messaggio' => 'required|string|max:1000',
        ]);

        $dati = $request->only('nome', 'email', 'messaggio');

        // 🔹 Email via Mailjet
        Mail::raw("Nome: {$dati['nome']}\nEmail: {$dati['email']}\nMessaggio: {$dati['messaggio']}", function ($message) use ($dati) {
            $message->to('TUO_EMAIL_DESTINATARIO')
                    ->subject('Nuovo messaggio dal sito Liceoitalia');
        });

        // 🔹 Notifica Telegram
        $this->inviaTelegram($dati);

        return back()->with('successo', 'Messaggio inviato con successo!');
    }

    private function inviaTelegram($dati)
    {
        $token = 'TUO_BOT_TOKEN';
        $chat_id = 'TUO_CHAT_ID';
        $testo = "📬 *Nuovo messaggio da Liceoitalia*\n\n👤 *Nome:* {$dati['nome']}\n✉️ *Email:* {$dati['email']}\n📝 *Messaggio:* {$dati['messaggio']}";

        Http::post("https://api.telegram.org/bot{$token}/sendMessage", [
            'chat_id' => $chat_id,
            'text' => $testo,
            'parse_mode' => 'Markdown'
        ]);
    }
}
