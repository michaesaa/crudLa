

    <br>
    <label for="Nombre">Nombre</label> 
    <input type="text" name="Nombre" value="{{$empleado->Nombre}}" id="Nombre">
    <br>
    <label for="aPellidoPaterno">apellido Paterno</label>
    <input type="text" name="apellidoPaterno" value="{{$empleado->ApellidoPaterno}}" id="ApellidoPaterno">
    <br>
    <label for="ApellidoMaterno">Apellido Materno</label>
    <input type="text" name="ApellidoMaterno" value="{{$empleado->ApellidoMaterno}}" id="ApellidoMaterno">
    <br>
    <label for="correo">correo</label>
    <input type="text" name="correo" value="{{$empleado->Correo}}" id="Correo" >
    <br>
    <label for="Foto">Foto</label>  
    {{$empleado->Foto}}
    <input type="file" name="Foto" value="" id="Foto">
    <input type="submit" value="Guardar datos">
    <br>
    </form>