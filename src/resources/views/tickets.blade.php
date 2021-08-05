<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Open Tickets</h1>

    <table border="1" style="padding: 2px">
        <thead>
            <td>Problem</td>
            <td>Date set</td>
        </thead>

        @foreach($tickets as $ticket)
            <tr>
                <td>{{ $ticket->problem }}</td>
                <td>{{ $ticket->created_at }}</td>
            </tr>
        @endforeach
    </table>

</body>
</html>
