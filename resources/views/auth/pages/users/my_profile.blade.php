<x-auth-layout page-title="Edit my profile">
    <x-front.card card-header="">
        <x-front.form form-action="{{ route('updatemyprofile') }}">
            @method('PUT')
            <x-auth.input-field type="text" name="first_name" id="first_name" place=""
                val="{{ $data?->first_name }}" required="true" label="User Name" />

            <x-auth.input-field type="text" name="last_name" id="last_name" place=""
                val="{{ $data?->last_name }}" required="true" label="User Name" />

            <x-auth.input-field type="text" name="email" id="email" place="" val="{{ $data?->email }}"
                required="true" label="Email" extra-attributes="readonly" />

            <x-auth.input-button btn-class="mt-3" btn-value="Update" btn-type="submit" />
        </x-front.form>
    </x-front.card>
</x-auth-layout>
