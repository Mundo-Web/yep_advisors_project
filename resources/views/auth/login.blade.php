<x-authentication-layout>
  <h1 class="text-3xl text-slate-800 dark:text-slate-100 font-bold mb-6">{{ __('Hola de vuelta!') }} ✨</h1>
  @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
      {{ session('status') }}
    </div>
  @endif
  <!-- Form -->
  <form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="space-y-4">
      <div>
        <x-label for="email" value="{{ __('Correo') }}" />
        <x-input id="email" type="email" name="email" :value="old('email')" required autofocus />
      </div>
      <div>
        <x-label for="password" value="{{ __('Contraseña') }}" />
        <x-input id="password" type="password" name="password" required autocomplete="current-password" />
      </div>
    </div>
    <div class="flex items-center justify-between mt-6">

      <x-button class="ml-3">
        {{ __('Ingresar') }}
      </x-button>
    </div>
  </form>
  <x-validation-errors class="mt-4" />
  <!-- Footer -->
  <div class="pt-5 mt-6 border-t border-slate-200 dark:border-slate-700">

    <!-- Warning -->
    <!--
        <div class="mt-5">
            <div class="bg-amber-100 dark:bg-amber-400/30 text-amber-600 dark:text-amber-400 px-3 py-2 rounded">
                <svg class="inline w-3 h-3 shrink-0 fill-current" viewBox="0 0 12 12">
                    <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                </svg>
                <span class="text-sm">
                    Para brindarle asistencia durante la pandemia, las funciones súper profesionales son gratuitas hasta el 31 de marzo.
                </span>
            </div>
        </div>
        -->
  </div>
</x-authentication-layout>
