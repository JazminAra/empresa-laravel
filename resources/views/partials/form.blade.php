@csrf
<tr>
  <td colspan="4">
    <div class="custom-file" style="display: flex; align-items: center;">
      <input type="file" name="image" class="custom-file-input" id="customFile" style="flex: 0.1;">
      <label class="custom-file-label" for="customFile">Seleccione archivo</label>
    </div>
  </td>
</tr>
<tr>
<th>Categoria</th>
<td>
    <select name="category_id" id="category_id">
        <option value="">Seleccione</option>
        @foreach($categories as $id => $name)
            <option value="{{ $id }}"
                @if($id == old('category_id', $persona->category_id)) selected @endif
            >{{ $name }}</option>
        @endforeach
    </select>
</td>
</tr>
<table class="table" style="font-size: 0.8em; background-color: white; width: 30%">
    <tr>
        <th>Apellido</th>
        <td><input type="text" name="cPerApellido" value="{{ old('cPerApellido',$persona->cPerApellido) }}"></td>
    </tr>
    <tr>
        <th>Nombre</th>
        <td><input type="text" name="cPerNombre" value="{{ old('cPerNombre',$persona->cPerNombre) }}"></td>
    </tr>
    <tr>
        <th>Dirección</th>
        <td><input type="text" name="cPerDireccion" value="{{ old('cPerDireccion',$persona->cPerDireccion) }}"></td>
    </tr>
    <tr>
        <th>Fecha de nacimiento</th>
        <td><input type="date" name="dPerFecNac" value="{{ old('dPerFecNac',$persona->dPerFecNac) }}"></td>
    </tr>
    <tr>
        <th>Edad</th>
        <td><input type="text" name="nPerEdad" value="{{ old('nPerEdad',$persona->nPerEdad) }}"></td>
    </tr>
    <tr>
        <th>Sueldo</th>
        <td><input type="text" name="nPerSueldo" value="{{ old('nPerSueldo',$persona->nPerSueldo) }}"></td>
    </tr>
    <tr>
        <th>Rnd</th>
        <td><input type="text" name="cPerRnd" value="{{ old('cPerRnd',$persona->cPerRnd) }}"></td>
    </tr>
    <tr>
        <th>Estado de Persona</th>
        <td>
            <select name="nPerEstado" >
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center"><button>{{$btnText}}</button>
        </td>
    </tr>
</table>
