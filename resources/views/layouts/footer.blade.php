<footer class="relative bg-gray-300 pt-8 pb-6">
    <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
      style="height: 80px; display: none;">
      <svg
        class="absolute bottom-0 overflow-hidden"
        xmlns="http://www.w3.org/2000/svg"
        preserveAspectRatio="none"
        version="1.1"
        viewBox="0 0 2560 100"
        x="0"
        y="0"
      >
        <polygon
          class="text-gray-300 fill-current"
          points="2560 0 2560 100 0 100"
        ></polygon>
      </svg>
    </div>
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap flex-col md:flex-row md:justify-between">
            <div class="w-full lg:w-3/12 p-10 m-5">
                <h6 class="block uppercase text-gray-800 text-sm font-bold mb-2" style="font-family: 'Roboto Condensed', sans-serif;" >
                    Islamic Foundation
                </h6>
                <p class="mt-2 mb-4 text-gray-700" style="font-family: 'Inter', sans-serif;">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique fugit ilVero, labore voluptatum.
                </p>
                <div class="mt-6">
                    <button
                    class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                    type="button"
                    >
                    <i class="flex fab fa-twitter"></i></button
                    ><button
                    class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                    type="button"
                    >
                    <i class="flex fab fa-facebook-square"></i></button
                    ><button
                    class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                    type="button"
                    >
                    <i class="flex fab fa-instagram"></i></button
                    >
                </div>
            </div>
            <div class="w-full lg:w-3/12 p-10 m-5">
                <span class="block uppercase text-gray-800 text-sm font-bold mb-2" style="font-family: 'Roboto Condensed', sans-serif;">
                  Useful Links
                </span>
                <ul class="list-unstyled">
                    <li>
                    <a
                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" style="font-family: 'Inter', sans-serif;"
                        href="{{url('/about')}}"
                        >About Us</a
                    >
                    </li>
                    <li>
                    <a
                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" style="font-family: 'Inter', sans-serif;"
                        href="{{url('/dawah')}}"
                        >Dawah</a
                    >
                    </li>
                    <li>
                    <a
                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" style="font-family: 'Inter', sans-serif;"
                        href="{{url('#')}}"
                        >Blog</a
                    >
                    </li>
                </ul>
            </div>
            <div class="w-full lg:w-3/12 p-10 m-5">
                <span class="block uppercase text-gray-800 text-sm font-bold mb-2" style="font-family: 'Roboto Condensed', sans-serif;">
                Contact
                </span>
                <ul class="list-unstyled">
                    <li>
                        <div style="font-family: 'Inter', sans-serif;" class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"><i class="fa fa-map-marker text-black" style="margin-right: 10px"></i>20, Enugu Road, Apapa Lagos</div>
                    </li>
                    <li>
                        <div style="font-family: 'Inter', sans-serif;" class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"><i class="fa fa-phone text-black" style="margin-right: 10px"></i>+2348 0987 57795</div>
                    </li>
                    <li>
                        <div style="font-family: 'Inter', sans-serif;" class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"><i class="fa fa-envelope text-black" style="margin-right: 10px"></i>contact@islamicfoundation.org</div>
                    </li>
                </ul>
            </div>
      </div>
    </div>
    <hr class="my-6 border-gray-400" />
    <div class="flex flex-wrap items-center md:justify-between justify-center">
    <div class="w-full md:w-4/12 px-4 mx-auto text-center">
        <div class="text-sm text-gray-600 font-semibold py-1" style="font-family: 'Inter', sans-serif;">
        Copyright © {{ date('Y') }} Islamic Foundation.
        </div>
    </div>
    <div class="w-full md:w-4/12 px-4 mx-auto text-center">
        <div class="text-sm text-gray-600 font-semibold py-1" style="font-family: 'Inter', sans-serif;" >
        Made with ❤️ by <button class="bg-transparent outline-none focus:outline-none" onclick="meet()">
            Yuweb
        </button>
        </div>
    </div>
    </div>
  </footer>
  <script>
    function meet() {
        
        // open the page as popup //
        var page = `https//wa.me/+2348087400795`;
        var myWindow = window.open(page, "_blank", "scrollbars=yes,width=900,height=900,top=300");
        
        // focus on the popup //
        myWindow.focus();        
      }
</script>
