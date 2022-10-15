@extends('layout.app', ['pageSlug' => 'dashboard', 'page' => 'Dashboard', 'section' => ''])


@section('content')

<div class="row mb-3">
    <div class="col-12">
        <div class="card-header ">
            <div class="row">
                <div class="col-sm-6 text-left">
                    <h2 class="card-title">Welcome {{ ($role === 'admin') ? 'Admin' : 'Voter'; }}, Click the Button Below to Vote</h2>
                </div>
            </div>
        </div>

    </div>

</div>
{{-- 
@role('Admin Manager')
   

@endrole --}}
@endsection

