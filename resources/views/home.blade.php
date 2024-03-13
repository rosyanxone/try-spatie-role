@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Hi, ini halaman User!') }}

                    {{-- @role('admin')
                        <div>
                            Hai, role Admin!
                        </div>
                    @endrole

                    @can('product-list')
                        <div>
                            User punya permission List Product
                        </div>
                    @endcan --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
