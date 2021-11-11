<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <title>Index</title>
    <style>
#container
{
    padding: 20px;
    display: grid;
    width: 100%;
    height: 100%;
    grid-template-columns: 1fr;
    grid-template-rows: 1fr 1fr 1fr 1fr;
    
    grid-template-areas: "header"
    "menu"
    "main"
    "footer"
    

}

*{
    margin: 0; /* zet alles links in de hoek */
    padding: 0; /* zet alles links in de hoek */
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
    font-family: Arial, Helvetica, sans-serif;
    
}
body{
    background-color:rgb(72, 90, 114);
}
menu, footer, main, .button{
    background-color: rgb(51, 67, 90);
    color: white;
}
.button{
    font-size: 0.5cm;
}
.buttoncolor{

    color: rgb(185, 37, 37);
}

.buttoncolor2{

color: rgb(199, 136, 53);
}

.buttoncolor3{
    color: rgb(72, 211, 47);   
}
        </style>
</head>
<body>
    <section id="container">
        <header>
            <div class="bg-gray-800 text-gray-50 text-5xl">Netflix Films</div>
        </header>
        <menu>
            <a href="Movies/create" class="button buttoncolor3">Create movie</a>
            {{-- <a href="/Movies" class="button">Show movie</a> --}}
        </menu>
        <main>
            @foreach ($movies as $movie)
            <li><a href="Movies/{{$movie->id}}">{{ $movie->FilmNaam }}
            </a> <button class="buttoncolor"><a href="Movies/{{$movie->id}}/delete"> Delete </a></button>  
            </a> <button class="buttoncolor2"><a href="Movies/{{$movie->id}}/edit"> Edit </a>
            </li>
            {{-- <li><a href="songs/{{$song['id']}}">{{ $song['title'] }}</a></li> --}}
            {{-- <a href={{"delete/" $song['id']}}> delete </a> --}}
        @endforeach
        </main>
        <footer>
            <br>
            <div class="bg-light-blue-600 opacity-50 ...">
            <a class="text-4xl" >Choose a movie!</a>
        </div>

        </footer>
    </section>
    
  


</body>
</html>



    {{-- @foreach ($songs as $song)
        <li><a href="Movies/{{$song->id}}">{{ $song->title }}
        </a> <button><a href="Movies/{{$song->id}}/delete"> Delete </a></button>  
        </a> <button><a href="Movies/{{$song->id}}/edit"> Edit </a>
        </li>
     
    @endforeach --}}


