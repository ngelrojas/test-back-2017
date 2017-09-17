@if(count($errors) > 0)

    <div class="alert alert-danger">

        <ul>
            <li> {{ $errors }}</li>

        </ul>

    </div>

@endif