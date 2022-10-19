<div class="modal modal-right large fade" id="editVote{{ $vote->id }}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Vote for Position: {{ $vote->position->name }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('vote.update', $vote->id) }}" method="POST">
          @csrf
          <div class="form-group mb-3" {{ $errors->has('contestant_id') ? ' has-danger' : '' }}>
            <label class="form-label">Contestants</label>

            <select class="participants{{ $vote->cotestant_id }}{{ $errors->has('contestant_id') ? ' is-invalid' : '' }}" name="contestant_id">
              <option value="" selected>Select Contestant</option>
              @foreach ($vote->position->contestants as $contestant)
                <option value="{{ $contestant['id'] }}">{{ $contestant['name'] }}</option>
              @endforeach
            </select>
            @include('alerts.feedback', ['field' => 'contestant_id'])
          </div>
          <button type="submit" class="btn btn-lg btn-primary">Vote</button>

        </form>
      </div>
    </div>
  </div>
</div>
@push('js')
  <script>
    new SlimSelect({
      select: '.participants{{ $vote->cotestant_id }}'

    })

  </script>
@endpush
