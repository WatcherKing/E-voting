<div class="modal modal-right large fade" id="createPositions" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Register New Positions</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('position.store') }}" method="POST">
          @csrf
          <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
            <div class="form-floating mb-3">
              <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                placeholder="Name" required>
              <label>Name</label>
            </div>
            @include('alerts.feedback', ['field' => 'name'])
          </div>
          <div class="form-group mb-3" {{ $errors->has('states_id') ? ' has-danger' : '' }}>
            <label class="form-label">State</label>

            <select class="form-states{{ $errors->has('states_id') ? ' is-invalid' : '' }}" name="states_id"
              >
              <option value="" selected>Select State</option>
               @foreach ($states as $state)
                  <option value="{{ $state['id'] }}">{{ $state['name'] }}</option>
              @endforeach
            </select>
            @include('alerts.feedback', ['field' => 'states_id'])
          </div>
          <div class="form-group mb-3" {{ $errors->has('local_govs_id') ? ' has-danger' : '' }}>
            <label class="form-label">LGAs</label>
            <select class="form-selected{{ $errors->has('local_govs_id') ? ' is-invalid' : '' }}" name="local_govs_id">
            </select>
            @include('alerts.feedback', ['field' => 'local_govs_id'])
          </div>

          <button type="submit" class="btn btn-lg btn-primary">Register</button>

        </form>
      </div>
    </div>
  </div>
</div>
@push('js')
  <script>
    new SlimSelect({
      select: '.form-states'

    })
    const lga = new SlimSelect({
      select: '.form-selected'
    })
    $('.form-states').change(function () {
        let stateID = $(this).val();
        // console.log(stateID);

        if (stateID) {
            let urls = '{{ route('local-govs', ':id') }}';
            urls = urls.replace(':id', stateID);
            console.log(urls);
          $.ajax({
            type: 'GET',
            url: urls,
            dataType: 'json',
            success: function (response) {
                let len = response.length;
                let localGovs = [{text: 'Select LGA', selected: true}];
                let local_govs = response.map((localGov) => {
                    return {
                        text: localGov.name,
                        value: localGov.id
                    }
                })
                localGovs = localGovs.concat(local_govs);
                lga.setData(localGovs);
            }
          });
        }
      });

  </script>
@endpush
