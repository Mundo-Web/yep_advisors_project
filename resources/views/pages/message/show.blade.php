<x-app-layout>
  <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

    <div
      class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
      <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
        <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-3xl">{{ $message->full_name }} <span
            class="mx-4"><i class="fa-solid fa-phone-volume"></i></span>{{ $message->phone }}</h2>
      </header>
      <div class="p-3">

        <div class="p-6">


          <p><span class="font-semibold text-lg">{{ $message->full_name }}</span> </p>
          <p> esta interesado en el servicio de
            {{ $message->source }} ,

            la persona nos conocio a travez de <span
              class="font-semibold text-lg">{{ $message->service_product }}</span>,</p>
          <p> Estoy interesado en que me llame al
            numero <span class="font-semibold text-lg">{{ $message->phone }}</span></p>
          <p>o enviarme un correo a <span class="font-semibold text-lg"><i class="fa-solid fa-at"></i>
              {{ $message->email }}</span></p>


          <p class="my-10">
            {{ $message->message }}
          </p>

          <a href="{{ route('mensajes.index') }}" class="bg-blue-500 px-4 py-2 rounded text-white"><span><i
                class="fa-solid fa-arrow-left mr-2"></i></span> Volver</a>

        </div>
      </div>
    </div>

  </div>



</x-app-layout>
