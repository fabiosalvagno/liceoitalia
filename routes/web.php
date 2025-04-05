<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Http\Controllers\ContattoController;
use Illuminate\Support\Facades\Mail;
use Mailjet\Resources;
use App\Http\Controllers\BookController;


Route::get('/', function () {
    return view('new-home');
});


Route::get('/books', function () {
    $books = Book::all();  // シンプルに全書籍取得
    return view('books', ['books' => $books]);
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/courses/a1', function () {
    return view('courses.a1');
});

Route::get('/courses/b2', function () {
    return view('courses.b2');
});

Route::get('/contatto', [ContattoController::class, 'mostraForm'])->name('contatto.form');
Route::post('/contatto', [ContattoController::class, 'invia'])->name('contatto.invia');

Route::get('/contatto/successo', function () {
    return view('contatto-success');
})->name('contatto.successo');


// Route::get('/test-mailjet', function () {
//     Mail::raw('Questa è una email di test inviata con Mailjet via SMTP!', function ($message) {
//         $message->to('fabiosalvagno@gmail.com') // Sostituisci con la tua email
//                 ->subject('Email di test Mailjet');
//     });

//     return 'Email inviata (forse 😅)... controlla la tua casella!';
// });


Route::get('/api-mailjet-test', function () {
    $mj = new \Mailjet\Client(
        env('MAILJET_APIKEY'),
        env('MAILJET_APISECRET'),
        true,
        ['version' => 'v3.1']
    );

    $body = [
        'Messages' => [
            [
                'From' => [
                    'Email' => "fabiosalvagno@yahoo.co.jp", // Usa il tuo indirizzo verificato
                    'Name' => "Liceo Italia"
                ],
                'To' => [
                    [
                        'Email' => "fabiosalvagno@gmail.com", // Cambia con una tua email per il test
                        'Name' => "Destinatario Test"
                    ]
                ],
                'Subject' => "Test Email via API Mailjet",
                'TextPart' => "Questa è una email di test inviata con Mailjet tramite API!",
                'HTMLPart' => "<h3>Funziona! 🎉</h3><p>Email inviata con successo tramite API Mailjet.</p>"
            ]
        ]
    ];

    $response = $mj->post(Resources::$Email, ['body' => $body]);

    return $response->success()
        ? 'Email inviata con successo!'
        : 'Errore: ' . $response->getStatus() . ' - ' . json_encode($response->getData());
});


Route::get('/books', [BookController::class, 'index'])->name('books.index');