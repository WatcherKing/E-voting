@extends('layout.app', ['pageSlug' => 'position_view', 'page' => 'Position | View', 'section' => ''])

@section('content')
  <div class="page-title-container">
    <div class="row">
      <!-- Title Start -->
      <div class="col-12 col-md-7">
        <h1 class="mb-0 pb-0 display-4" id="title">Position Information</h1>
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
              <th scope="col">Contestants</th>
              <th scope="col">LGAs</th>
              <th scope="col">State</th>
              <th scope="col">National</th>
              <th scope="col">Active</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">{{ $position->id }}</th>
              <td>{{ $position->name }}</td>
              <td>
                {{ $position->contestants->count() }}
              </td>
              <td>
                @if (isset($position->local_govs_id))
                        <span>Yes | {{ $position->local_gov->name }}</span>
                    @else
                        No
                    @endif
              </td>
              <td>
                @if ($position->states_id !== NULL)
                        Yes | {{ $position->state->name }}
                    @else
                        No
                    @endif
              </td>
              <td>
                @if ($position->states_id === NULL)
                        Yes
                    @else
                        No
                    @endif
              </td>
              <td>@if ($position->is_active === 1)
                        <form action="{{ route('position.active', $position->id) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-success">Active</button>

                        </form>
                    @else
                        <form action="{{ route('position.active', $position->id) }}" method="post">
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
  <div class="page-title-container">
    <div class="row">
      <!-- Title Start -->
      <div class="col-12 col-md-7">
        <h1 class="mb-0 pb-0 display-4" id="title">Contestants: {{ $position->contestants->count() }}</h1>
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
              <th scope="col">Party</th>
              <th scope="col">Name</th>
              <th scope="col">Contestant No</th>
              <th scope="col">Age</th>
              <th scope="col">Votes</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($position->contestants as $contestant)
              <tr>
                <th scope="row">{{ $contestant->id }}</th>
                <td>
                    {{ $contestant->party }}
                </td>
                <td>{{ $contestant->name }}</td>
                <td>{{ decrypt($contestant->contestant_no) }}</td>
                <td>{{ $contestant->age }}</td>
                <td>
                    {{ $contestant->votes->count() }}
                </td>
              </tr>
            @empty
              <th colspan="6" class="text-center">
                <span class="text-warning"> No Data Available</span>
              </th>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
