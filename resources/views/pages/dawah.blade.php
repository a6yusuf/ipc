@extends('layouts.app')
@section('title', 'Dawah')

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
                Dawah
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
    {{-- Our dawah --}}
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
                  src="https://images.unsplash.com/photo-1559122998-0f0ec479a9f7?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8MzF8fG11c2xpbXxlbnwwfHwwfA%3D%3D&auto=format&fit=crop&w=500&q=60"
                />
              </div>
              <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                <div class="md:pr-12">
                  <h2 class="text-3xl font-semibold mb-1 italic" style="font-family: 'Roboto Condensed', sans-serif;">All about our dawah</h2>
                  <p style="font-family: 'Inter', sans-serif;" class="mt-4 text-lg leading-relaxed text-gray-600" style="font-family: 'Inter', sans-serif;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ea adipisci facere rem! Necessitatibus, veniam quis nulla magni molestiae reprehenderit sit, odio quos iusto architecto fuga dolores distinctio dolorum vero.
                  </p>
                </div>    
              </div>
          </div>
        </div>
    </section>
    {{-- Dawah cards --}}
    <section>
        <div class="container mx-auto px-4 md:w-10/12 w-full">
            <div class="flex flex-wrap justify-center text-center mb-10">
                <div class="w-full lg:w-6/12 px-2 flex flex-col justify-center items-center">
                  <h2 class="text-4xl font-semibold mb-1" style="font-family: 'Roboto Condensed', sans-serif;">Our Dawah</h2>
                  <p style="font-family: 'Inter', sans-serif;" class="m-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inihil dolorum sequi, qui veniam culpa nesciunt asperiores consequatur!</p>
                </div>
            </div>
            <div class="flex flex-col md:flex-row">
                <div class="group-box rounded hover:shadow-2xl md:w-4/12 w-full mb-10 mx-5 relative ease-linear transition-all duration-150">
                    <img
                    alt="..."
                    class="max-w-full rounded-t-lg"
                    src="https://images.unsplash.com/photo-1586767003402-8ade266deb64?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NXx8aXNsYW1pY3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                    />
                    <div class="location bg-white shadow-2xl rounded absolute top-48 left-5 text-black text-base p-2 flex justify-center items-center ease-linear transition-all duration-150" style="width: fit-content; height: 70px; font-size: 30px; font-family: 'Roboto Condensed', sans-serif;">Enugu</div>
                    <div>
                        {{-- <h6 class="block text-black text-2xl font-medium m-5 text-center">
                            Tahfeez Programme
                        </h6> --}}
                        <p style="font-family: 'Inter', sans-serif;" class="m-5 text-gray-700">
                            Lorem ipsum dolor sit amet  dolor sit amet consectetur adipisicing elit dolor sit amet. Exercitationem corrupti aperiam. Repellat optio amet ipsa.
                        </p>
                    </div>
                </div>
                <div class="group-box rounded hover:shadow-2xl md:w-4/12 w-full mb-10 mx-5 relative ease-linear transition-all duration-150">
                    <img
                    alt="..."
                    class="max-w-full rounded-t-lg"
                    src="https://images.unsplash.com/photo-1570206916435-745fc43bb9c1?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTN8fG11c2xpbXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                    />
                    <div class="location bg-white shadow-2xl rounded absolute top-48 left-5 text-black text-base p-2 flex justify-center items-center ease-linear transition-all duration-150" style="width: fit-content; height: 70px; font-size: 30px; font-family: 'Roboto Condensed', sans-serif;">Bayelsa</div>
                    <div>
                        {{-- <h6 class="block text-black text-2xl font-medium m-5 text-center">
                            Tahfeez Programme
                        </h6> --}}
                        <p style="font-family: 'Inter', sans-serif;" class="m-5 text-gray-700">
                            Lorem ipsum dolor sit amet  dolor sit amet consectetur adipisicing elit dolor sit amet. Exercitationem corrupti aperiam. Repellat optio amet ipsa.
                        </p>
                    </div>
                </div>
                <div class="group-box rounded hover:shadow-2xl md:w-4/12 w-full mb-10 mx-5 relative ease-linear transition-all duration-150">
                    <img
                    alt="..."
                    class="max-w-full rounded-t-lg"
                    src="https://images.unsplash.com/photo-1535552081922-631f7dea1e9d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTZ8fG11c2xpbXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                    />
                    <div class="location bg-white shadow-2xl rounded absolute top-48 left-5 text-black text-base p-2 flex justify-center items-center ease-linear transition-all duration-150" style="width: fit-content; height: 70px; font-size: 30px; font-family: 'Roboto Condensed', sans-serif;">Asaba</div>
                    <div>
                        {{-- <h6 class="block text-black text-2xl font-medium m-5 text-center">
                            Tahfeez Programme
                        </h6> --}}
                        <p style="font-family: 'Inter', sans-serif;" class="m-5 text-gray-700">
                            Lorem ipsum dolor sit amet  dolor sit amet consectetur adipisicing elit dolor sit amet. Exercitationem corrupti aperiam. Repellat optio amet ipsa.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row">
                <div class="group-box rounded hover:shadow-2xl md:w-4/12 w-full mb-10 mx-5 relative ease-linear transition-all duration-150">
                    <img
                    alt="..."
                    class="max-w-full rounded-t-lg"
                    src="https://images.unsplash.com/photo-1487800940032-1cf211187aea?ixid=MXwxMjA3fDB8MHxzZWFyY2h8OXx8aXNsYW1pY3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                    />
                    <div class="location bg-white shadow-2xl rounded absolute top-48 left-5 text-black text-base p-2 flex justify-center items-center ease-linear transition-all duration-150" style="width: fit-content; height: 70px; font-size: 30px; font-family: 'Roboto Condensed', sans-serif;">Porthacourt</div>
                    <div>
                        {{-- <h6 class="block text-black text-2xl font-medium m-5 text-center">
                            Tahfeez Programme
                        </h6> --}}
                        <p style="font-family: 'Inter', sans-serif;" class="m-5 text-gray-700">
                            Lorem ipsum dolor sit amet  dolor sit amet consectetur adipisicing elit dolor sit amet. Exercitationem corrupti aperiam. Repellat optio amet ipsa.
                        </p>
                    </div>
                </div>
                <div class="group-box rounded hover:shadow-2xl md:w-4/12 w-full mb-10 mx-5 relative ease-linear transition-all duration-150">
                    <img
                    alt="..."
                    class="max-w-full rounded-t-lg"
                    src="https://images.unsplash.com/photo-1522219406764-db207f1f7640?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjN8fGlzbGFtaWN8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                    />
                    <div class="location bg-white shadow-2xl rounded absolute top-48 left-5 text-black text-base p-2 flex justify-center items-center ease-linear transition-all duration-150" style="width: fit-content; height: 70px; font-size: 30px; font-family: 'Roboto Condensed', sans-serif;">Bayesla</div>
                    <div>
                        {{-- <h6 class="block text-black text-2xl font-medium m-5 text-center">
                            Tahfeez Programme
                        </h6> --}}
                        <p style="font-family: 'Inter', sans-serif;" class="m-5 text-gray-700">
                            Lorem ipsum dolor sit amet  dolor sit amet consectetur adipisicing elit dolor sit amet. Exercitationem corrupti aperiam. Repellat optio amet ipsa.
                        </p>
                    </div>
                </div>
                <div class="group-box rounded hover:shadow-2xl md:w-4/12 w-full mb-10 mx-5 relative ease-linear transition-all duration-150">
                    <img
                    alt="..."
                    class="max-w-full rounded-t-lg"
                    src="https://images.unsplash.com/photo-1512971064777-efe44a486ae0?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjZ8fGlzbGFtaWN8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                    />
                    <div class="location bg-white shadow-2xl rounded absolute top-48 left-5 text-black text-base p-2 flex justify-center items-center ease-linear transition-all duration-150" style="width: fit-content; height: 70px; font-size: 30px; font-family: 'Roboto Condensed', sans-serif;">Uyo</div>
                    <div>
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

<style>
    .group-box:hover > .location {
        top: 10rem;
        background: red;
        color: white;
    }
</style>