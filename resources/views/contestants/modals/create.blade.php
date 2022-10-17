<div class="modal modal-right large fade" id="createContestants" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Register New Contestants</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('contestant.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
            <div class="form-floating mb-3">
              <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                placeholder="Name" required>
              <label>Name</label>
            </div>
            @include('alerts.feedback', ['field' => 'name'])
          </div>
          <div class="form-group{{ $errors->has('age') ? ' has-danger' : '' }}">
            <div class="form-floating mb-3">
              <input type="number" class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}" name="age"
                placeholder="Age" required>
              <label>Age</label>
            </div>
            @include('alerts.feedback', ['field' => 'age'])
          </div>
          <div class="form-group input-group mb-3{{ $errors->has('image') ? ' has-danger' : '' }}">
            <label class="input-group-text" for="inputGroupFile01">Upload Passport</label>
            <input type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}"
              id="inputGroupFile01" name="image">
            @include('alerts.feedback', ['field' => 'image'])
          </div>
          <div class="form-group{{ $errors->has('party') ? ' has-danger' : '' }}">
            <div class="form-floating mb-3">
              <input type="text" class="form-control{{ $errors->has('party') ? ' is-invalid' : '' }}" name="party"
                placeholder="Party" required>
              <label>Party</label>
            </div>
            @include('alerts.feedback', ['field' => 'party'])
          </div>
          <div class="form-group mb-3" {{ $errors->has('state_id') ? ' has-danger' : '' }}>
            <label class="form-label">State</label>

            <select class="form-states{{ $errors->has('state_id') ? ' is-invalid' : '' }}" name="state_id">
              <option value="" selected>Select State</option>
              @foreach ($states as $state)
                <option value="{{ $state['id'] }}">{{ $state['name'] }}</option>
              @endforeach
            </select>
            @include('alerts.feedback', ['field' => 'state_id'])
          </div>
          <div class="form-group mb-3" {{ $errors->has('local_gov_id') ? ' has-danger' : '' }}>
            <label class="form-label">LGAs</label>
            <select class="form-selected{{ $errors->has('local_gov_id') ? ' is-invalid' : '' }}" name="local_gov_id">
            </select>
            @include('alerts.feedback', ['field' => 'local_gov_id'])
          </div>
          <div class="form-group mb-3" {{ $errors->has('position_id') ? ' has-danger' : '' }}>
            <label class="form-label">Position</label>

            <select class="form-position{{ $errors->has('position_id') ? ' is-invalid' : '' }}" name="position_id">
              <option value="" selected>Select Position</option>
              @foreach ($positions as $position)
                <option value="{{ $position['id'] }}">{{ $position['name'] }}</option>
              @endforeach
            </select>
            @include('alerts.feedback', ['field' => 'position_id'])
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
    new SlimSelect({
      select: '.form-position'

    })
    const lga = new SlimSelect({
      select: '.form-selected'
    })
    $('.form-states').change(function() {
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
          success: function(response) {
            let len = response.length;
            let localGovs = [{
              text: 'Select LGA',
              selected: true
            }];
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
