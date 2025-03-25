@include('partials.head')

@section('content')
<h1>Contattami</h1>

@if(session('successo'))
  <div style="color: green;">{{ session('successo') }}</div>
@endif

<form method="POST" action="{{ route('contatto.invia') }}">
  @csrf
  <input type="text" name="nome" placeholder="Il tuo nome" required><br>
  <input type="email" name="email" placeholder="La tua email" required><br>
  <textarea name="messaggio" placeholder="Il tuo messaggio" required></textarea><br>
  <button type="submit">Invia</button>
</form>
@endsection

@include('partials.footer')