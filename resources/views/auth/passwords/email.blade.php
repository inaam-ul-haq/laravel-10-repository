<x-front-layout page-title="{{ __('Password Forgotten') }}">

    <h1>
        Password Forgotten
    </h1>

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <x-front.form form-action="{{ route('password.email') }}">
                <x-front.input-field type="text" name="email" id="login-email-address" place="Enter your email"
                    val="" required="true" label="Provide your email address" />

                <x-front.input-button btn-class="btn btn-danger btn-small" btn-value="Reset My Password"
                    btn-type="submit" />
            </x-front.form>
        </div>
    </div>
</x-front-layout>
