{{-- <input type="text" name="nombre" class="form-control mb-4" placeholder="Nombre" value="{{$profesor->name}}" required> --}}
@switch($parametro->parametro)
    @case('Invitación Plan Académico')
        <textarea class="form-control" id="valor" name="editor" cols="80" rows="10">{{$parametro->valor}}</textarea>
        <input type="hidden" name="opcion" value=2">
        @break
    @case('Nuestra Misión - Página Nosotros')
        <textarea class="form-control" id="valor" name="editor" cols="80" rows="10">{{$parametro->valor}}</textarea>
        <input type="hidden" name="opcion" value="2">
        @break
    @case('Nuestra Visión - página Nosotros')
        <textarea class="form-control" id="valor" name="editor" cols="80" rows="10">{{$parametro->valor}}</textarea>
        <input type="hidden" name="opcion" value="2">
        @break
    @case('Parrafo 2 - Página Nosotros')
        <textarea class="form-control" id="valor" name="editor" cols="80" rows="10">{{$parametro->valor}}</textarea>
        <input type="hidden" name="opcion" value="2">
        @break
    @case('Plan académico - Descripción')
        <textarea class="form-control" id="valor" name="editor" cols="80" rows="10">{{$parametro->valor}}</textarea>
        <input type="hidden" name="opcion" value="2">
        @break
    @case('Plan académico - Nuestro proyecto educativo')
        <textarea class="form-control" id="valor" name="editor" cols="80" rows="10">{{$parametro->valor}}</textarea>
        <input type="hidden" name="opcion" value="2">
        @break
    @case('Plan académico - Soporte Educacional')
        <textarea class="form-control" id="valor" name="editor" cols="80" rows="10">{{$parametro->valor}}</textarea>
        <input type="hidden" name="opcion" value="2">
        @break
    @case('Plan académico - Supcripción Mensual')
        <textarea class="form-control" id="valor" name="editor" cols="80" rows="10">{{$parametro->valor}}</textarea>
        <input type="hidden" name="opcion" value="2">
        @break
    @case('Quienes Somos - Página Nosotros')
        <textarea class="form-control" id="valor" name="editor" cols="80" rows="10">{{$parametro->valor}}</textarea>
        <input type="hidden" name="opcion" value="2">
        @break
    @case('Sobre Nosotros - Pie de página')
        <textarea class="form-control" id="valor" name="editor" cols="80" rows="10">{{$parametro->valor}}</textarea>
        <input type="hidden" name="opcion" value="2">
        @break
    @default
        <textarea class="form-control" id="valor" name="valor" rows="3">{{$parametro->valor}}</textarea>
        <input type="hidden" name="opcion" value="1">
@endswitch

<input type="hidden" name="idParametro" value="{{$parametro->id}}">
<input type="hidden" name="indexTr" value="{{$indexTr}}">
<script>
    ClassicEditor
        .create( document.querySelector( 'textarea[name="editor"]' ))
        .then( editor => {
                console.log( editor );
        } )
        .catch( error => {
                console.error( error );
        } );
</script>