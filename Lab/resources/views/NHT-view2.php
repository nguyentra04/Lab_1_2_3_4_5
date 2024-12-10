<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ifstatement</title>
</head>
<body>
    <h1>if statement</h1>
    @verbatim
        <pre>
            @if(count($array)===1)
              i have one element!
            @elseif(count($array)> 1)
              i have many elements
            @else
              i have no elements
            @endif
        </pre>
    @endverbatim
    <hr>
    <h2> mang@{{$array}}</h2>
    @verbatim
        <pre>
            @if(count($array)===1)
              i have one element!
            @elseif(count($array)> 1)
              i have many elements
            @else
              i have no elements
            @endif
        </pre>
    @endverbatim
    
</body>
</html>