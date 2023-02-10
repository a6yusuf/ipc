@extends('layouts.app')
@section('title', 'About')
    
@section('content')
<main>
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
                About Us
              </h1>
            </div>
          </div>
        </div>
      </div>
      <div
        class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
        style="height: 70px; display: none;"
      >
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
          <div class="items-center flex flex-wrap">
          
            <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
              <div class="md:pr-12">
                <h2 class="text-3xl font-semibold mb-1 italic" style="font-family: 'Roboto Condensed', sans-serif;">About Us</h2>
                <p class="mt-4 text-lg leading-relaxed text-gray-600" style="font-family: 'Inter', sans-serif;">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ea adipisci facere rem! Necessitatibus, veniam quis nulla magni molestiae reprehenderit sit, odio quos iusto architecto fuga dolores distinctio dolorum vero.
                </p>
              </div>    
            </div>
            <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                <img
                  alt="..."
                  class="max-w-full rounded-lg shadow-lg"
                  src="https://images.unsplash.com/photo-1512970648279-ff3398568f77?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjJ8fGNlbnRyYWwlMjBtb3NxdWV8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                />
               
              </div>
          </div>
        </div>
    </section>
    {{-- <div class="w-full">
      <div class="iframe-container" style="display: inline-block; width: 100%; height: 100%;">
        <iframe name="himary-widget" src="https://localhost:3000/card/cbd70cd1-a96b-4e3d-9fd5-94695e8d72cf" width="100%"  frameborder="0" height="950px" allow="camera *; microphone*;autoplay*;encrypted-media*;" class="inline"></iframe>
    </div>
    </div>
    <div class="w-full md:w-4/12">
      <div class="iframe-container" style="display: inline-block; width: 100%; height: 100%;">
        <iframe name="himary-widget" src="https://localhost:3000/page/f1366cce-9f82-4387-ac7f-d858941401ab" width="100%"  frameborder="0" height="800px" allow="camera *; microphone*;autoplay*;encrypted-media*;" class="inline"></iframe>
    </div>
    </div> --}}
      {{-- Mission --}}
      <section>
        <div class="container mx-auto px-4 md:w-9/12 w-full">
            <div class="flex flex-wrap flex-col md:flex-row md:justify-between">
                <div class="w-full lg:w-3/12 p-10 m-5 hover:shadow-2xl ease-linear transition-all duration-150">
                    <h6 class="block uppercase text-black text-2xl font-bold mb-3" style="font-family: 'Roboto Condensed', sans-serif;" >
                        Our Mission
                    </h6>
                    <p class="mt-2 mb-4 text-gray-700" style="font-family: 'Inter', sans-serif;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem corrupti aperiam. Repellat optio amet ipsa.
                    </p>
                </div>
                <div class="w-full lg:w-3/12 p-10 m-5 hover:shadow-2xl ease-linear transition-all duration-150">
                    <h6 class="block uppercase text-black text-2xl font-bold mb-3" style="font-family: 'Roboto Condensed', sans-serif;">
                        Our Vision
                    </h6>
                    <p class="mt-2 mb-4 text-gray-700" style="font-family: 'Inter', sans-serif;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem corrupti aperiam. Repellat optio amet ipsa.
                    </p>
                </div>
                <div class="w-full lg:w-3/12 p-10 m-5 hover:shadow-2xl ease-linear transition-all duration-150">
                    <h6 class="block uppercase text-black text-2xl font-bold mb-3" style="font-family: 'Roboto Condensed', sans-serif;">
                        Our Values
                    </h6>
                    <p class="mt-2 mb-4 text-gray-700" style="font-family: 'Inter', sans-serif;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem corrupti aperiam. Repellat optio amet ipsa.
                    </p>
                </div>
          </div>
        </div>
      </section>
      {{-- Mission end --}}

      {{-- Our projects --}}
      <section>
        <div class="container mx-auto px-4 md:w-10/12 w-full">
            <div class="flex flex-wrap justify-center text-center mb-10">
                <div class="w-full lg:w-6/12 px-2 flex flex-col justify-center items-center">
                  <h2 class="text-4xl font-semibold mb-1" style="font-family: 'Roboto Condensed', sans-serif;">Our Projects</h2>
                  <p class="m-2" style="font-family: 'Inter', sans-serif;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inihil dolorum sequi, qui veniam culpa nesciunt asperiores consequatur!</p>
                </div>
            </div>
              <div class="flex flex-col md:flex-row">
                <div class="group rounded hover:shadow-2xl md:w-4/12 w-full mb-10 mx-5 ease-linear transition-all duration-150">
                    <img
                    alt="..."
                    class="max-w-full rounded-t-lg"
                    src="https://images.unsplash.com/photo-1586767003402-8ade266deb64?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NXx8aXNsYW1pY3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                    />
                    <div>
                        <h6 class="block text-black text-2xl font-medium m-5 text-center" style="font-family: 'Roboto Condensed', sans-serif;">
                            Aba Quranic Institute
                        </h6>
                        <p class="m-5 text-gray-700" style="font-family: 'Inter', sans-serif;">
                            Lorem ipsum dolor sit amet  dolor sit amet consectetur adipisicing elit dolor sit amet. Exercitationem corrupti aperiam. Repellat optio amet ipsa.
                        </p>
                    </div>
                    <div class="m-5">
                        <button style="font-family: 'Inter', sans-serif;" class="text-gray-500 bg-transparent border border-solid border-gray-300 group-hover:border-green-500 group-hover:bg-green-500 group-hover:text-white active:bg-green-600 font-bold uppercase text-sm px-6 py-3 rounded-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                        Read More
                        </button>
                    </div>
                </div>
                <div class="group rounded hover:shadow-2xl md:w-4/12 w-full mb-10 mx-5 ease-linear transition-all duration-150">
                    <img
                    alt="..."
                    class="max-w-full rounded-t-lg"
                    src="https://images.unsplash.com/photo-1590076215667-875d4ef2d7de?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8NjB8fGlzbGFtaWN8ZW58MHx8MHw%3D&auto=format&fit=crop&w=500&q=60"
                    />
                    <div>
                        <h6 class="block uppercase text-black text-2xl font-semibold m-5 text-center" style="font-family: 'Roboto Condensed', sans-serif;">
                            Asaba Central Mosque
                        </h6>
                        <p class="m-5 text-gray-700" style="font-family: 'Inter', sans-serif;">
                            Lorem ipsum dolor sit amet  dolor sit amet consectetur adipisicing elit dolor sit amet. Exercitationem corrupti aperiam. Repellat optio amet ipsa.
                        </p>
                    </div>
                    <div class="m-5">
                        <button style="font-family: 'Inter', sans-serif;" class="text-gray-500 bg-transparent border border-solid border-gray-300 group-hover:border-green-500 group-hover:bg-green-500 group-hover:text-white active:bg-green-600 font-bold uppercase text-sm px-6 py-3 rounded-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                        Read More
                        </button>
                    </div>
                </div>
                <div class="group rounded hover:shadow-2xl md:w-4/12 w-full mb-10 mx-5 ease-linear transition-all duration-150">
                    <img
                    alt="..."
                    class="max-w-full rounded-t-lg"
                    src="https://images.unsplash.com/photo-1495384441431-2394f1c22f8e?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8b2xkJTIwbXVzbGltfGVufDB8fDB8&auto=format&fit=crop&w=500&q=60"
                    />
                    <div>
                        <h6 class="block uppercase text-black text-2xl font-semibold m-5 text-center" style="font-family: 'Roboto Condensed', sans-serif;">
                            Widow's Welfare
                        </h6>
                        <p class="m-5 text-gray-700" style="font-family: 'Inter', sans-serif;">
                            Lorem ipsum dolor sit amet  dolor sit amet consectetur adipisicing elit dolor sit amet. Exercitationem corrupti aperiam. Repellat optio amet ipsa.
                        </p>
                    </div>
                    <div class="m-5">
                        <button style="font-family: 'Inter', sans-serif;" class="text-gray-500 bg-transparent border border-solid border-gray-300 group-hover:border-green-500 group-hover:bg-green-500 group-hover:text-white active:bg-green-600 font-bold uppercase text-sm px-6 py-3 rounded-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button"
                            >
                        Read More
                        </button>
                    </div>
                </div>
              </div>
        </div>
      </section>
      {{-- Why support us --}}
      <section>
        <div class="relative pt-16 flex content-center items-center justify-center"
        style="min-height: 90vh;">
        <div
          class="absolute top-0 w-full h-full bg-center bg-cover"
          style='background-image: url("https://images.unsplash.com/photo-1612869518996-eafc2df8bff5?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTd8fGRhdGUlMjBwYWxtfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60");'
        >
          <span
            id="blackOverlay"
            class="w-full h-full absolute opacity-90 bg-green-900"
          ></span>
        </div>
        <div class="container relative mx-auto">
            <div class="container mx-auto px-4 md:w-10/12 w-full">
                <div class="flex flex-wrap justify-center text-center mb-5">
                    <div class="w-full lg:w-9/12 px-2 flex flex-col justify-center items-center">
                      <h2 class="text-5xl font-semibold mb-1 text-white uppercase" style="font-family: 'Roboto Condensed', sans-serif;">Why Support Our Cause</h2>
                      <p class="m-2 text-white" style="font-family: 'Inter', sans-serif;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inihil dolorum sequi, qui veniam culpa nesciunt asperiores consequatur!</p>
                    </div>
                </div>
            </div>
            <div class="container mx-auto px-4 lg:pt-10 lg:pb-12">
                <div class="flex flex-wrap mt-5 justify-center">
                  <div class="w-full lg:w-3/12 px-4 text-center">
                    <div
                      class="text-white p-3 w-20 h-20 shadow-lg rounded-full bg-red-800 inline-flex items-center justify-center"
                    >
                      <i class="fas fa-medal text-xl"></i>
                    </div>
                    <h6 class="text-xl mt-5 font-semibold text-white" style="font-family: 'Roboto Condensed', sans-serif;">
                      Sadaqatun Jaariyah
                    </h6>
                    <p class="mt-2 mb-4 text-gray-200" style="font-family: 'Inter', sans-serif;">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates cupiditate maiores aut vitae minima. Magnam, facere reprehenderit ullam dolor quo voluptatum sapiente tempore, beatae doloremque eveniet quasi. Totam, minima ducimus.
                    </p>
                  </div>
                  <div class="w-full lg:w-3/12 px-4 text-center">
                    <div
                      class="text-white p-3 w-20 h-20 shadow-lg rounded-full bg-red-800 inline-flex items-center justify-center"
                    >
                      <i class="fas fa-poll text-xl"></i>
                    </div>
                    <h5 class="text-xl mt-5 font-semibold text-white" style="font-family: 'Roboto Condensed', sans-serif;">
                      Spread Islam Among The Easterners
                    </h5>
                    <p class="mt-2 mb-4 text-gray-200" style="font-family: 'Inter', sans-serif;">
                     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque odit sint, magni dicta aliquid suscipit eius assumenda dolorem quisquam asperiores ipsum veniam quia neque omnis est vitae earum nulla excepturi.
                    </p>
                  </div>
                  <div class="w-full lg:w-3/12 px-4 text-center">
                    <div
                      class="text-white p-3 w-20 h-20 shadow-lg rounded-full bg-red-800 inline-flex items-center justify-center"
                    >
                      <i class="fas fa-lightbulb text-xl"></i>
                    </div>
                    <h5 class="text-xl mt-5 font-semibold text-white" style="font-family: 'Roboto Condensed', sans-serif;">
                        Sponsor Future Scholars
                    </h5>
                    <p class="mt-2 mb-4 text-gray-200" style="font-family: 'Inter', sans-serif;">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus doloribus repudiandae aperiam tempora delectus mollitia doloremque officiis error veniam dolores, est porro laboriosam suscipit. Molestias et dignissimos quae possimus ex?
                    </p>
                  </div>
                  <div class="flex flex-col md:flex-row text-center" style="margin:50px;">
                    <p class="mt-4 text-2xl px-6 py-3 text-gray-300" style="font-family: 'Roboto Condensed', sans-serif;">Make a donation</p>
                    <a href="https://paystack.com/pay/idcfcgjscd" style="font-family: 'Inter', sans-serif;" class="text-white bg-transparent border border-solid animate-bounce border-white hover:bg-gray-800 hover:text-white active:bg-gray-800 font-bold uppercase text-sm px-6 py-3 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 inline-block mt-5">
                        Donate 
                    </a>
                </div>
                </div>
              </div>
        </div>
        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden" style="height: 70px; display: none;">
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
      {{-- <script type="module" src="https://localhost:3000/index.js"></script>
      <div class="HiMary_card_widget" data-HiMary_widget_type="card"></div> --}}
</main>
@endsection

