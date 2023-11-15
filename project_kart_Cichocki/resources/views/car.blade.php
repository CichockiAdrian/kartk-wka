<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Samochód</h3>
    <form action="CarController" method="get">
        <input type="text" name="marka" placeholder="Podaj markę" autofocus value="{{old('marka')}}"></input>
        @error('marka')
        {{$message}}
        @enderror<br>
        <input type="number" name="pojemnosc" placeholder="Podaj pojemność" value="{{old('pojemnosc')}}"></input>
        @error('pojemnosc')
        {{$message}}
        @enderror<br>
        <input type="email" name="email" placeholder="Podaj email" value="{{old('email')}}"></input>
        @error('email')
        {{$message}}
        @enderror<br><br>
        <input type="submit" name="sprawdz"></input>
    </form>
    
    <h3>Błędy:</h3>
    @if($errors->any()) 
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

</body>
</body>
</html>
</body>
</html>
