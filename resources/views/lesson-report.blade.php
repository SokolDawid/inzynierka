<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Raport lekcji</title>
    <style>
        body { font-family: Arial, sans-serif; background: #fff; color: #000; }
        .container { max-width: 800px; margin: 0 auto; padding: 30px; }
        h2, h4 { margin-bottom: 10px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px;}
        th, td { border: 1px solid #333; padding: 8px; text-align: left; }
        th { background: #eee; }
        .summary { margin-top: 20px; }
        @media print {
            .no-print { display: none; }
            body { background: #fff !important; }
        }
    </style>
</head>
<body>
<div class="container">
    <button class="no-print" onclick="window.print()" style="float:right;margin-bottom:10px;">Drukuj</button>
    <h2>Raport lekcji</h2>
    <div><strong>Zajęcia:</strong> {{ $class->Title }}</div>
    <div><strong>Temat lekcji:</strong> {{ $lesson->topic }}</div>
    <div><strong>Data lekcji:</strong> {{ \Carbon\Carbon::parse($lesson->Date)->format('d.m.Y') }}</div>
    <div class="summary">
        <strong>Obecnych:</strong> {{ $present }}<br>
        <strong>Nieobecnych:</strong> {{ $absent }}
    </div>
    <h4>Lista obecności</h4>
    <table>
        <thead>
            <tr>
                <th>Lp.</th>
                <th>Imię i nazwisko</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($attendance as $i => $row)
                <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $row->FirstName }} {{ $row->LastName }}</td>
                    <td>
                        @if($row->Attendance === 'Present')
                            Obecny
                        @else
                            Nieobecny
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>