<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Edit User') }}</h1>
        @can('manage users')
        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">User</a></div>
            <div class="breadcrumb-item"><a href="{{ route('user') }}">Edit User</a></div>
        </div>
        @endcan
    </x-slot>
    @can('manage users')
    <div>
        <livewire:create-user action="updateUser" :userId="request()->userId" />
    </div>
    @endcan
</x-app-layout>
