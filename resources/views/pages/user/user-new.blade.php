<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Buat User Baru') }}</h1>
        @can('manage users')
        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">User</a></div>
            <div class="breadcrumb-item"><a href="{{ route('user') }}">Buat User Baru</a></div>
        </div>
        @endcan
    </x-slot>

    @can('manage users')
    <div>
        <livewire:create-user action="createUser" />
    </div>
    @endcan

</x-app-layout>
