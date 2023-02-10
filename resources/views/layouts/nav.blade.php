<nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 ">
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
    <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
        <a class="text-lg font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
        href="{{url('/')}}"
        style="font-family: 'Lato', sans-serif;"
        >Islamic Foundation</a
        ><button
        class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
        type="button"
        onclick="toggleNavbar('example-collapse-navbar')"
        >
        <i class="text-gray-200 fas fa-bars"></i>
        </button>
    </div>
    <div
        class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
        id="example-collapse-navbar"
    >
        <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
        <li class="flex items-center justify-center">
            <a
            class="lg:text-white lg:hover:text-gray-900 hover:bg-gray-300 text-gray-600 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
            href="{{url('/')}}"
            ><span class="inline-block ml-2" style="font-family: 'Lato', sans-serif;">Home</span></a
            >
        </li>
        <li class="flex items-center justify-center">
            <a
            class="lg:text-white lg:hover:text-gray-900 hover:bg-gray-300 text-gray-600 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
            href="{{url('/about')}}"
            ><span class="inline-block ml-2" style="font-family: 'Lato', sans-serif;">About</span></a
            >
        </li>
        <li class="flex items-center justify-center">
            <a
            class="lg:text-white lg:hover:text-gray-900 hover:bg-gray-300 text-gray-600 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
            href="{{url('/dawah')}}"
            ><span class="inline-block ml-2" style="font-family: 'Lato', sans-serif;">Dawah</span></a
            >
        </li>
        <li class="flex items-center justify-center">
            <a
            class="lg:text-white lg:hover:text-gray-900 hover:bg-gray-300 text-gray-600 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
            href="{{url('/welfare')}}"
            ><span class="inline-block ml-2" style="font-family: 'Lato', sans-serif;">Welfare</span></a
            >
        </li>
        <li class="flex items-center justify-center">
            <a
            class="lg:text-white lg:hover:text-gray-900 hover:bg-gray-300 text-gray-600 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
            href="{{url('/projects')}}"
            ><span class="inline-block ml-2" style="font-family: 'Lato', sans-serif;">Projects</span></a
            >
        </li>
        <li class="flex items-center justify-center">
            <a
            class="lg:text-white lg:hover:text-gray-900 hover:bg-gray-300 text-gray-600 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
            href="{{url('/education')}}"
            ><span class="inline-block ml-2" style="font-family: 'Lato', sans-serif;">Education</span></a
            >
        </li>
        <li class="flex items-center justify-center">
            <a
            class="lg:text-white lg:hover:text-gray-900 hover:bg-gray-300 text-gray-600 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
            href="#coming_soon"
            ><span class="inline-block ml-2" style="font-family: 'Lato', sans-serif;">Blog</span></a
            >
        </li>
        <li class="flex items-center justify-center">
            <a
            class="lg:text-white lg:hover:text-gray-900 hover:bg-gray-300 text-gray-600 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
            href="{{url('/contact')}}"
            ><span class="inline-block ml-2" style="font-family: 'Lato', sans-serif;">Contact</span></a
            >
        </li>
        <li class="flex items-center justify-center">
            <a
            class="bg-white text-gray-800 active:bg-gray-100 text-sm font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md hover:bg-gray-200 outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
            style="transition: all 0.15s ease 0s; font-family: 'Lato', sans-serif;"
            href="https://paystack.com/pay/idcfcgjscd"
            >
             Donate
            </a>
        </li>
        </ul>
    </div>
    </div>
</nav>

<script>
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
  </script>