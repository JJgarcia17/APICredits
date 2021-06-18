@csrf
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Name Client</label>
        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autofocus required pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$"
            title="Este Campo Solo Acepta Letras y Espacios En Blanco">
            <small><p><strong>Ejemplo: </strong> Pedro Perez</p>
            </small>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <button type="submit" class="btn btn-success float-right mt-4">{{$btnAction}}</button>