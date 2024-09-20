@extends('layout.admin')

@section('content')
<div class="container py-4">
    <div class="row">
        <!-- Przykładowe sekcje dla administratora -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Panel Administracyjny</div>
                <div class="card-body">
                    <h5>Witaj, administratorze {{ Auth::user()->name }}!</h5>
                    <p>Wybierz opcję do zarządzania:</p>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Zarządzaj Użytkownikami</a>
                    <a href="{{ route('admin.orders.index') }}" class="btn btn-primary">Zarządzaj Zamówieniami</a>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-primary">Zarządzaj Produktami</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
