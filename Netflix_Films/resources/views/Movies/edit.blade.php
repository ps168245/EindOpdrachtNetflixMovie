<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <title>Edit movie</title>

    <style>
#container
{
    padding: 20px;
    display: grid;
    width: 100%;
    height: 100%;
    grid-template-columns: 1fr;
    grid-template-rows: 0.1fr 0.2fr 1fr 1fr;
    
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
    <a href="/Movies/create" class="button">Create movie</a>
    <a href="/" class="button">Show movie</a>
    <section id="container">
        <header>
            <div class="bg-gray-800 text-gray-50 text-5xl">Edit movie</div>
        </header>
            <br>
            <body>
                <form action="{{route('movies.update')}}" method="POST">
                    @csrf
                    <label for="id">ID</label>
                    <input type="text" id="id" name="id" value="{{ $movieID['id'] }}"  readonly><br><br>
                    <label for="FilmNaam">Film naam:</label>
                    <input type="text" id="FilmNaam" name="FilmNaam" value="{{ $movieID['FilmNaam'] }}" ><br><br>
                    <label for="Genres">Genres:</label>
                    <input type="text" id="Genres" name="Genres" value="{{ $movieID['Genres'] }}" ><br><br>
                    <label for="JaarUitgebracht">Jaar uitgebracht:</label>
                    <input type="text" id="JaarUitgebracht" name="JaarUitgebracht" value="{{ $movieID['JaarUitgebracht'] }}" ><br><br>
                    <input type="Submit" value="Edit movie" >
                </form>

</body>
</html>

