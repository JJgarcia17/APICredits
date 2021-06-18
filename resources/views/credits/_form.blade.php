@csrf
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Client</label>
        <div class="col-md-6">
            <input id="client_id" type="text" class="form-control @error('client_id') is-invalid @enderror" name="client_id" value="{{ old('client_id' , $credit->client_id) }}"  autofocus required pattern="^[0-9]+$"
            title="Este campo solo acepta numeros entre 0-9">
            <small><p>Los ID valido deben ser numericos <strong>Ejemplo</strong>('1')</p>
            </small>

            @error('client_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Date</label>
        <div class="col-md-6">
            <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date' , $credit->date) }}"  autofocus required>
            <small><p><strong>Ejemplo</strong>('17/06/2021')</p>
            </small>
            @error('date')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Description</label>
        <div class="col-md-6">
            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description',$credit->description) }}"  autofocus required pattern="^.{1,255}$">
            <small><p>La descripción debe terner de 1 a 255 caracteres</p>
            </small>

            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Amount</label>
        <div class="col-md-6">
            <input id="amount" type="text" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount',$credit->amount) }}"  autofocus required pattern="^-?\d{1,9}(\.\d{1,2})?$">
            <small><p>Este campo es solo numero negativos o positivosy solo 2 decimales<strong>Ejemplo</strong>('8000')</p>
            </small>

            @error('amount')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <button type="submit" class="btn btn-success float-right mt-4">{{$btnAction}}</button>