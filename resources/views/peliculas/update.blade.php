
<form method="post" action="{{ route('update.peliculas',  ["peliculas" => $pelicula->id])}}" >

    @csrf
    <input type="text" name="nombre" value="{{ $pelicula->nombre }}">
    <textarea name="descripcion " id="" cols="30" rows="10">{{ $pelicula->descripcion }}</textarea>

    <input type="submit" value="enviar">
</form>
