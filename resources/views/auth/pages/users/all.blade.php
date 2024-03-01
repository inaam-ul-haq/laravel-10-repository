<x-auth-layout page-title="All Users">

    <x-slot name="sideButton">
        <!-- Add user Button -->
        <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">
            Add user
        </a>
    </x-slot>

    <x-front.card card-header="">
        <table id="mytable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Total Order</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data['all'] as $key => $user)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $user?->name }}</td>
                        <td>{{ $user?->email }}</td>
                        <td>{{ $user?->order_count }}</td>

                        <td style="display: flex; justify-content: space-between; align-items: center;">
                            <!-- View Icon -->
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-info btn-sm">
                                Detail
                            </a>

                            <!-- Edit Icon -->
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">
                                Edit
                            </a>

                            <!-- Delete Icon -->
                            <x-front.form form-action="{{ route('users.destroy', $user->id) }}">
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this user?')">
                                    Trash
                                </button>
                            </x-front.form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-front.card>
</x-auth-layout>
