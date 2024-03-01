<x-auth-layout page-title="Create new user">
    <x-front.card card-header="">
        <x-front.form form-action="{{ route('users.store') }}">
            <x-auth.input-field type="text" name="first_name" id="first_name" place="Enter first name" val=""
                required="true" label="First Name" />
            <x-auth.input-field type="text" name="last_name" id="last_name" place="Enter last name" val=""
                required="true" label="Last Name" />
            <x-auth.input-field type="email" name="email" id="email" place="Enter email" val=""
                required="true" label="Email" />

            <x-auth.input-field type="password" name="password" id="password" place="Enter password" val=""
                required="true" label="Password" />

            <x-auth.input-field type="password" name="password_confirmation" id="password_confirmation"
                place="Confirm password" val="" required="true" label="Confirm Password" />

            <x-auth.input-button btn-class="mt-3" btn-value="Add new user" btn-type="submit" />
        </x-front.form>
    </x-front.card>
</x-auth-layout>
