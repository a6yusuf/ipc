@extends('layouts.app')
@section('title', 'Welfare')

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
                Welfare
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
    </section>
    {{-- Hero ends --}}
     {{-- Our Welfare --}}
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
           
            <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                <img
                  alt="..."
                  class="max-w-full rounded-lg shadow-2xl"
                  src="https://images.unsplash.com/photo-1590076215667-875d4ef2d7de?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8NjB8fGlzbGFtaWN8ZW58MHx8MHw%3D&auto=format&fit=crop&w=500&q=60"
                />
              </div>
              <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                <div class="md:pr-12">
                  <h2 style="font-family: 'Roboto Condensed', sans-serif;" class="text-3xl font-semibold mb-1 italic">Our Welfare Programme</h2>
                  <p style="font-family: 'Inter', sans-serif;" class="mt-4 text-lg leading-relaxed text-gray-600">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ea adipisci facere rem! Necessitatibus, veniam quis nulla magni molestiae reprehenderit sit, odio quos iusto architecto fuga dolores distinctio dolorum vero.
                  </p>
                </div>    
              </div>
          </div>
        </div>
    </section>
    {{-- Welfare cards --}}
     {{-- Our welfare --}}
     <section>
        <div class="container mx-auto px-4 md:w-10/12 w-full">
            <div class="flex flex-wrap justify-center text-center mb-10">
                <div class="w-full lg:w-6/12 px-2 flex flex-col justify-center items-center">
                  <h2 style="font-family: 'Roboto Condensed', sans-serif;" class="text-4xl font-semibold mb-1">Welfare</h2>
                  <p style="font-family: 'Inter', sans-serif;" class="m-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inihil dolorum sequi, qui veniam culpa nesciunt asperiores consequatur!</p>
                </div>
            </div>
              <div class="flex flex-col md:flex-row">
                <div class="group rounded hover:shadow-2xl md:w-4/12 w-full mb-10 mx-5 ease-linear transition-all duration-150">
                    <img
                    alt="..."
                    class="max-w-full rounded-t-lg"
                    src="https://images.unsplash.com/photo-1530490125459-847a6d437825?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjZ8fHBvdmVydHl8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                    />
                    <div>
                        <h6 style="font-family: 'Roboto Condensed', sans-serif;" class="block text-black text-2xl font-semibold m-5">
                            Free health care for orphan
                        </h6>
                        <p style="font-family: 'Inter', sans-serif;" class="m-5 text-gray-700">
                            Lorem ipsum dolor sit amet  dolor sit amet consectetur adipisicing elit dolor sit amet. Exercitationem corrupti aperiam. Repellat optio amet ipsa.
                        </p>
                    </div>
                </div>
                <div class="group rounded hover:shadow-2xl md:w-4/12 w-full mb-10 mx-5 ease-linear transition-all duration-150">
                    <img
                    alt="..."
                    class="max-w-full rounded-t-lg"
                    src="https://images.unsplash.com/photo-1495384441431-2394f1c22f8e?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8b2xkJTIwbXVzbGltfGVufDB8fDB8&auto=format&fit=crop&w=500&q=60"
                    />
                    <div>
                        <h6 style="font-family: 'Roboto Condensed', sans-serif;" class="block text-black text-2xl font-semibold m-5">
                            Monthly stipend for widows
                        </h6>
                        <p style="font-family: 'Inter', sans-serif;" class="m-5 text-gray-700">
                            Lorem ipsum dolor sit amet  dolor sit amet consectetur adipisicing elit dolor sit amet. Exercitationem corrupti aperiam. Repellat optio amet ipsa.
                        </p>
                    </div>
                </div>
                <div class="group rounded hover:shadow-2xl md:w-4/12 w-full mb-10 mx-5 ease-linear transition-all duration-150">
                    <img
                    alt="..."
                    class="max-w-full rounded-t-lg"
                    src="https://images.unsplash.com/photo-1459183885421-5cc683b8dbba?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NXx8b3JwaGFufGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                    />
                    <div>
                        <h6 style="font-family: 'Roboto Condensed', sans-serif;" class="block text-black text-2xl font-semibold m-5">
                            Sponsoring of the Orphans
                        </h6>
                        <p style="font-family: 'Inter', sans-serif;" class="m-5 text-gray-700">
                            Lorem ipsum dolor sit amet  dolor sit amet consectetur adipisicing elit dolor sit amet. Exercitationem corrupti aperiam. Repellat optio amet ipsa.
                        </p>
                    </div>
                </div>
              </div>
              <div class="flex flex-col md:flex-row">
                <div class="group rounded hover:shadow-2xl md:w-4/12 w-full mb-10 mx-5 ease-linear transition-all duration-150">
                    <img
                    alt="..."
                    class="max-w-full rounded-t-lg"
                    src="https://images.unsplash.com/photo-1519494080410-f9aa76cb4283?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjR8fGhvc3BpdGFsfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                    />
                    <div>
                        <h6 style="font-family: 'Roboto Condensed', sans-serif;" class="block text-black text-2xl font-semibold m-5">
                            Renovation of the Muslim Hospital
                        </h6>
                        <p style="font-family: 'Inter', sans-serif;" class="m-5 text-gray-700">
                            Lorem ipsum dolor sit amet  dolor sit amet consectetur adipisicing elit dolor sit amet. Exercitationem corrupti aperiam. Repellat optio amet ipsa.
                        </p>
                    </div>
                </div>
                <div class="group rounded hover:shadow-2xl md:w-4/12 w-full mb-10 mx-5 ease-linear transition-all duration-150">
                    <img
                    alt="..."
                    class="max-w-full rounded-t-lg"
                    src="https://images.unsplash.com/photo-1523737000522-87c15d8efcc4?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTR8fHBvdmVydHl8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                    />
                    <div>
                        <h6 style="font-family: 'Roboto Condensed', sans-serif;" class="block text-black text-2xl font-semibold m-5">
                            Paying of hospital bil of the less priviledge
                        </h6>
                        <p style="font-family: 'Inter', sans-serif;" class="m-5 text-gray-700">
                            Lorem ipsum dolor sit amet  dolor sit amet consectetur adipisicing elit dolor sit amet. Exercitationem corrupti aperiam. Repellat optio amet ipsa.
                        </p>
                    </div>
                </div>
                <div class="group rounded hover:shadow-2xl md:w-4/12 w-full mb-10 mx-5 ease-linear transition-all duration-150">
                    <img
                    alt="..."
                    class="max-w-full rounded-t-lg"
                    src="https://images.unsplash.com/photo-1570933041501-fcd6c3c66c49?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mzd8fGdyYXZleWFyZHxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                    />
                    <div>
                        <h6 style="font-family: 'Roboto Condensed', sans-serif;" class="block text-black text-2xl font-semibold m-5">
                            Building of the Muslim Grave yard
                        </h6>
                        <p style="font-family: 'Inter', sans-serif;" class="m-5 text-gray-700">
                            Lorem ipsum dolor sit amet  dolor sit amet consectetur adipisicing elit dolor sit amet. Exercitationem corrupti aperiam. Repellat optio amet ipsa.
                        </p>
                    </div>
                </div>
              </div>
        </div>
      </section>
</main>
@endsection