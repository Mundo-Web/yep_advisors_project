<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="language" content="spanish" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="Nuestros profesionales expertos en Wealth Management y asesoría financiera corporativa te brindarán las mejores estrategias para cumplir tus objetivos." />
  <title>Expertos en asesoría financiera - Yep Advisors</title>
  <link href="./output.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/styles.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="./css/aos.css" />


  {{-- Swipper --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-WBC0L3N3M5"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-WBC0L3N3M5');
  </script>
</head>

<body>
  <div class="bg-[url(./images/img/Imagen.webp)] bg-cover bg-center bg-no-repeat sm:w-full h-full" id="inicio"
    data-aos="fade-down" data-aos-offset="150">
    <div class="navigation z-10">
      <button aria-label="hamburguer" type="button" class="hamburger" id="position" onclick="show()">
        <div id="bar1" class="bar"></div>
        <div id="bar2" class="bar"></div>
        <div id="bar3" class="bar"></div>
      </button>
      <nav class="menu-list">
        <ul>
          <li>
            <a href="#inicio" class="text-white font-inter">Inicio</a>
          </li>
          <li>
            <a href="#nosotros" class="text-white font-inter">Nosotros</a>
          </li>
          <li>
            <a href="#nuestros_servicios" class="text-white font-inter">Nuestros servicios</a>
          </li>
          <li>
            <a href="#form" class="text-white font-inter">Conversemos</a>
          </li>
        </ul>
      </nav>
    </div>
    <header class="pt-11">
      <!-- Navbar  -->
      <div class="flex justify-between items-center w-11/12 mx-auto">
        <div class="px-5">
          <img src="./images/img/Layer_1.webp" alt="logo" class="w-48 h-32" />
        </div>
        <div class="hidden md:block">
          <nav
            class="flex justify-center items-center uppercase font-semibold font-inter gap-10 text-regularSize md:gap-5">
            <a href="#inicio"
              class="text-white border-b-2 border-transparent my-2 hover:border-white duration-300">Inicio</a>
            <a class="text-white border-b-2 border-transparent my-2 hover:border-white duration-300"
              href="#nosotros">Nosotros</a>
            <a href="#nuestros_servicios"
              class="text-white border-b-2 border-transparent my-2 hover:border-white duration-300 text-center">Nuestros
              servicios</a>
            <a href="#form"
              class="text-white border-b-2 border-transparent my-2 hover:border-white duration-300">Conversemos</a>
          </nav>
        </div>

        <div class="md:hidden">
          <button aria-label="hamburguer" class="hamburger" onclick="show()">
            <div id="bar1" class="bar"></div>
            <div id="bar2" class="bar"></div>
            <div id="bar3" class="bar"></div>
          </button>
        </div>
      </div>
      <!--  -->

      <!-- Navbar info -->
      <div
        class="text-white max-w-screen-lg max-h-72 mx-auto text-center flex flex-col my-28 sm:my-20 md:my-20 lg:mt-10 pb-96 md:pb-0">
        <h1 class="leading-none font-inter text-mediumSize md:leading-snug px-10 lg:px-0">
          Una gestión patrimonial inteligente asegura tu futuro financiero

        </h1>
        <p class="pt-10 md:pt-6 font-inter text-regularSize font-regular px-10 lg:px-0 mx-5">
          <b>Descubre cómo podemos hacer para que tus inversiones trabajen
            para ti.</b>
          Maximiza tu patrimonio y mejora tus finanzas con nuestros servicios
          de Wealth Management, Finanzas Corporativas y Estructuración
          Financiera. Nuestros especialistas se encargarán de implementar
          <b>estrategias financieras</b> innovadoras para garantizar el
          crecimiento y la perdurabilidad de su patrimonio a lo largo de las
          generaciones.
        </p>
        <div class="flex justify-center pt-5">
          <a class="flex justify-center items-center gap-2 rounded-xl border px-4 cursor-pointer hover:bg-colorBackground hover:text-white duration-300"
            href="#form">
            <span class="py-3 font-inter font-semibold text-basicSize">
              Quiero Invertir
            </span>
            <img src="./images/img/trend-up-01.webp" alt="flecha" class="w-6 h-6" />
          </a>
        </div>
      </div>
      <!--  -->

      <!-- WhatsApp-->
      <div class="flex justify-end w-11/12 mx-auto pb-60 mb-4 z-10">
        <div class="fixed bottom-6 sm:bottom-[2rem] lg:bottom-[4rem] z-30">
          <a href="https://wa.me/+51{{ $generales[0]['whatsapp'] }}?text={{ $generales[0]['mensaje_whatsapp'] }}"
            target="_blank" rel="noopener">
            <img src="./images/img/whatsapp.webp" alt="whatsapp" class="w-20 h-20 rounded-full" />
          </a>
        </div>
      </div>
    </header>
  </div>
  <!-- --------------------- -->

  <main class="mt-12 md:-mt-40 xl:-mt-52 2xl:-mt-40 w-full mx-auto" data-aos="fade-up" data-aos-offset="150">
    <section
      class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 shadow-md bg-white rounded-2xl px-6 col-span-2 py-5 lg:py-0 w-11/12 mx-auto">
      <div
        class="bg-white flex flex-col justify-center items-center text-center rounded-3xl lg:my-5 px-5 text-colorSubtitleLittle group hover:bg-colorBackground md:duration-300"
        data-aos="fade-up" data-aos-offset="150">
        <div class="pt-10">
          <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M7.54157 37.0014V29.8849M21.7638 37.0014V29.8849M35.986 37.0014V29.8849M50.2082 37.0014V29.8849M3.2749 46.068H54.4749V54.6014H3.2749V46.068ZM3.2749 20.468V14.7791L27.8228 3.40137L54.4749 14.7791V20.468H3.2749Z"
              stroke="#173525" stroke-width="5.33333" stroke-linecap="round" stroke-linejoin="round"
              class="group-hover:stroke-white" />
          </svg>
        </div>

        <h3 class="mt-4 mb-2 font-inter font-semibold text-littleTitle group-hover:text-white">
          Disciplina
        </h3>
        <p class="pb-8 font-regular font-inter text-basicSize group-hover:text-white">
          Tomar decisiones racionales y controlar las emociones del mercado
          aseguran la estabilidad y el crecimiento de las inversiones a largo
          plazo.
        </p>
      </div>

      <div
        class="flex flex-col justify-center items-center text-center rounded-3xl lg:my-5 px-5 text-colorSubtitleLittle group hover:bg-colorBackground md:duration-300"
        data-aos="fade-up" data-aos-offset="150">
        <div class="pt-10">
          <svg width="55" height="44" viewBox="0 0 55 44" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M40.9583 13.9997V8.66634C40.9583 7.25185 40.3964 5.8953 39.3962 4.8951C38.396 3.89491 37.0395 3.33301 35.625 3.33301H8.95833C7.54385 3.33301 6.18729 3.89491 5.1871 4.8951C4.1869 5.8953 3.625 7.25185 3.625 8.66634V24.6663C3.625 26.0808 4.1869 27.4374 5.1871 28.4376C6.18729 29.4378 7.54385 29.9997 8.95833 29.9997H14.2917M19.625 13.9997H46.2917C49.2372 13.9997 51.625 16.3875 51.625 19.333V35.333C51.625 38.2785 49.2372 40.6663 46.2917 40.6663H19.625C16.6795 40.6663 14.2917 38.2785 14.2917 35.333V19.333C14.2917 16.3875 16.6795 13.9997 19.625 13.9997ZM38.2917 27.333C38.2917 30.2785 35.9039 32.6663 32.9583 32.6663C30.0128 32.6663 27.625 30.2785 27.625 27.333C27.625 24.3875 30.0128 21.9997 32.9583 21.9997C35.9039 21.9997 38.2917 24.3875 38.2917 27.333Z"
              stroke="#173525" stroke-width="5.33333" stroke-linecap="round" stroke-linejoin="round"
              class="group-hover:stroke-white" />
          </svg>
        </div>

        <h3 class="mt-4 mb-2 font-inter font-semibold text-littleTitle group-hover:text-white">
          Transparencia
        </h3>
        <p class="pb-8 font-regular font-inter text-basicSize group-hover:text-white">
          Nuestra transparencia total te ofrece claridad en cada paso del
          camino, construyendo relaciones sólidas basadas en la confianza
          mutua.
        </p>
      </div>

      <div
        class="bg-white flex flex-col justify-center items-center text-center rounded-3xl lg:my-5 px-5 text-colorSubtitleLittle group hover:bg-colorBackground md:duration-300"
        data-aos="fade-up" data-aos-offset="150">
        <div class="pt-10">
          <svg width="57" height="62" viewBox="0 0 57 62" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M2.76807 19.1064L2.78057 52.0664C2.78057 55.8367 5.83697 58.8931 9.60723 58.8931H47.1539C50.9242 58.8931 53.9806 55.8367 53.9806 52.0664V24.7598C53.9806 21.6179 51.4336 19.0709 48.2917 19.0709H2.81825C2.79567 19.0709 2.77556 19.0851 2.76807 19.1064ZM2.76807 19.1064C2.77016 18.4674 41.1806 3.10645 41.1806 3.10645V17.5064M40.3718 38.3686L40.3272 38.4131"
              stroke="#173525" stroke-width="5.33333" stroke-linecap="round" stroke-linejoin="round"
              class="group-hover:stroke-white" />
          </svg>
        </div>

        <h3 class="mt-4 mb-2 font-inter font-semibold text-littleTitle group-hover:text-white">
          Confianza y Seguridad
        </h3>
        <p class="pb-8 font-regular font-inter text-basicSize group-hover:text-white">
          Nos comprometemos a mantener la integridad de sus inversiones
          mediante un enfoque prudente y una gestión cuidadosa del riesgo.
        </p>
      </div>

      <div
        class="bg-white flex flex-col justify-center items-center text-center rounded-3xl lg:my-5 px-5 text-colorSubtitleLittle group hover:bg-colorBackground md:duration-300"
        data-aos="fade-up" data-aos-offset="150">
        <div class="pt-10">
          <svg width="58" height="50" viewBox="0 0 58 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M25.1482 3.21387L19.6802 17.3809L29.1249 46.7867M29.1249 46.7867L38.8181 17.1323L33.5987 3.21387M29.1249 46.7867L3.5249 17.6294M29.1249 46.7867L54.7249 17.6294M3.5249 17.6294L14.4608 3.21387H44.0375L54.7249 17.6294M3.5249 17.6294H54.7249"
              stroke="#173525" stroke-width="5.33333" stroke-linecap="round" stroke-linejoin="round"
              class="group-hover:stroke-white" />
          </svg>
        </div>

        <h3 class="mt-4 mb-2 font-inter font-semibold text-littleTitle group-hover:text-white">
          Resultados
        </h3>
        <p class="pb-8 font-regular font-inter text-basicSize group-hover:text-white">
          Nos comprometemos a ofrecerte resultados tangibles y medibles,
          transformando tus objetivos financieros en realidades concretas.
        </p>
      </div>
    </section>

    <!-- ACERCA DE NOSOTROS  --------------->
    <section class="grid grid-cols-1 gap-12 lg:grid-cols-2 w-11/12 pt-10 lg:gap-44 mx-auto" id="nosotros"
      data-aos="fade-up" data-aos-offset="150">
      <div class="text-colorSubtitle">
        <h2 class="font-semibold text-subtitle font-inter pb-5 leading-none md:leading-snug">
          Acerca de Nosotros
        </h2>
        <p class="font-regular font-inter text-regularSize pb-5 text-colorSubtitle">
          <b>Yep Advisors</b> combina la vitalidad de una empresa joven con la
          experiencia de profesionales experimentados. Ofrecemos tres líneas
          de servicio:
        </p>
        <ul
          class="list-decimal list-inside font-regular font-inter text-regularSize pb-5 text-colorSubtitle flex flex-col gap-5">
          <li>
            <b>Wealth Management</b>, este proporciona asesoramiento y acceso
            completo a la Bolsa de Nueva York y Lima. Además, cuenta con una
            amplia gama de productos y servicios bursátiles a instituciones e
            inversionistas a través de las principales entidades financieras
            en los EE.UU. reguladas por la SEC
            <a href="https://www.sec.gov/" target="_blank">(www.sec.gov)</a>,
            FINRA
            <a href="https://www.finra.org/#/" target="_blank">(www.finra.org)</a>
            y aseguradas por SIPC
            <a href="https://www.sipc.org/" target="_blank">(www.sipc.org)</a>.
          </li>
          <li>
            Nuestro servicio de <b>Finanzas Corporativas</b>, aseguramos tu
            orden financiero, permitiendo la toma de decisiones eficientes y
            optimizando recursos para el crecimiento y rentabilidad de la
            empresa.
          </li>
          <li>
            Nuestro servicio de <b>Estructuración Financiera</b>, te ayudará a
            obtener fuentes de financiamiento acordes a tus necesidades.

          </li>

        </ul>
        <p class="font-regular font-inter text-regularSize pb-7 text-colorSubtitle">
          Con un equipo apasionado y una visión audaz, estamos transformando
          la forma en que se <b>gestionan las finanzas</b>.
        </p>
        <p class="font-regular font-inter text-regularSize pb-7 text-colorSubtitle">¡Estamos aquí para impulsar tu
          <b>éxito financiero</b>!
        </p>
        <div class="w-full">
          <img src="./images/img/Ima2.png" alt="nice to meet you" class="w-full" />
        </div>
      </div>
      <div class="text-teal-900">
        <div class="w-full">
          <img src="./images/img/Ima1.png" alt="workplace bussinesswoman" class="w-full object-cover" />
        </div>
        <div>
          <h2 class="font-semibold text-subtitle font-inter pt-10 text-colorSubtitle leading-none md:leading-snug">
            Nuestra Filosofía de inversión
          </h2>
          <p class="font-regular font-inter text-regularSize pt-4 text-colorSubtitle">
            En Yep Advisors, nuestra filosofía de <b>inversión</b> se basa en
            el crecimiento sostenible y la gestión prudente del riesgo.
            Buscamos oportunidades que generen resultados sólidos a largo
            plazo para nuestros clientes. Esto lo logramos combinando un
            exhaustivo <b>análisis fundamental</b> que nos permite identificar
            las mejores empresas con mayor potencial de crecimiento y
            aplicando diferentes estrategias de <b>análisis técnico</b> que
            nos permite identificar la tendencia del mercado y así obtener
            la rentabilidad esperada.
          </p>
        </div>
      </div>
    </section>

    <!-- PARTNERSHIPS  -->

    <section class="bg-[#F9FCFB] py-5 my-10" id="clientes" data-aos="fade-up" data-aos-offset="150">
      <h2 class="font-inter font-semibold text-6xl text-center pb-10 text-[#2D694B]">
        Partnerships
      </h2>

      <div class="swiper logos">
        <div class="swiper-wrapper">
          @foreach ($logos as $logo)
            <div class="swiper-slide">
              <div class="flex justify-center items-center"">
                <img src="{{ asset($logo->url_image) }}" alt="{{ $logo->title }}" />
              </div>
            </div>
          @endforeach

        </div>
        <div class="swiper-pagination"></div>

      </div>
      <div class="grid grid-cols-1 gap-5 md:gap-0 md:flex justify-around items-center max-w-screen-md mx-auto pb-5">


      </div>
    </section>

    <!-- RESULTADOS QUE HABLAS POR SI MISMOS -->
    <section class="-mb-[32px] sm:mb-96 pt-5 w-11/12 mx-auto">
      <div class="grid grid-cols-1 md:flex justify-center mx-auto w-full">
        <div class="basis-1/2 mb-10">
          <h2 class="font-inter font-semibold text-subtitle text-colorSubtitleLittle max-w-xl leading-tight">
            Resultados que hablan por Sí Mismos
          </h2>
          <a class="flex justify-center items-center gap-2 rounded-xl px-4 bg-colorBackground w-48 mt-5 cursor-pointer hover:bg-colorButton duration-300 hover:text-white"
            href="#form">
            <span class="py-3 font-semibold font-inter text-base text-white text-basicSize">
              Quiero Invertir
            </span>
            <img src="./images/img/trend-up-01.webp" alt="flecha" class="w-6 h-6" />
          </a>
        </div>

        <div class="basis-1/2 flex flex-col justify-center">
          <p class="text-colorSubtitleLittle font-inter font-regular text-regularSize">
            Yep Advisors ofrece resultados tangibles respaldados por
            estadísticas impresionantes, superado consistentemente las
            expectativas y generando un crecimiento significativo para
            nuestros clientes.
          </p>

          @php
            $chunks = $fortalezas->chunk(3);
          @endphp

          @foreach ($chunks as $chunk)
            <div class="grid grid-cols-1 md:flex justify-between items-center pt-10 gap-10 lg:gap-0 md:pt-5">

              @foreach ($chunk as $item)
                <div class="flex gap-5 flex-col font-inter font-regular text-regularSize mx-auto" data-aos="fade-up"
                  data-aos-offset="150">
                  <p class=" text-center font-semibold text-colorSubtitleLittle" style="font-size: 50px;">
                    {{ $item->titulo }}{{-- <span class="text-colorAdd">+</span> --}}
                  </p>
                  <div class="text-center px-2">
                    <p class="text-colorSubtitleLittle ">{!! $item->descripcion !!}</p>
                  </div>
                </div>
              @endforeach

            </div>
          @endforeach
        </div>
      </div>
    </section>

    <!-- ------------------------------ VIAJE FINANCIERO --------------------------------------- -->
    <section class="bg-colorBackground pb-10 mt-96">
      <div class="w-11/12 mx-auto flex justify-center mb-10">
        <div class="w-full">
          <img src="./images/img/stock-market-or-forex-trading-graph-in-graphic-concept-vector.webp"
            alt="forex-trading" class="w-full -mt-72 xl:-mt-80" data-aos="fade-up" data-aos-offset="150" />
        </div>
      </div>
      <div class="grid grid-cols-1 gap-20 lg:flex w-11/12 mx-auto lg:gap-32 text-white pb-10" id="nuestros_servicios"
        data-aos="fade-up" data-aos-offset="150">
        <div class="basis-2/5 flex flex-col gap-5">
          <div class="flex flex-col gap-4">
            <p class="font-inter font-semibold text-regularSize">Servicios</p>
            <h2 class="font-inter font-semibold text-middleTitle leading-none md:leading-tight">
              Tu Viaje Financiero Comienza Aquí
            </h2>
            <p class="font-inter font-regular text-basicSize">
              Yep Advisors: Expertos en Wealth Management, Finanzas
              Corporativas y Estructuración Financiera. Tu socio confiable
              hacia el éxito financiero.
            </p>
          </div>

          <div class="flex flex-col gap-5">
            @foreach ($servicios as $index => $item)
              <a class=" font-inter  enlace rounded-xl px-2 
              @if ($index !== 0) text-regularSize font-regular 
              
              @else 
              text-colorSubtitleLittle font-semibold text-littleTitle @endif"
                id="{{ explode(' ', $item->link)[0] . '-' . $item->id }}">
                {{ $item->link }}
              </a>
            @endforeach
            {{-- <a class="text-colorSubtitleLittle font-inter font-semibold text-littleTitle enlace rounded-xl px-2"
              id="wealth">
              Wealth Management
            </a>

            <a class="font-inter font-regular text-regularSize enlace rounded-xl px-2" id="finanzas">Finanzas
              Corporativas
            </a>

            <a class="font-inter font-regular text-regularSize enlace rounded-xl px-2"
              id="estructuracion">Estructuración Financiera
            </a> --}}
          </div>
        </div>
        <!-- --------------------- -->

        @foreach ($servicios as $index => $item)
          <div
            class="basis-3/5 lg:mt-0 services {{ explode(' ', $item->link)[0] . '-' . $item->id }} @if ($index !== 0) hidden @endif">
            <div class="animate-fade-up animate-once animate-duration-1000">
              <h2 class="font-semibold font-inter text-subtitle pb-5 leading-none md:leading-tight">
                {{ $item->title }}
              </h2>
              <div class="flex flex-col gap-5">
                {!! $item->description !!}
              </div>

              <a class="flex justify-center items-center gap-2 rounded-xl px-4 bg-colorButton w-44 mt-5 cursor-pointer hover:bg-white hover:text-colorSubtitleLittle duration-300 group"
                href="#form">
                <span class="py-3 font-semibold font-inter text-basicSize border-lg">
                  Quiero Invertir
                </span>
                <div>
                  <svg width="22" height="12" viewBox="0 0 22 12" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M1.3999 10.8002L6.7759 5.63096L11.3839 10.0617L20.5999 1.2002M20.5999 1.2002H13.6879M20.5999 1.2002V7.84635"
                      stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="group-hover:stroke-green-900" />
                  </svg>
                </div>
              </a>

              <div class="animate-fade-up animate-once animate-duration-1000 flex justify-end z-0 mt-5">
                <div class="w-full">
                  <img src="{{ $item->url_image . $item->name_image }}" alt="patrimonio testimonial"
                    class="w-full" />
                </div>
              </div>
            </div>
          </div>
        @endforeach

      </div>
    </section>

    <section class="grid grid-cols-1 md:flex justify-between gap-12 lg:gap-32 w-11/12 mx-auto py-16 lg:pb-0"
      id="form">
      <div class="text-colorSubtitleLittle max-w-xl mx-auto" data-aos="fade-up" data-aos-offset="150">
        <h2 class="font-semibold font-inter text-subtitle leading-tight">
          ¡Nos encantaría escuchar de ti!
        </h2>
        <p class="font-regular font-inter text-regularSize pt-2 mb-10">
          Completa el formulario a continuación y nos pondremos en contacto
          contigo lo antes posible para discutir cómo podemos ayudarte a
          alcanzar tus objetivos financieros.
        </p>

        <form id='formEnviarSolicitud' action="#">
          @csrf
          <div class="h-14">
            <input id='nombre_completo' type="text" placeholder="Nombre completo" value=""
              class="border-b placeholder:font-regular placeholder:font-basicSize placeholder:font-inter focus:border-selectCheck focus:outline-none w-full h-full px-5" />
          </div>

          <div class="h-14">
            <input type="tel" placeholder="Teléfono" id='telefono' value=""
              class="border-b placeholder:font-regular placeholder:font-basicSize placeholder:font-inter focus:border-selectCheck focus:outline-none w-full h-full px-5" />
          </div>

          <div class="h-14">
            <input type="email" placeholder="E-mail" id='email' value=""
              class="border-b placeholder:font-regular placeholder:font-basicSize placeholder:font-inter focus:border-selectCheck focus:outline-none w-full h-full px-5" />
          </div>

          <div class="h-14 border-b border-gray-300">
            <select name="servicios" id="servicios" aria-label="Tipo de Servicio"
              class="w-full h-full px-4 border-none outline-none font-regular text-basicSize font-inter">
              <option value="" class="">Tipo de Servicio</option>
              @foreach ($servicios as $item)
                <option id value="1" class="">{{ $item->link }}</option>
              @endforeach
              {{-- <option value="1" class="">Wealth Management</option>
              <option value="2" class="">Finanzas Corporativas</option>
              <option value="3" class="">Estructuración Financiera</option> --}}
            </select>
          </div>

          <div class="h-14 border-b border-gray-300">
            <select name="meet" id="meet" aria-label="meet"
              class="w-full h-full px-4 border-none outline-none font-regular text-basicSize font-inter">
              <option value="" class="">¿Cómo nos conociste?</option>
              <option value="1" class="">
                Recomendación de un amigo/familiar
              </option>
              <option value="2" class="">
                Búsqueda en línea (Google, Bing, etc)
              </option>
              <option value="3" class="">
                Redes sociales (Facebook, Linkedin, Twitter, etc)
              </option>
              <option value="4" class="">
                Redes sociales (Evento o conferencia)
              </option>
              <option value="5" class="">
                Otro (Por favor, especificar)
              </option>
            </select>
          </div>

          <div id="enviarSolicitud"
            class="flex justify-center items-center gap-2 rounded-xl border px-4 bg-colorBackground mt-10 w-full cursor-pointer hover:bg-colorButton duration-300">
            <input type="submit" class="py-3 font-semibold text-base text-white cursor-pointer "
              value="Enviar Solicitud" />
            <img src="./images/img/trend-up-01.webp" alt="flecha" class="w-6 h-6" />
          </div>

          {{-- <p class="font-regular text-basicSize font-inter pt-10 text-colorSubtitleLittle">
            ¿Prefieres que nos comuniquemos por Teléfono o Correo Electrónico?
          </p>
          <div class="flex gap-5 my-2">
            <div class="flex items-center">
              <input type="checkbox" id="whatsappSelect" name="miCheckbox"
                class="w-5 h-5 border border-gray-400 rounded mr-2 flex-shrink-0" />
              <label for="whatsapp"
                class="font-medium text-basicSize font-inter text-colorSubtitleLittle">Whatsapp</label>
            </div>

            <div class="flex items-center">
              <input type="checkbox" id="correoSelect" name="miCheckbox"
                class="w-5 h-5 border border-gray-400 rounded mr-2 flex-shrink-0" />
              <label for="correo" class="font-medium text-basicSize font-inter text-colorSubtitleLittle">Correo
                Electrónico</label>
            </div> --}}
      </div>
      </form>
      </div>

      <div data-aos="fade-up" data-aos-offset="150">
        <h2 class="font-semibold text-middle font-inter text-colorSubtitleLittle pt-2">
          Datos de contacto
        </h2>
        <p class="font-regular text-regularSize font-inter text-colorSubtitleLittle py-4">
          ¡Estamos aquí para ayudarte! Comunícate con nosotros para iniciar tu
          viaje hacia el éxito financiero.
        </p>

        <div class="flex flex-col gap-5 text-colorSubtitleLittle">
          @foreach ($generales as $contacto)
            <div class="flex gap-2">
              <img src="./images/svg/direccion.svg" alt="direccion" class="h-7 w-7 pt-2" />
              <div>
                <p class="font-medium text-regularSize font-inter">Dirección</p>
                <p class="font-regular text-basic font-inter">
                  {{ $contacto->address }}, {{ $contacto->inside }} , {{ $contacto->district }} ,
                  {{ $contacto->city }}
                </p>
              </div>
            </div>
            <div class="flex gap-2">
              <img src="./images/svg/numero.svg" alt="direccion" class="h-7 w-7 pt-2" />
              <div>
                <p class="font-medium text-regularSize font-inter">
                  Número de Teléfono
                </p>
                <a href="#" class="font-regular basicSize font-inter">{{ $contacto->cellphone }}</a>
              </div>
            </div>
            <div class="flex gap-2">
              <img src="./images/svg/email.svg" alt="direccion" class="h-7 w-7 pt-2" />
              <div>
                <p class="font-medium text-regularSize font-inter">
                  Correo Electrónico
                </p>
                <a href="#" class="font-regular basicSize font-inter">{{ $contacto->email }}</a>
              </div>
            </div>
            <div class="flex gap-2">
              <img src="./images/svg/atencion.svg" alt="direccion" class="h-7 w-7 pt-2" />
              <div>
                <p class="font-medium text-regularSize font-inter">
                  Horario de Atención
                </p>
                <p class="font-regular basicSize font-inter">
                  {{ $contacto->schedule }}
                </p>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
  </main>

  <!-- ---------------------FOOTER --------------------------->
  <footer class="bg-colorFooter mt-6 md:mt-12 py-10" data-aos="fade-up" data-aos-offset="150">
    <div class="w-11/12 mx-auto relative">
      <div class="absolute -top-20 right-0 rounded-full bg-colorBackground p-5 cursor-pointer">
        <a href="#inicio"><img src="./images/svg/top_flecha.svg" alt="arrow" /></a>
      </div>
    </div>

    <div class="grid grid-cols-1 gap-5 md:flex justify-between w-11/12 mx-auto">
      <div class="flex flex-col mb-5 gap-2 md:mb-0">
        <h2 class="font-inter font-medium text-littleTitle text-white">
          Yep Advisors
        </h2>
        <p class="font-inter font-regular text-regularSize text-white">
          Tu socio confiable en el mundo financiero.
        </p>
        <div class="flex gap-5">
          <a class=" text-white" href="https://{{ $generales[0]['instagram'] }}" target="_blank">
            <img src="./images/svg/linkedin.svg" alt="instagram" class="cursor-pointer text-white w-6" /></a>
          <a href="https://{{ $generales[0]['facebook'] }}" target="_blank"><img src="./images/svg/facebook.svg"
              alt="facebook" class="cursor-pointer" /></a>
          <a href="https://{{ $generales[0]['youtube'] }}" target="_blank"><img src="./images/svg/youtube.svg"
              alt="youtube" class="cursor-pointer" /></a>
        </div>
      </div>

      <div class="flex justify-between gap-20 text-white">
        <div class="flex flex-col gap-5">
          <a href="#" class="font-inter font-medium font-basicSize">Navegador</a>
          <a href="#nuestros_servicios" class="font-inter font-regular text-basic">Servicios</a>
          <a href="#clientes" class="font-inter font-regular text-basic">Partnerships</a>
          <a href="#nosotros" class="font-inter font-regular text-basic">Nosotros</a>
          <a href="#form" class="font-inter font-regular text-basic">Contacto</a>
        </div>

        <div class="flex flex-col gap-5">
          <a href="#" class="font-inter font-medium font-basicSize">Dirección</a>
          <a href="#" class="font-inter font-regular text-basic">{{ $generales[0]['address'] }}</a>
          <a href="#" class="font-inter font-regular text-basic">{{ $generales[0]['inside'] }}</a>
          <a href="#" class="font-inter font-regular text-basic">{{ $generales[0]['city'] }} -
            {{ $generales[0]['country'] }}</a>
          <a href="#" class="font-inter font-regular text-basic">
            +51 {{ $generales[0]['whatsapp'] }}
          </a>
        </div>
      </div>
    </div>

    <div class="border-t border-white w-11/12 mx-auto mt-5 pt-5 flex gap-5 text-white font-normal text-xs">
      <a href="#" class="font-inter font-regular text-basicLittle">Copyright &copy; 2024 Mundo Web. Reservados
        todos los derechos
      </a>
      <p>|</p>
      <a href="#" class="font-inter font-regular text-basicLittle">Política de Privacidad
      </a>
      <a href="#" class="font-inter font-regular text-basicLittle">Términos y Condiciones
      </a>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <script src="./js/swiper-bundle.min.js"></script>
  <script src="./js/app.js"></script>
  <script src="./js/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script>
    const swiper = new Swiper(".logos", {
      slidesPerView: 3,
      spaceBetween: 30,
      grabCursor: true,
      centeredSlides: false,
      loop: true,
      initialSlide: 0,
      autoplay: {
        delay: 1500,
        disableOnInteraction: false,
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
          centeredSlides: true,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
    });
  </script>

  <script>
    $('#enviarSolicitud').on('click', function(e) {
      e.preventDefault()
      console.log('enviando solicitud');
      let nombre = document.getElementById('nombre_completo').value
      let telefono = document.getElementById('telefono').value
      let email = document.getElementById('email').value

      let servicios = document.getElementById('servicios')
      let textoSeleccionado = servicios.options[servicios.selectedIndex].text;

      let meet = document.getElementById('meet')
      let textoMeet = meet.options[meet.selectedIndex].text;

      // let whatsappSelect = document.getElementById('whatsappSelect').checked
      // let correoSelect = document.getElementById('correoSelect').checked
      if (nombre == '' || telefono == "" || email == "") {
        Swal.fire({
          title: "Espere !",
          text: 'Asegúrate de llenar todos los campos antes de enviar el mensaje',
          icon: "warning"
        });
        return
      }
      Swal.fire({

        title: 'Procesando información',
        html: `Enviando... 
          <div class="max-w-2xl mx-auto overflow-hidden flex justify-center items-center mt-4 ">
            <div role="status">
                <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                </svg>
                
            </div>
          </div>
          `,
        allowOutsideClick: false,
        onBeforeOpen: () => {
          Swal.showLoading();
        }
      });

      console.log(nombre)
      console.log(telefono)
      console.log(email)
      console.log(textoSeleccionado)
      console.log(textoMeet)



      $.ajax({
        url: '{{ route('mensajes.storePublic') }}',
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        data: {
          nombre,
          telefono,
          email,
          textoSeleccionado,
          textoMeet
        },
        success: function(success) {
          Swal.close();
          Swal.fire({
            title: "Exito",
            text: 'Solicitud enviada con exito ',
            icon: "success"
          });
          document.getElementById('nombre_completo').value = '';
          document.getElementById('telefono').value = '';
          document.getElementById('email').value = '';

          let servicios = document.getElementById('servicios');
          let textoSeleccionado = servicios.options[servicios.selectedIndex].text;

          // Limpiar la opción seleccionada del elemento <select>
          servicios.selectedIndex = 0; // Esto seleccionará el primer e
        },
        error: function(error) {
          console.log(error)
          Swal.close();
          Swal.fire({
            title: "Ops !",
            text: 'El mensaje no ha podido ser enviado, en breves momentos volvera a estar disponible',
            icon: "warning"
          });
        }

      })
    });
  </script>

  <!--  <script src="../node_modules/preline/dist/preline.js"></script> -->
  <!-- <script src="./js/app.js"></script> -->
</body>

</html>
