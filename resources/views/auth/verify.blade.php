<x-front-layout page-title="{{ __('Verify Your Email Address') }}">

    <h1>
        {{ __('Verify Your Email Address') }}
    </h1>

    <div class="row">
        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
        @endif

        {{ __('Before proceeding, please check your email for a verification link.') }}
        {{ __('If you did not receive the email') }},

        <x-front.form form-action="{{ route('verification.resend') }}">
            <div class="col-md-3 pull-left" style="margin-top: 20px">
                <x-front.input-button btn-class="" btn-value="{{ __('click here to request another') }}"
                    btn-type="submit" />
            </div>
        </x-front.form>
    </div>
</x-front-layout>
