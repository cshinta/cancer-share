@props(['errors'])

<style>
    .error-message {
        display: flex;
        flex-direction: column;
        width: 100%;
    }
</style>

@if ($errors->any())
    <div class="error-message" {{ $attributes }}>
        <div class="row m-0">
            <div class="font-medium text-red-600">
                {{ __('Ada sesuatu yang salah.') }}
            </div>
        </div>
        <div class="row m-0">
            <ul class="list-disc list-inside text-sm text-red-600">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    </div>
@endif