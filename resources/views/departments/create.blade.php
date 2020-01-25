@extends('layouts.app')

@section('title')
    Добавление департамента
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Добавление департамента</h4>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5>Форма добавления ...</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
