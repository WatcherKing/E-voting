@extends('layout.app', ['pageSlug' => 'voter_view', 'page' => 'Voter | View', 'section' => ''])

@section('content')
  <div class="page-title-container">
    <div class="row">
      <!-- Title Start -->
      <div class="col-12 col-md-7">
        <h1 class="mb-0 pb-0 display-4" id="title">Voter's Information</h1>
      </div>
      <!-- Title End -->

    </div>
  </div>
  <div class="row">
    <div class="col-md-9 col-12 mx-auto">
      <div class="card mb-2">
        <div class="card-body">
          <div class="row sw-12 position-relative mb-3 mx-auto">
            <img class="img-fluid rounded-xl" alt="profile" src="{{ asset('temp/img/user.png') }}" />

          </div>
          <hr>
          <h4 class="mb-2">Basic Info</h4>
          <div class="row mb-3">
            <div class="col-4">
              <h5 class="card-title">Name</h5>
              <p class="card-text">
                {{ decrypt($voter->name) }}
              </p>
            </div>
            <div class="col-4">
              <h5 class="card-title">Phone Number</h5>
              <p class="card-text">
                {{ decrypt($voter->phone) }}
              </p>
            </div>
            <div class="col-4">
              <h5 class="card-title">Date Of Birth</h5>
              <p class="card-text">
                {{ decrypt($voter->dob) }}
              </p>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-4">
              <h5 class="card-title">Age</h5>
              <p class="card-text">
                {{ decrypt($voter->age) }}
              </p>
            </div>
            <div class="col-4">
              <h5 class="card-title">Gender</h5>
              <p class="card-text">
                {{ decrypt($voter->gender) }}
              </p>
            </div>
            <div class="col-4">
              <h5 class="card-title">Address</h5>
              <p class="card-text">
                {{ $voter->address }}
              </p>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-4">
              <h5 class="card-title">State</h5>
              <p class="card-text">
                {{ $voter->state->name }}
              </p>
            </div>
            <div class="col-4">
              <h5 class="card-title">LGA</h5>
              <p class="card-text">
                {{ $voter->local_gov->name }}
              </p>
            </div>
          </div>
            <hr>
            <h4 class="mb-2">Voting Info</h4>
            <div class="row">
                <div class="col-4">
                    <h5 class="card-title">VIN</h5>
                    <p class="card-text">
                        {{ decrypt($voter->vin) }}
                    </p>
                </div>
                <div class="col-4">
                    <h5 class="card-title">Voter Code</h5>
                    <p class="card-text">
                        {{ decrypt($voter->voter_code) }}
                    </p>
                </div>
                <div class="col-4">
                    <h5 class="card-title">Voter Status</h5>
                    <p class="card-text">
                        @if ($voter->is_active == 1)
                            <span class="text-success">Can Vote</span>

                        @else
                            <span class="text-warning">Can't Vote</span>
                        @endif
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
