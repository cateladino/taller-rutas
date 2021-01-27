<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frameworks</title>
</head>
<body>
    <div>
        <h1>Frameworks Backend</h1>
        <table>
            @foreach ($frameworks_backend as $framework => $enlace)
                <tr>
                    <th>{{ $framework }}</th>  
                    <th>
                        <a target="_blank" href="{{ $enlace }}">Ir a la página</a>                    
                    </th>
                </tr>
            @endforeach
        </table>
    </div>
    <div>
        <h1>Frameworks Frontend</h1>
        <table>
            @foreach ($frameworks_frontend as $framework => $enlace)
                <tr>
                    <th>{{ $framework }}</th>  
                    <th>
                        <a target="_blank" href="{{ $enlace }}">Ir a la página</a>                    
                    </th>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>