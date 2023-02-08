@extends('layouts.app')
@section('title', 'Contact Us')

@section('content')
<main>
    {{-- Hero --}}
    <section>
        <div class="relative pt-16 pb-32 flex content-center items-center justify-center"
      style="min-height: 70vh;">
      <div
        class="absolute top-0 w-full h-full bg-center bg-cover"
        style='background-image: url("https://images.unsplash.com/photo-1519834022362-cf872776bc7e?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mjh8fGNlbnRyYWwlMjBtb3NxdWV8ZW58MHx8MHw%3D&auto=format&fit=crop&w=500&q=60");'
      >
        <span
          id="blackOverlay"
          class="w-full h-full absolute opacity-50 bg-black"
        ></span>
      </div>
      <div class="container relative mx-auto">
        <div class="items-center flex flex-wrap">
          <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto">
            <div>
              <h1 class="text-white font-semibold text-6xl" style="font-family: 'Roboto Condensed', sans-serif;">
                Contact Us
              </h1>
            </div>
          </div>
        </div>
      </div>
      <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
        style="height: 70px; display: none;">
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
    </div>
    </section>
    {{-- Hero ends --}}
    <section class="pb-20 bg-gray-300 -mt-24">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap">
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white p-3 text-center inline-flex items-center justify-center w-20 h-20 mb-5 shadow-lg rounded-full bg-red-400"
                  >
                    <i class="fa fa-map-marker text-2xl"></i>
                  </div>
                  <h6 style="font-family: 'Roboto Condensed', sans-serif;" class="text-xl font-semibold">Our Address</h6>
                  <p style="font-family: 'Inter', sans-serif;" class="mt-2 mb-4 text-gray-600">
                    20, Enugu Road, Apapa Lagos
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white p-3 text-center inline-flex items-center justify-center w-20 h-20 mb-5 shadow-lg rounded-full bg-blue-400"
                  >
                    <i class="fa fa-phone text-2xl"></i>
                  </div>
                  <h6 style="font-family: 'Roboto Condensed', sans-serif;" class="text-xl font-semibold">Phone Number</h6>
                  <p style="font-family: 'Inter', sans-serif;" class="mt-2 mb-2 text-gray-600">
                    +2348 089408765
                  </p>
                  <p style="font-family: 'Inter', sans-serif;" class="mt-2 mb-2 text-gray-600">
                    +2348 089408765
                  </p>
                </div>
              </div>
            </div>
            <div class="pt-6 w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white p-3 text-center inline-flex items-center justify-center w-20 h-20 mb-5 shadow-lg rounded-full bg-green-400"
                  >
                    <i class="fa fa-envelope text-2xl"></i>
                  </div>
                  <h6 style="font-family: 'Roboto Condensed', sans-serif;" class="text-xl font-semibold">Email Address</h6>
                  <p style="font-family: 'Inter', sans-serif;" class="mt-2 mb-4 text-gray-600">
                    info@islamicfoundation.org
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section>
        <div class="container mx-auto px-4 md:w-10/12 w-full mt-10">
            <div class="flex flex-wrap justify-center mt-5">
                <div class="w-full lg:w-6/12 px-4">
                  <div
                    class="flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300"
                  >
                    <div class="flex-auto p-5 lg:p-10">
                      <h4 class="text-2xl font-semibold" style="font-family: 'Roboto Condensed', sans-serif;">Leave us a message</h4>
                      <p style="font-family: 'Inter', sans-serif;" class="leading-relaxed mt-1 mb-4 text-gray-600">
                        Complete this form and we will get back to you in 24 hours.
                      </p>
                      <div class="relative w-full mb-3 mt-8">
                        <label
                          class="block uppercase text-gray-700 text-xs font-bold mb-2"
                          for="full-name"
                          style="font-family: 'Roboto Condensed', sans-serif;"
                          >Full Name</label
                        ><input
                          type="text"
                          class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                          placeholder="Full Name"
                          style="transition: all 0.15s ease 0s;"
                        />
                      </div>
                      <div class="relative w-full mb-3">
                        <label
                          class="block uppercase text-gray-700 text-xs font-bold mb-2"
                          for="email"
                          style="font-family: 'Roboto Condensed', sans-serif;"
                          >Email</label
                        ><input
                          type="email"
                          class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                          placeholder="Email"
                          style="transition: all 0.15s ease 0s;"
                        />
                      </div>
                      <div class="relative w-full mb-3">
                        <label
                          class="block uppercase text-gray-700 text-xs font-bold mb-2"
                          for="message"
                          style="font-family: 'Roboto Condensed', sans-serif;"
                          >Message</label
                        ><textarea
                          rows="4"
                          cols="80"
                          class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                          placeholder="Type a message..."
                        ></textarea>
                      </div>
                      <div class="text-center mt-6">
                        <button
                          class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                          type="button"
                          style="transition: all 0.15s ease 0s; font-family: 'Roboto Condensed', sans-serif;"
                        >
                          Send Message
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </section>
</main>
@endsection