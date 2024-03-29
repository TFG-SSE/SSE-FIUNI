<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Egresado</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form method="POST" action="/egresado" class="eliminarEgresadoForm d-inline needs-validation" novalidate="">
      <div class="modal-body">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="mb-3">
                <input class="form-control" type="text" autocomplete="on" minlength="3" maxlength="30" placeholder="Nombre" name="nombre" required/>
                <div class="invalid-feedback">
                    Campo Requerido.
                </div>
            </div>
            <div class="mb-3">
                <input class="form-control" type="text" autocomplete="on" minlength="3" maxlength="30" placeholder="Apellido" name="apellido" required/>
                <div class="invalid-feedback">
                    Campo Requerido.
                </div>
            </div>
            <div class="mb-3">
                <input class="form-control" type="number" pattern=".{6,10}" min="500000" max="3000000000" autocomplete="on" placeholder="C.I:" name="ci" required/>
                <div class="invalid-feedback">
                    CI invalido, longitud requerida entre 6-10 caracteres.
                </div>
            </div>
            <div class="mb-3">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="carrera_id" required>
                    <option value="">Seleccione Carrera</option>
                    @foreach ($carreras as $carrera)
                        <option value="{{ $carrera->id }}">{{ $carrera->carrera }}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    Campo Requerido.
                </div>
            </div>
            <div class="mb-3">
                <input class="form-control" type="email" autocomplete="on" minlength="7" maxlength="100" placeholder="Correo" name="email" required/>
                <div class="invalid-feedback">
                    Campo Requerido.
                </div>
            </div>
            <div class="row gx-2">
                <div class="mb-3 col-sm-6">
                    <label class="form-label" for="ingreso">Año Ingreso</label>
                    <select class="form-select js-choice" name="ingreso" id="ingreso" size="1" name="organizerSingle" data-options='{"removeItemButton":true,"placeholder":true}'>
                        <option value=""></option>
                        @foreach(range(1996, 2100) as $y)
                        <option value="{{$y}}">{{$y}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 col-sm-6">
                    <label class="form-label" for="egreso">Año Egreso</label>
                    <select class="form-select js-choice" name="egreso" id="egreso" size="1" name="organizerSingle" data-options='{"removeItemButton":true,"placeholder":true}'>
                        <option value=""></option>
                        @foreach(range(1996, 2100) as $y)
                        <option value="{{$y}}">{{$y}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row gx-2">
                <div class="mb-3 col-sm-6">
                    <input class="form-control" type="password" autocomplete="on" minlength="8" placeholder="Contraseña" name="password"/>
                </div>
                <div class="mb-3 col-sm-6">
                    <input class="form-control" type="password" autocomplete="on" minlength="8" placeholder="Confirmar Contraseña" name="password_confirmation"/>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" name="submit" class="btn btn-primary">Guardar</button>
      </div>
    </form>
    </div>
  </div>
</div>
