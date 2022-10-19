<div class="modal modal-right large fade" id="editVoter{{ $voter->id }}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Voter {{ decrypt($voter->name) }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('voter.update', $voter->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group{{ $errors->has('vin') ? ' has-danger' : '' }}">
            <div class="form-floating mb-3">
              <input type="text" class="form-control{{ $errors->has('vin') ? ' is-invalid' : '' }}" name="vin"
                placeholder="VIN" value="{{ decrypt($voter->vin) }}" required>
              <label>VIN</label>
            </div>
            @include('alerts.feedback', ['field' => 'vin'])
            <div class="form-group{{ $errors->has('voter_code') ? ' has-danger' : '' }}">
            <div class="form-floating mb-3">
              <input type="text" class="form-control{{ $errors->has('voter_code') ? ' is-invalid' : '' }}" name="voter_code"
                placeholder="Voter's Code" value="{{ decrypt($voter->voter_code) }}" required>
              <label>Voter's Code</label>
            </div>
            @include('alerts.feedback', ['field' => 'name'])
          <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
            <div class="form-floating mb-3">
              <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                placeholder="Name" value="{{ decrypt($voter->name) }}" required>
              <label>Name</label>
            </div>
            @include('alerts.feedback', ['field' => 'name'])
          </div>
          {{-- Date of birth --}}
            <div class="form-group{{ $errors->has('dob') ? ' has-danger' : '' }}">
                <div class="form-floating mb-3">
                <input type="date" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob"
                    placeholder="Date of Birth" value="{{ decrypt($voter->dob) }}" required>
                <label>Date of Birth</label>
                </div>
                @include('alerts.feedback', ['field' => 'dob'])
            </div>
          <div class="form-group{{ $errors->has('age') ? ' has-danger' : '' }}">
            <div class="form-floating mb-3">
              <input type="number" class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}" name="age"
                placeholder="Age" value="{{ decrypt($voter->age) }}" required>
              <label>Age</label>
            </div>
            @include('alerts.feedback', ['field' => 'age'])
          </div>
          <div class="form-group input-group mb-3{{ $errors->has('image') ? ' has-danger' : '' }}">
            <label class="input-group-text" for="inputGroupFile01">Upload Passport</label>
            <input type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}"
              id="inputGroupFile01" value="{{ $voter->image }}" name="image">
            @include('alerts.feedback', ['field' => 'image'])
          </div>
          <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
            <div class="form-floating mb-3">
              <input type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone"
                placeholder="Phone Number" value="{{ decrypt($voter->phone) }}" required>
              <label>Phone Number</label>
            </div>
            @include('alerts.feedback', ['field' => 'phone'])
          </div>
          <div class="form-group mb-3" {{ $errors->has('gender') ? ' has-danger' : '' }}>
            <label class="form-label">Gender</label>

            <select class="gender{{ $voter->id }}{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender">
              <option value="" selected>Select Gender</option>
              <option value="M">Male</option>
              <option value="F">Female</option>
              <option value="O">Other</option>
            </select>
            @include('alerts.feedback', ['field' => 'gender'])
          </div>
          <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
            <div class="form-floating mb-3">
              <input type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address"
                placeholder="Home Address" value="{{ $voter->address }}" required>
              <label>Home Address</label>
            </div>
            @include('alerts.feedback', ['field' => 'address'])
          <div class="form-group mb-3" {{ $errors->has('state_id') ? ' has-danger' : '' }}>
            <label class="form-label">State</label>

            <select class="form-states{{ $voter->id }}{{ $errors->has('state_id') ? ' is-invalid' : '' }}" name="state_id">
              <option value="" selected>Select State</option>
              @foreach ($states as $state)
                <option value="{{ $state['id'] }}">{{ $state['name'] }}</option>
              @endforeach
            </select>
            @include('alerts.feedback', ['field' => 'state_id'])
          </div>
          <div class="form-group mb-3" {{ $errors->has('local_gov_id') ? ' has-danger' : '' }}>
            <label class="form-label">LGAs</label>
            <select class="form-selected{{ $voter->id }}{{ $errors->has('local_gov_id') ? ' is-invalid' : '' }}" name="local_gov_id">
            </select>
            @include('alerts.feedback', ['field' => 'local_gov_id'])
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
      select: '.form-states{{ $voter->id }}',

    })
    new SlimSelect({
      select: '.gender{{ $voter->id }}',

    })
    $('.form-states{{ $voter->id }}').change(function() {
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
            new SlimSelect({
              select: '.form-selected{{ $voter->id }}',
              data: localGovs
            })
          }
        });
      }
    });
  </script>
@endpush
