<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#create_client">
    <i class="bi bi-person-plus-fill"></i>
</button>
  
  <!-- Modal -->
  <div class="modal fade" id="create_client" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Create Client</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route("save_client")}}" method="POST" autocomplete="on" id="">
                @include('client._form',[
                  'btnAction' => 'Save'
                ])
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>