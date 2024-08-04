<x-app-layout>
  <div class="bg-white shadow sm:rounded-lg p-4">
    @include('profile.partials.update-profile-information-form')
  </div>
  <div class="bg-white shadow sm:rounded-lg p-4">
    @include('profile.partials.update-password-form')
  </div>
  <div class="bg-white shadow sm:rounded-lg p-4">
    @include('profile.partials.delete-user-form')
  </div>
</x-app-layout>
