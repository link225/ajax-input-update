@extends('layouts.app')

@section('content')
    <h2>
        create lieus
    </h2>

    <div class="container">
        {{-- @foreach ($villes as $item)
            {{ $item->nom }}
        @endforeach --}}
        <div class="row">
            <div class="col-md-4">
                <form action="{{ route('ajax.store') }}" method="post">
                    @csrf

                    <div class="form-group" >
                        <label for="ville"></label>
                        <select name="ville" class="form-control" id="ville">
                            @foreach ($villes as $ville)
                                <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="quartier"></label>
                        <select name="quartier" class="form-control" id="quartier">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="precision"></label>
                        <textarea name="precision" id="precision" class='form-control'></textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Validez" class="btn btn-outline-primary">
                    </div>
                </form>    
            </div>
        </div>
    </div>
@endsection