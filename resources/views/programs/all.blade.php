<x-app-layout>
    <div   class=" mt-8 bg-white dark:bg-green-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-2">
            @php
                $ruta = '/images/programs/';
            @endphp
            @foreach ($programs as $program)
                

                    <a  href="#" class=" m-5 flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img  style="max-width: 150px;" class="object-cover rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset($ruta . $program->program_image) }}" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$program->name}}</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lugar del Programa: {{$program->place_event}}</p>
                            <button data-modal-toggle="defaultModal" id="{{$program->id}}" class="btnShow text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                Ver programa
                            </button>
                        </div>
                    </a>
                
            @endforeach

            
           
        </div>
    </div>
    @include('programs.showProgram')

    <script>
        let btnShow = document.querySelectorAll('.btnShow')
        let header = document.getElementById('modalHeader'),
        headerContent = document.getElementById('modalHeader'),
                body = document.getElementById('modalBody'),
                footer = document.getElementById('modalFooter'),
                loader = document.getElementById('status'),
                btnInscribe = document.getElementById('btnInscribe'),
                btnDeclive = document.getElementById('btnDeclive')

        document.addEventListener('click' , e => {
            
            btnShow.forEach(btn => {
                if (e.target == btn) {
                    fetch(`../programs/show/${btn.id}`)
                    .then((response) => response.json())
                    .then((data) => {
                        header.classList.remove('hidden')
                        body.classList.remove('hidden')
                        footer.classList.remove('hidden')
                        loader.classList.add('hidden')

                        let finish = ''

                        if (data.start_date !== data.finish_date) {
                            finish = `<br>Fecha de finalización: ${data.finish_date}`
                        }
                        

                        headerContent.innerHTML = `<h3 class="text-xl font-semibold text-gray-900 dark:text-white">${data.name}</h3>`
                        body.innerHTML = `<p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                Lugar del evento: ${data.place_event} <br>
                                                Fecha inicio: ${data.start_date} 
                                                ${finish} <br>
                                                Hora de inicio:  ${data.start_time} <br>
                                                Hora de finalización:  ${data.finish_time} <br>
                                                Límite de voluntarios:  ${data.volunteer_limit} <br>
                                                Por participar en este programa podras ganar ${data.program_points} para canjearlos por premios. 
                                                </p> `
                        btnInscribe.innerHTML =  `
                                                
                
                                                    <a href="{{route('users.index')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Inscribirme</a>
                                                
                                           
                                                `
                    });

                }else if(e.target == btnDeclive){
                    header.classList.add('hidden')
                        body.classList.add('hidden')
                        footer.classList.add('hidden')
                        loader.classList.remove('hidden')
                }
            });
        })

    </script>


</x-app-layout>
