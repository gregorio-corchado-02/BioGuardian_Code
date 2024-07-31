<div class="modal fade" id="editar{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class='px-5 py-3' method="POST" action="/editarpubli/{{ $item->id }}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Usuario</label>
                            <input type="text" name="eusuario" class="form-control" value="{{($item->usuario)}}" >
                            <p class="fw-bolder">{{ $errors->first('eusuario')}}</p>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre</label>
                            <input type="text" name="enombre" class="form-control" value="{{($item->nombre)}}" >
                            <p class="fw-bolder">{{ $errors->first('enombre')}}</p>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Correo</label>
                            <input type="text" name="ecorreo" class="form-control" value="{{($item->correo)}}" >
                            <p class="fw-bolder">{{ $errors->first('ecorreo')}}</p>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Fecha de Nacimiento</label>
                            <input type="text" name="efecha" class="form-control" value="{{($item->nacimiento)}}" >
                            <p class="fw-bolder">{{ $errors->first('efecha')}}</p>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">contraseña</label>
                            <input type="text" name="econtrasena" class="form-control" value="{{($item->contrasena)}}" >
                            <p class="fw-bolder">{{ $errors->first('econtrasena')}}</p>
                        </div>

                        <div class="mb-3">
                            <label for="efoto_perfil" class="form-label">Seleccionar foto</label>
                            <input type="file" name="efoto_perfil" id="efoto_perfil" class="form-control @error('foto') is-invalid @enderror">
                            @error('foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
            </div>

            <div class="modal-footer">
                        <div class="card-footer text-body-secondary">
                            <div class="d-grid mx-auto">
                                <button class="btn btn-outline-success" type="submit">Guardar</button>
                            </div>
                        </div>
            </div>
                    
                </form> 
                
            </div>
        </div>
    </div>
</div>