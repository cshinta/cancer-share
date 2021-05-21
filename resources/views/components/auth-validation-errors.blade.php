@props(['errors'])

<style>
    .error-message {
        display: flex;
        flex-direction: column;
        width: 100%;
    }

</style>

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <h5 class="alert-heading"><b>Mohon periksa lagi data yang Anda masukkan!</b></h5>
        <ul class="list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<script>
    $('.alert').alert()

</script>
