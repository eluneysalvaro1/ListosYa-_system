<x-app-layout>
   
  <style>
    #img{
      width: 750px;
      height: 150px;
      object-fit: cover;
      border-radius: 5px 5px 0px 0px;
      
    }
    #card{
      margin-top: 3rem;
    }
    #gestion{
      padding: 15px 25px; 
      background: #12AA8670;
      text-align: center;
      font-weight: 700;
      cursor: pointer;
      border-radius: 0px 0px 5px 5px;
    }

    #gestion:hover{
      background: #12AA86;
    }

  </style>

<div class="flex">

  <div id="card" class="">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="flex justify-center">
              <div class="flex flex-col md:flex-row rounded-lg bg-white shadow-lg" width="100px">
                  <img id="img" src=" {{asset('../images/people.jpg')}} " alt="">
                <div class="p-6 flex flex-col justify-start">
                  <h5 class="text-gray-900 text-xl font-medium mb-2">Gestionar usuarios</h5>
                  <p class="text-gray-700 text-base mb-4 aling-center">
                    Apartado creado para gestionar la información general de todos los usuarios del sistema. 
                  </p>
                </div>
                <a id="gestion" href=" {{route('users.index')}} ">Gestionar</a>
              </div>
            </div>
      </div>
  </div>


  <div id="card" class="">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center">
            <div class="flex flex-col md:flex-row rounded-lg bg-white shadow-lg" width="100px">
                <img id="img" src=" {{asset('../images/team.jpg')}} " alt="">
              <div class="p-6 flex flex-col justify-start">
                <h5 class="text-gray-900 text-xl font-medium mb-2">Gestionar programas</h5>
                <p class="text-gray-700 text-base mb-4 aling-center">
                  Apartado creado para gestionar los diferentes programas propuestos desde la organizacion. 
                </p>
              </div>
              <a id="gestion" href=" {{route('programs.index')}} ">Gestionar</a>
            </div>
          </div>
    </div>
</div>


<div id="card" class="">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="flex justify-center">
          <div class="flex flex-col md:flex-row rounded-lg bg-white shadow-lg" width="100px">
              <img id="img" src=" {{asset('../images/black.jpg')}} " alt="">
            <div class="p-6 flex flex-col justify-start">
              <h5 class="text-gray-900 text-xl font-medium mb-2">Blacklist</h5>
              <p class="text-gray-700 text-base mb-4 aling-center">
                Gestione a los usuarios ingresados en el apartado de la blacklist.  
              </p>
            </div>
            <a id="gestion" href=" {{route('blacklist.index')}} ">Gestionar</a>
          </div>
        </div>
  </div>
</div>
</div>
</x-app-layout>
