<x-auth-layout page-title="Dashboard">
    @hasrole('admin')
        Admin
    @endhasrole

    @hasrole('user')
        user dashboard
    @endhasrole
</x-auth-layout>
