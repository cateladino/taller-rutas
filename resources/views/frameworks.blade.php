<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frameworks</title>
</head>
<body>
    <table>
        @foreach ($frameworks as $framework => $enlace)
            <tr>
                <th>{{ $framework }}</th>  
                <th>
                    <a target="_blank" href="{{ $enlace }}">Ir a la página</a>                    
                </th>
            </tr>
        @endforeach
    </table>
</body>
</html>