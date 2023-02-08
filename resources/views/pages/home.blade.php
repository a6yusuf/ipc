@extends('layouts.app')

@section('content')
<main>
    <div class="relative pt-16 pb-32 flex content-center items-center justify-center"
      style="min-height: 95vh;">
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
          <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
            <div>
              <h1 class="text-white font-semibold text-6xl" data-aos="zoom-in" style="font-family: 'Roboto Condensed', sans-serif;"> 
                Together we can spread the message of Islam
              </h1>
              <p class="mt-4 text-lg text-gray-300" data-aos="fade-up-right" style="font-family: 'Inter', sans-serif;">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi sint cumque eum cum blanditiis deleniti sapiente, cupiditate enim optio necessitatibus dignissimos, impedit laboriosam quidem porro recusandae? Blanditiis quidem magnam ratione.
              </p>
              <a href="{{url('/about')}}" data-aos="fade-up-left" style="font-family: 'Inter', sans-serif;" class="text-white bg-transparent border border-solid border-white hover:bg-gray-800 hover:text-white active:bg-gray-800 font-bold uppercase text-sm px-6 py-3 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 inline-block mt-5">
                  Learn more
              </a>
            </div>
          </div>
        </div>
      </div>
      <div
        class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
        style="height: 70px;"
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
    
    {{-- Who we are --}}
    <section class="relative py-20">
      <div
        class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
        style="height: 80px;"
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
            {{-- class="text-white fill-current" --}}
            points="2560 0 2560 100 0 100"
          ></polygon>
        </svg>
      </div>
      <div class="container mx-auto px-4">
        <div class="items-center flex flex-wrap">
          <div class="w-full md:w-4/12 ml-auto mr-auto px-4" data-aos="fade-right">
            <img
              alt="..."
              class="max-w-full rounded-lg shadow-lg"
              src="https://images.unsplash.com/photo-1594840781753-e79e739814df?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mnx8Y2VudHJhbCUyMG1vc3F1ZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
            />
          </div>
          <div class="w-full md:w-5/12 ml-auto mr-auto px-4" data-aos="fade-left">
            <div class="md:pr-12">
              {{-- <h3 class="text-3xl font-semibold">Who we are</h3> --}}
              <h2 class="text-4xl font-semibold mb-1" style="font-family: 'Roboto Condensed', sans-serif;">Who we are</h2>
              <p class="mt-4 text-lg leading-relaxed text-gray-600" style="font-family: 'Inter', sans-serif;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ea adipisci facere rem! Necessitatibus, veniam quis nulla magni molestiae reprehenderit sit, odio quos iusto architecto fuga dolores distinctio dolorum vero.
              </p>
              <ul class="list-none mt-6">
                <li class="py-2">
                  <div class="flex items-center">
                    <div>
                      <span
                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-white bg-blue-900 mr-3"
                        ><i class="fas fa-fingerprint"></i
                      ></span>
                    </div>
                    <div>
                      <h4 class="text-gray-600" style="font-family: 'Inter', sans-serif;">
                        Helping the needy
                      </h4>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="flex items-center">
                    <div>
                      <span
                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-white bg-blue-900 mr-3"
                        ><i class="fab fa-html5"></i
                      ></span>
                    </div>
                    <div>
                      <h4 class="text-gray-600" style="font-family: 'Inter', sans-serif;">Spreading the dawah</h4>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="flex items-center">
                    <div>
                      <span
                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-white bg-blue-900 mr-3"
                        ><i class="far fa-paper-plane"></i
                      ></span>
                    </div>
                    <div>
                      <h4 class="text-gray-600" style="font-family: 'Inter', sans-serif;">Building mosques</h4>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- Our Projects --}}
    <section class="pt-10 pb-20">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center text-center mb-20">
          <div class="w-full lg:w-6/12 px-2 flex flex-col justify-center items-center">
            <h2 class="text-4xl font-semibold mb-1" style="font-family: 'Roboto Condensed', sans-serif;">Our Projects</h2>
            <p class="m-2" style="font-family: 'Inter', sans-serif;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum quam exercitationem nihil earum veritatis dolorum sequi, qui veniam culpa nesciunt asperiores consequatur!</p>
          </div>
        </div>
        <div class="flex flex-wrap">
            <div class="w-full mb-5 md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4 shadow-lg" data-aos="flip-right">
                <div class="flex flex-col max-w-md bg-white px-8 py-6 rounded-xl space-y-5 items-center">
                    <img class="w-full rounded-md" style="max-height: 185px" src="https://images.unsplash.com/photo-1550751187-da63f7e2b4eb?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MzJ8fGlzbGFtfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="motivation" />
                    <p class="text-center leading-relaxed" style="font-family: 'Inter', sans-serif;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis labore libero quidem provident adipisci hic. Odio possimus nam similique ea ut cumque! Asperiores iste voluptate maxime ipsa magnam vitae eaque.</p>
                    {{-- <button class="px-24 py-4 bg-gray-900 rounded-md text-white text-sm focus:border-transparent">Read article</button> --}}
                </div>
            </div>
            <div class="w-full mb-5 md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4 shadow-lg" data-aos="flip-right">
                <div class="flex flex-col max-w-md bg-white px-8 py-6 rounded-xl space-y-5 items-center">
                    <img class="w-full rounded-md" style="max-height: 185px" src="https://images.unsplash.com/photo-1522219406764-db207f1f7640?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NHx8bXVzbGltfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="motivation" />
                    <p class="text-center leading-relaxed" style="font-family: 'Inter', sans-serif;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis labore libero quidem provident adipisci hic. Odio possimus nam similique ea ut cumque! Asperiores iste voluptate maxime ipsa magnam vitae eaque.</p>
                    {{-- <button class="px-24 py-4 bg-gray-900 rounded-md text-white text-sm focus:border-transparent">Read article</button> --}}
                </div>
            </div>
            <div class="w-full mb-5 md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4 shadow-lg" data-aos="flip-right">
                <div class="flex flex-col max-w-md bg-white px-8 py-6 rounded-xl space-y-5 items-center">
                    <img class="w-full rounded-md" style="max-height: 185px" src="https://images.unsplash.com/photo-1605725961202-18c2678ea41e?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTY4fHxtdXNsaW18ZW58MHx8MHw%3D&auto=format&fit=crop&w=500&q=60" alt="motivation" />
                    <p class="text-center leading-relaxed" style="font-family: 'Inter', sans-serif;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis labore libero quidem provident adipisci hic. Odio possimus nam similique ea ut cumque! Asperiores iste voluptate maxime ipsa magnam vitae eaque.</p>
                    {{-- <button class="px-24 py-4 bg-gray-900 rounded-md text-white text-sm focus:border-transparent">Read article</button> --}}
                </div>
            </div>
            <div class="w-full mb-5 md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4 shadow-lg" data-aos="flip-right">
                <div class="flex flex-col max-w-md bg-white px-8 py-6 rounded-xl space-y-5 items-center">
                    <img class="w-full rounded-md" style="max-height: 185px" src="https://images.unsplash.com/photo-1564813824669-4527a14d4018?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTMzfHxtdXNsaW18ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="motivation" />
                    <p class="text-center leading-relaxed" style="font-family: 'Inter', sans-serif;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis labore libero quidem provident adipisci hic. Odio possimus nam similique ea ut cumque! Asperiores iste voluptate maxime ipsa magnam vitae eaque.</p>
                    {{-- <button class="px-24 py-4 bg-gray-900 rounded-md text-white text-sm focus:border-transparent">Read article</button> --}}
                </div>
            </div>
        </div>
      </div>
    </section>
    {{-- End of Our Projects --}}
   
    {{-- Donate Hero --}}
    <div class="relative pt-16 pb-32 mt-10 flex content-center items-center justify-center" style="min-height: 15vh;">
        <div
            class="absolute top-0 w-full h-full bg-bottom bg-cover"
            style='background-image: url("https://images.unsplash.com/photo-1575751639353-e292e76daca3?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTExfHxtdXNsaW18ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60");'
        >
            <span
            id="blackOverlay"
            class="w-full h-full absolute opacity-40 bg-black"
            ></span>
        </div>
        <div class="container relative mx-auto">
            <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                <div class="pr-12">
                <h1 class="text-white font-bold text-5xl" data-aos="zoom-in-down" style="font-family: 'Roboto Condensed', sans-serif;">
                    Our objective is to build several mosques and institutes of learning.
                </h1>
                {{-- <p class="mt-4 text-lg text-gray-100 font-semibold">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi sint cumque eum cum blanditiis, impedit laboriosam quidem porro recusandae? Blanditiis quidem magnam ratione.
                </p> --}}
                <a href="#" style="font-family: 'Inter', sans-serif;" data-aos="fade-up-left" class="text-white bg-transparent border border-solid border-white hover:bg-gray-700 hover:text-white active:bg-gray-700 font-bold uppercase text-sm px-6 py-3 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 inline-block mt-5">
                    Donate to support our projects
                </a>
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
                {{-- class="text-gray-300 fill-current" --}}
                points="2560 0 2560 100 0 100"
            ></polygon>
            </svg>
        </div>
    </div>
    {{-- Donate Hero Ends--}}

    <section class="pt-20 pb-20">
        <div class="flex flex-wrap justify-center text-center mb-20">
            <div class="w-full lg:w-6/12 px-2 flex flex-col justify-center items-center">
              <h2 class="text-4xl font-semibold mb-1" style="font-family: 'Roboto Condensed', sans-serif;">Our Learning Institutes</h2>
              <p class="m-2" style="font-family: 'Inter', sans-serif;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum quam exercitationem nihil earum veritatis dolorum sequi, qui veniam culpa nesciunt asperiores consequatur!</p>
            </div>
          </div>
        <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center" data-aos="fade-right">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
            >
                <div class="px-4 py-5 flex-auto">
                    <img class="w-full rounded-md" style="max-height: 250px" src="https://images.unsplash.com/photo-1598723106443-27f8bd0591b4?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mzd8fG11c2xpbXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="motivation" />
                    <h6 class="text-xl font-semibold" style="font-family: 'Roboto Condensed', sans-serif;">Bilaal Institute, Sapele</h6>
                    <p class="mt-2 mb-4 text-gray-600" style="font-family: 'Inter', sans-serif;">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam exercitationem possimus perspiciatis nobis molestiae natus laboriosam ut.
                    </p>
                </div>
            </div>
            </div>
            <div class="w-full md:w-4/12 px-4 text-center" data-aos="fade-up">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
            >
                <div class="px-4 py-5 flex-auto">
                    <img class="w-full rounded-md" style="max-height: 250px" src="https://images.unsplash.com/photo-1589995635011-078e0bb91d11?ixid=MXwxMjA3fDB8MHxzZWFyY2h8ODB8fHF1cmFufGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="motivation" />
                    <h6 class="text-xl font-semibold" style="font-family: 'Roboto Condensed', sans-serif;">Onitsha Central Madrasah</h6>
                    <p class="mt-2 mb-4 text-gray-600" style="font-family: 'Inter', sans-serif;">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos quasi laudantium, esse deleniti porro optio quae et voluptate.
                    </p>
                </div>
            </div>
            </div>
            <div class="pt-6 w-full md:w-4/12 px-4 text-center" data-aos="fade-left">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
            >
                <div class="px-4 py-5 flex-auto">
                    <img class="w-full rounded-md" style="max-height: 250px" src="https://images.unsplash.com/photo-1542967139-b45bb326ec87?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8NzJ8fHF1cmFufGVufDB8fDB8&auto=format&fit=crop&w=500&q=60" alt="motivation" />
                    <h6 class="text-xl font-semibold" style="font-family: 'Roboto Condensed', sans-serif;">Ebonyi Madrasah</h6>
                    <p class="mt-2 mb-4 text-gray-600" style="font-family: 'Inter', sans-serif;">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos quasi laudantium, esse deleniti porro optio quae et voluptate.
                    </p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
    {{-- Dawah Hero --}}
    <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 10vh;">
        <div
            class="absolute top-0 w-full h-full bg-bottom bg-cover"
            style='background-image: url("https://images.unsplash.com/photo-1590076215667-875d4ef2d7de?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8cXVyYW58ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60");'
        >
            <span
            id="blackOverlay"
            class="w-full h-full absolute opacity-70 bg-black"
            ></span>
        </div>
        <div class="container relative mx-auto">
            <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto ">
                <div class="pr-12">
                <h1 class="text-white font-bold text-5xl" style="font-family: 'Roboto Condensed', sans-serif;">
                    Our Dawah Activities
                </h1>
                {{-- <p class="mt-4 text-lg text-gray-100 font-semibold">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi sint cumque eum cum blanditiis, impedit laboriosam quidem porro recusandae? Blanditiis quidem magnam ratione.
                </p> --}}
                <p class="text-white text-base mt-5" style="font-family: 'Inter', sans-serif;">
                    Be sure to browse through our dawah activities regularly for clear islamic knowledge
                </p>
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
                {{-- class="text-gray-300 fill-current" --}}
                points="2560 0 2560 100 0 100"
            ></polygon>
            </svg>
        </div>
    </div>
    {{-- Dawah Hero Ends--}}
    {{-- Our dawah activities --}}
    <section class="pt-20 pb-20">
            <div class="flex flex-wrap justify-center" data-aos="fade-up-left">
                <div class="lg:pt-12 pt-6 w-full px-4 md:w-9/12">
                    <div class="flex flex-col md:flex-row min-w-0 break-words bg-white w-full mb-2">
                        <div class="px-4 py-5 flex-auto">
                            <img class="w-full rounded-md shadow-lg" style="max-height: 250px" src="https://images.unsplash.com/photo-1590076215667-875d4ef2d7de?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8cXVyYW58ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="motivation" />
                        </div>
                        <div class="px-4 py-5 flex-auto">    
                            <h3 class="text-xl font-semibold mb-2" style="font-family: 'Roboto Condensed', sans-serif;">Daily tahfeez for both young and adult</h3>
                            <p class="mt-2 mb-4 text-gray-600" style="font-family: 'Inter', sans-serif;">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam exercitationem possimus perspiciatis nobis molestiae natus laboriosam ut.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap justify-center" data-aos="fade-up-left">
                <div class="lg:pt-12 pt-6 w-full px-4 md:w-9/12">
                    <div class="flex flex-col md:flex-row min-w-0 break-words bg-white w-full mb-2">
                        <div class="px-4 py-5 flex-auto">
                            <img class="w-full rounded-md shadow-lg" style="max-height: 250px" src="https://images.unsplash.com/photo-1607424985774-71bd31a7d2e6?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mjl8fHF1cmFufGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="motivation" />
                        </div>
                        <div class="px-4 py-5 flex-auto">    
                            <h3 class="text-xl font-semibold mb-2" style="font-family: 'Roboto Condensed', sans-serif;">Weekly Tafsir class</h3>
                            <p class="mt-2 mb-4 text-gray-600" style="font-family: 'Inter', sans-serif;">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam exercitationem possimus perspiciatis nobis molestiae natus laboriosam ut.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap justify-center" data-aos="fade-up-left">
                <div class="lg:pt-12 pt-6 w-full px-4 md:w-9/12">
                    <div class="flex flex-col md:flex-row min-w-0 break-words bg-white w-full mb-2">
                        <div class="px-4 py-5 flex-auto">
                            <img class="w-full rounded-md shadow-lg" style="max-height: 250px" src="https://images.unsplash.com/photo-1565890238487-8b2e33754ca0?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NXx8ZGF0ZSUyMGZydWl0fGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="motivation" />
                        </div>
                        <div class="px-4 py-5 flex-auto">    
                            <h3 class="text-xl font-semibold mb-2" style="font-family: 'Roboto Condensed', sans-serif;">Monday and Thursday Iftar</h3>
                            <p class="mt-2 mb-4 text-gray-600" style="font-family: 'Inter', sans-serif;">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam exercitationem possimus perspiciatis nobis molestiae natus laboriosam ut.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    {{-- End of Our dawah activities --}}
    {{-- Our mission --}}
    <section class="pb-20 relative block bg-gray-900">
        <div
            class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px; display: none;"
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
                class="text-gray-900 fill-current"
                points="2560 0 2560 100 0 100"
            ></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4 lg:pt-24 lg:pb-12">
            <div class="flex flex-wrap mt-12 justify-center">
            <div class="w-full lg:w-3/12 px-4 text-center" data-aos="zoom-in-down" data-aos-anchor-placement="bottom-bottom">
                <div
                class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
                >
                <i class="fas fa-medal text-xl"></i>
                </div>
                <h6 class="text-xl mt-5 font-semibold text-white" style="font-family: 'Roboto Condensed', sans-serif;">
                Our Mission
                </h6>
                <p class="mt-2 mb-4 text-gray-500" style="font-family: 'Inter', sans-serif;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dignissimos aliquam facilis sapiente hic accusamus sed impedit corporis similique commodi aperiam velit neque repellendus enim quidem autem veniam maiores a.
                </p>
            </div>
            <div class="w-full lg:w-3/12 px-4 text-center" data-aos="zoom-in-down" data-aos-anchor-placement="bottom-bottom">
                <div
                class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
                >
                <i class="fas fa-poll text-xl"></i>
                </div>
                <h5 class="text-xl mt-5 font-semibold text-white" style="font-family: 'Roboto Condensed', sans-serif;">
                Our Objective
                </h5>
                <p class="mt-2 mb-4 text-gray-500" style="font-family: 'Inter', sans-serif;">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta harum temporibus consequatur quibusdam illo, fuga doloremque tenetur minus mollitia in amet animi possimus facere beatae, perspiciatis aut, deleniti assumenda cum.
                </p>
            </div>
            <div class="w-full lg:w-3/12 px-4 text-center" data-aos="zoom-in-down" data-aos-anchor-placement="bottom-bottom">
                <div
                class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
                >
                <i class="fas fa-lightbulb text-xl"></i>
                </div>
                <h5 class="text-xl mt-5 font-semibold text-white" style="font-family: 'Roboto Condensed', sans-serif;">
                  Our Goal
                </h5>
                <p class="mt-2 mb-4 text-gray-500" style="font-family: 'Inter', sans-serif;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus quidem possimus libero sunt expedita provident reiciendis repudiandae blanditiis esse tenetur fugiat accusantium laborum, voluptas, dicta debitis fugit corrupti nesciunt quisquam?
                </p>
            </div>
            <div class="flex flex-col md:flex-row text-center" style="margin:50px;">
                <p class="mt-4 text-lg px-6 py-3 text-gray-300" style="font-family: 'Roboto Condensed', sans-serif;">Contribute to the spread of Islam by making a donation</p>
                <a href="/donate" style="font-family: 'Inter', sans-serif;" class="text-white bg-transparent border border-solid animate-bounce border-white hover:bg-gray-800 hover:text-white active:bg-gray-800 font-bold uppercase text-sm px-6 py-3 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 inline-block mt-5">
                    Donate 
                </a>
            </div>
        </div>
        </div>
    </section>
    {{-- End of our mission --}}
  </main>
@endsection