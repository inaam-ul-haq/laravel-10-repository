<x-auth-layout page-title="Users detail">
    <x-front.card card-header="">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>User Name</th>
                    <td>{{ $data?->name }}</td>
                </tr>
                <tr>
                    <th>User Email</th>
                    <td>{{ $data?->email }}</td>
                </tr>
                <tr>
                    <th>Total Order</th>
                    <td>{{ $data?->order_count }}</td>

                </tr>

            </tbody>
        </table>
    </x-front.card>

</x-auth-layout>
