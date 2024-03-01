<x-front-layout page-title="{{ __('Reset Password') }}">
    <h1>
        Reset Password
    </h1>

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <x-front.form form-action="{{ route('password.update') }}">
                <input type="hidden" name="token" value="{{ $token }}">
                <input type="hidden" name="email" value="{{ $email ?? old('email') }}">

                <x-front.input-field type="password" name="password" id="password" place="**************"
                    val="" required="true" label="Password" />

                <x-front.input-field type="password" name="password_confirmation" id="password_confirmation"
                    place="**************" val="" required="true" label="password confirmation" />

                <x-front.input-button btn-class="btn btn-danger btn-small" btn-value="Reset My Password"
                    btn-type="submit" />
            </x-front.form>
        </div>
    </div>
</x-front-layout>
