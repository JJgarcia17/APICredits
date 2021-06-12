@csrf
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Client</label>
        <div class="col-md-6">
            <input id="client_id" type="text" class="form-control @error('client_id') is-invalid @enderror" name="client_id" value="{{ old('date' , $credit->client_id) }}"  autofocus required >

            @error('date')
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
            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description',$credit->description) }}"  autofocus required>

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
            <input id="amount" type="text" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount',$credit->amount) }}"  autofocus required>

            @error('amount')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <button type="submit" class="btn btn-success float-right mt-4">{{$btnAction}}</button>