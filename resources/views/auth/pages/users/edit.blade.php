<x-auth-layout page-title="Edit user details">
    <x-front.card card-header="">
        <x-front.form form-action="{{ route('users.update', $data->id) }}">
            @method('PUT')
            <x-auth.input-field type="text" name="name" id="name" place="" val="{{ $data?->name }}"
                required="true" label="User Name" />
            <x-auth.input-field type="text" name="email" id="email" place="" val="{{ $data?->email }}"
                required="true" label="Email" />
            <x-auth.input-field type="password" name="password" id="password" place="" val=""
                required="false" label="Password" />
            <x-auth.input-button btn-class="" btn-value="Update" btn-type="submit" />
        </x-front.form>
    </x-front.card>
</x-auth-layout>
