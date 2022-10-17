@extends('layout.app', ['pageSlug' => 'contestant_view', 'page' => 'Contestant | View', 'section' => ''])

@section('content')
  <div class="page-title-container">
    <div class="row">
      <!-- Title Start -->
      <div class="col-12 col-md-7">
        <h1 class="mb-0 pb-0 display-4" id="title">Contestant's Information</h1>
      </div>
      <!-- Title End -->

    </div>
  </div>
  <div class="col-12 mb-5">
    <div class="card mb-5">
      <div class="card-body">

        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Position</th>
              <th scope="col">Contestant No</th>
              <th scope="col">State</th>
              <th scope="col">LGAs</th>
              <th scope="col">Party</th>
              <th scope="col">Votes</th>
              <th scope="col">Active</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">{{ $contestant->id }}</th>
              <td>{{ $contestant->name }}</td>
              <td>
                {{ $contestant->position->name }}
              </td>
                <td>
                    {{ decrypt($contestant->contestant_no) }}
                </td>
              <td>
                {{ $contestant->state->name }}
              </td>
              <td>
                {{ $contestant->local_gov->name }}
              </td>
              <td>
                {{ $contestant->party }}
              </td>
                <td>
                    {{ $contestant->votes->count() }}
                </td>
              <td>@if ($contestant->is_active === 1)
                        <form action="{{ route('contestant.active', $contestant->id) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-success">Active</button>

                        </form>
                    @else
                        <form action="{{ route('contestant.active', $contestant->id) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger">Inactive</button>

                        </form>
                    @endif</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
