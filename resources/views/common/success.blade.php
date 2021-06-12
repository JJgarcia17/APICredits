@if(session('status'))
<div class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
        <strong class="text-dark">{{ session('status') }}</strong>
    </div>
  </div>

@elseif(session('status_success'))
<div class="alert alert-warning d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <div>
        <strong class="text-dark">{{ session('status_success') }}</strong>
    </div>
  </div>

@elseif(session('status_danger'))
<div class="alert alert-danger d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <div>
        <strong class="text-dark">{{ session('status_danger') }}</strong>
    </div>
  </div>
@endif