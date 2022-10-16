@extends('layout.app', ['pageSlug' => 'position', 'page' => 'Positions', 'section' => ''])

@section('content')
  <div class="page-title-container">
    <div class="row">
      <div class="col-12 col-sm-6">
        <h1 class="mb-0 pb-0 display-4">Positions</h1>
      </div>
      <div class="col-12 col-sm-6 d-flex align-items-start justify-content-end">
        <!-- Tour Button Start -->
        <a type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#createPositions">Register
          Positions</a>
        {{-- <a href="{{ route('client-create') }}" type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#expensesRegister">Register Sale</a> --}}
        <!-- Tour Button End -->
      </div>
    </div>
  </div>
  @include('alerts.success')
  <div class="card mb-5">
    <div class="card-body">

      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">National</th>
            <th scope="col">State</th>
            <th scope="col">LGA</th>
            <th scope="col">Active</th>
            <th scope="col"></th>

          </tr>
        </thead>
        <tbody>
            @forelse ($positions as $position)
            <tr>
              <th scope="row">{{ $position->id }}</th>
              <td>{{ $position->name }}</td>
                <td>
                    @if ($position->states_id === NULL)
                        Yes
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
                    @if (isset($position->local_govs_id))
                        <span>Yes | {{ $position->local_gov->name }}</span>
                    @else
                        No
                    @endif
                </td>
                <td>
                    @if ($position->is_active === 1)
                        <form action="{{ route('position.active', $position->id) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-success">Active</button>

                        </form>
                    @else
                        <form action="{{ route('position.active', $position->id) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger">Inactive</button>

                        </form>
                    @endif
                </td>
              <td>
                <div class="d-flex align-items-center justify-content-end">
                  <a href="{{ route('positions.show', $position->id) }}" type="button"
                    class="btn btn-sm btn-icon btn-icon-start btn-outline-info ms-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20"
                      fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round" class="acorn-icons acorn-icons-glasses undefined">
                      <circle cx="5.5" cy="6.5" r="3.5"></circle>
                      <circle cx="14.5" cy="6.5" r="3.5"></circle>
                      <path
                        d="M11 6 9 6M2 6 2.89031 14.9031C2.95859 15.586 3.37218 16.1861 3.98596 16.493L5 17M18 6 17.1097 14.9031C17.0414 15.586 16.6278 16.1861 16.014 16.493L15 17">
                      </path>
                    </svg>
                    <span class="d-none d-xxl-inline-block">View</span>
                  </a>
                  <button data-bs-toggle="modal" data-bs-target="#editPosition{{ $position->id }}"
                    class="btn btn-sm btn-icon btn-icon-start btn-outline-info ms-1" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20"
                      fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round" class="acorn-icons acorn-icons-edit-square undefined">
                      <path
                        d="M11 2L5.5 2C4.09554 2 3.39331 2 2.88886 2.33706C2.67048 2.48298 2.48298 2.67048 2.33706 2.88886C2 3.39331 2 4.09554 2 5.5L2 14.5C2 15.9045 2 16.6067 2.33706 17.1111C2.48298 17.3295 2.67048 17.517 2.88886 17.6629C3.39331 18 4.09554 18 5.5 18L14.5 18C15.9045 18 16.6067 18 17.1111 17.6629C17.3295 17.517 17.517 17.3295 17.6629 17.1111C18 16.6067 18 15.9045 18 14.5L18 11">
                      </path>
                      <path
                        d="M15.4978 3.06224C15.7795 2.78052 16.1616 2.62225 16.56 2.62225C16.9585 2.62225 17.3405 2.78052 17.6223 3.06224C17.904 3.34396 18.0623 3.72605 18.0623 4.12446C18.0623 4.52288 17.904 4.90497 17.6223 5.18669L10.8949 11.9141L8.06226 12.6223L8.7704 9.78966L15.4978 3.06224Z">
                      </path>
                    </svg>
                    <span class="d-none d-xxl-inline-block">Edit</span>
                  </button>
                  @include('positions.modal.edit')
                  <a href="#" data-bs-toggle="modal" data-bs-target="#deletePosition{{ $position->id }}"
                    class="btn btn-sm btn-icon btn-icon-start btn-outline-danger ms-1" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20"
                      fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round" class="acorn-icons acorn-icons-bin undefined">
                      <path
                        d="M4 5V14.5C4 15.9045 4 16.6067 4.33706 17.1111C4.48298 17.3295 4.67048 17.517 4.88886 17.6629C5.39331 18 6.09554 18 7.5 18H12.5C13.9045 18 14.6067 18 15.1111 17.6629C15.3295 17.517 15.517 17.3295 15.6629 17.1111C16 16.6067 16 15.9045 16 14.5V5">
                      </path>
                      <path
                        d="M14 5L13.9424 4.74074C13.6934 3.62043 13.569 3.06028 13.225 2.67266C13.0751 2.50368 12.8977 2.36133 12.7002 2.25164C12.2472 2 11.6734 2 10.5257 2L9.47427 2C8.32663 2 7.75281 2 7.29981 2.25164C7.10234 2.36133 6.92488 2.50368 6.77496 2.67266C6.43105 3.06028 6.30657 3.62044 6.05761 4.74074L6 5">
                      </path>
                      <path d="M2 5H18M12 9V13M8 9V13"></path>
                    </svg>
                    <span class="d-none d-xxl-inline-block">Delete</span>
                  </a>
                    @include('positions.modal.delete')
                </div>
              </td>
            </tr>
            @empty
            <th>
                <th scope="row" colspan="6" class="text-center">
                    <div class="text-warning text-center" >No position found.</div>
                </th>
            </th>

            @endforelse
        </tbody>
      </table>
    </div>
    <div class="card-footer py-4">
        <nav class="d-flex justify-content-end" aria-label="...">
            {{ $positions->links() }}
        </nav>
    </div>
  </div>
@include('positions.modal.create')
@endsection
