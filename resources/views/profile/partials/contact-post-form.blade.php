{{-- <section>
    <header>
        <h2 class="text-lg font-medium text-grey-900 dark:text-grey-100">
            {{__('Contact Information')}}
        </h2>

        <p class="mt-1 text-sm text-grey-600 dark:text-gray-400">
            {{__("Add your contact information")}}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{route('verification.send')}}">
        @csrf
    </form>

    <form method="post" action="{{route('profile.post')}}" class="mt-6 space-y-6">
        @csrf
        @method('post')

      <div>
            <x-input-label for="contact" :value="__('Contact')" />
            <x-text-input id="contact" name="contactno" type="text" class="mt-1 block w-full" :value="old('contactno', $user->contactno)" required  autocomplete="contactno" />
            <x-input-error class="mt-2" :messages="$errors->get('contactno')" />
        </div>

        div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
    </form>
</section> --}}
