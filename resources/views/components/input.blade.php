@props(['titulo', 'tipo', 'rex'])


<label for="">{{ $titulo }}</label>
<input name={{ $rex }} type={{ $tipo }}>
@error($rex)
    <!--p>{{ $message }}</p-->
@enderror()
