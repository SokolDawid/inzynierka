<h2>Nowa wiadomość kontaktowa</h2>

@isset($data['name'])
    <p><strong>Imię:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Temat:</strong> {{ $data['subject'] }}</p>
    <p><strong>Wiadomość:</strong><br>{{ $data['message'] }}</p>
@else
    <p><strong>Opiekun:</strong> {{ $data['guardian_name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Dziecko:</strong> {{ $data['child_name'] }} (wiek: {{ $data['child_age'] }})</p>
    <p><strong>Wiadomość:</strong><br>{{ $data['message'] }}</p>
@endisset
