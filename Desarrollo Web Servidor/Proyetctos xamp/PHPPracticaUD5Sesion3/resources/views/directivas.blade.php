<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        @if (count($records) === 1)
        I have one record!
        @elseif (count($records) > 1)
        I have multiple records!
        @else
        I don't have any records!
        @endif
            
        <br>
        @isset($records)
        <p>$records is defined and is not null...<p>
        
        @foreach ($records as $record)
            <p>This is record {{ $record }}</p>
        @endforeach
        
        <br>        
        @empty($records)
        // $records is "empty"...
        @endempty
    </body>

</html>