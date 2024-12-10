<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danhsach</title>
</head>
<body>
    <section>
        <h1> NHT - danh sach tai khoan</h1>
        <table>
            <head>
                <tr> 
                    <th> #</th>
                    <th> id</th>
                    <th> username</th>

                </tr>
            </head>
            <body>
                @foreach($list as $item)
                    @php 
                    $stt++;
                    @endphp
                    <tr>
                        <td> 1</td>
                        <td>{{$item["id"]}} </td>
                        <td>{{$item["username"]}}</td>
                    </tr>
                @endforeach
            </body>
        </table>
</body>
</html>