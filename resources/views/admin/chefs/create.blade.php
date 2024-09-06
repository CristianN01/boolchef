@extends('layouts.admin')

@section('content')
<div class="container">
    <!--Inzio del FORM-->
    <form class="d-flex justify-content-center flex-column" action="{{ route('admin.chefs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="address">
            <strong>
                Indirizzo
            </strong>
        </label>
        <input type="text" value="Address" name="address" class="form-control mb-3">

        <label for="telephone">
            <strong>
                Numero di telefono
            </strong>
        </label>
        <input type="text" value="Telephone" name="telephone" class="form-control mb-3">

        <label for="descriprion_of_dishes">
            <strong>
                Descrizione dei piatti
            </strong>
        </label>
        <textarea class="form-control mb-3" placeholder="Descriprion of dishes" value="descriprion_of_dishes" name="descriprion_of_dishes">
        </textarea>

        <!--Select della visibilità-->
        <label for="visibility">
            <strong>
                Seleziona visibilità
            </strong>
        </label>
        <select class="form-select mb-3" aria-label="Default select example" name="visibility" id="visibility">
            <option value="0">
                Not visible
            </option>
            <option value="1">
                Visible
            </option>
        </select>

        <!--Checkbox-->
        <label for="specializations">
            <strong>
                Seleziona la specializzazione
            </strong>
        </label>
        @foreach ($specializations as $specialization)
        <input type="checkbox" name="specializations[]" value="{{ $specialization->id }}"
        id="specialization-check-{{ $specialization->id }}" autocomplete="off">
        <label class="mb-2" for="specialization-check-{{ $specialization->name }}">
            {{ $specialization->name }}
        </label>
        @endforeach

        <!--Button submit-->
        <div class="mt-4">
            <input type="submit" class="btn btn-info">
        </div>
    </form>

</div>
@endsection
