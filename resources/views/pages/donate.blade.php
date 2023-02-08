@extends('layouts.app')
@section('title', 'Donate')
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
                Donate
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
    <section class="relative py-20">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px; display:none;">
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
              class="text-white fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap items-center">
           
            <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
              <div class="md:pr-12">
                <div class="flex flex-wrap justify-center mb-10">
                    <div class="pr-2 flex flex-col justify-center">
                      <h2 class="text-5xl font-semibold mb-1" style="font-family: 'Roboto Condensed', sans-serif;">Please Make Your Donation</h2>
                      <p class="mt-2" style="font-family: 'Inter', sans-serif;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum quam exercitationem nihil asperiores consequatur!</p>
                    </div>
                  </div>
                <img
                  alt="..."
                  class="max-w-full rounded-lg shadow-lg"
                  src="https://images.unsplash.com/photo-1590076215667-875d4ef2d7de?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NjB8fGlzbGFtaWN8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                />
              </div>    
            </div>
            <div class="w-full md:w-5/12 ml-auto mr-auto px-4 shadow-lg bg-gray-200">
                
                <div class="flex-auto p-5 lg:p-10">
                    <h2 class="text-4xl font-semibold" style="font-family: 'Roboto Condensed', sans-serif;">Your donation</h2>
                    
                    <div class="relative w-full mb-3 mt-8">
                        <label class="block mt-4">
                            <span class="block uppercase text-gray-700 text-xs font-bold mb-2">Select your currency</span>
                            <select class="form-select mt-1 block w-full border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring">
                              <option>Dollar</option>
                              <option>Euro</option>
                              <option>Naira</option>
                              <option>Pounds</option>
                            </select>
                          </label>
                    </div>
                    <div class="relative w-full mb-3 mt-8">
                      <label
                        class="block uppercase text-gray-700 text-xs font-bold mb-2"
                        for="email"
                        {{-- style="font-family: 'Roboto Condensed', sans-serif;" --}}
                        >How much would you like to donate?</label
                      ><input
                        type="number"
                        class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                        {{-- placeholder="Email" --}}
                        value="1000"
                        min="1"
                        style="transition: all 0.15s ease 0s;"
                      />
                    </div>
                    <div class="text-center mt-6">
                      <button
                        class="bg-gray-800 hover:bg-gray-600 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-2xl outline-none focus:outline-none mr-1 mb-1"
                        type="submit"
                        style="transition: all 0.15s ease 0s; font-family: 'Roboto Condensed', sans-serif;"
                      >
                        Donate now
                      </button>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </section>
</main>
@endsection