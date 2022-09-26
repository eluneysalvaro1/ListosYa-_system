<x-app-layout>
   
  <style>
    #img{
      width: 750px;
      height: 150px;
      object-fit: cover;
      border-radius: 10px 10px 0px 0px;
    }
    #container{
      display: flex;
      justify-content: space-evenly;
    }
    #card{
      margin-top: 3rem;
      width: 25%;
      max-width: 400px;
      border-radius: 10px;
      box-shadow: -1px 0px 12px -3px rgba(0,0,0,0.75);
      -webkit-box-shadow: -1px 0px 12px -3px rgba(0,0,0,0.75);
      -moz-box-shadow: -1px 0px 12px -3px rgba(0,0,0,0.75);
    }
    .gestion{
      padding: 15px 25px; 
      background: #12AA8670;
      text-align: center;
      font-weight: 700;
      cursor: pointer;
      border-radius: 0px 0px 10px 10px;
      width: 100%;
    }
    .gestion:hover{
      background: #12AA86;
    }

    .contenedor{
      max-width: 450px;
      margin: auto;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      align-items: center;
      height: 100%;
    } 

  </style>

<div id="container" class="flex">

  <div id="card">
      <div class="contenedor">
              <img id="img" src=" {{asset('../images/people.jpg')}} " alt="">
              <div class="p-6 flex flex-col justify-start">
               <h5 class="text-gray-900 text-xl font-medium mb-2">Gestionar usuarios</h5>
                  <p class="text-gray-700 text-base aling-center" >
                    Apartado creado para gestionar la información general de todos los usuarios del sistema. 
                  </p>
              </div>
              <div class="gestion">
                <a  href=" {{route('users.index')}} ">Gestionar</a>
              </div>
        </div>
    </div>


  <div id="card" class="">
    
            <div class="contenedor" width="100px">
                <img id="img" src=" {{asset('../images/team.jpg')}} " alt="">
              <div class="p-6 flex flex-col justify-start">
                <h5 class="text-gray-900 text-xl font-medium mb-2">Gestionar programas</h5>
                <p class="text-gray-700 text-base aling-center">
                  Apartado creado para gestionar los diferentes programas propuestos desde la organizacion. 
                </p>
              </div>
              <div class="gestion">

                <a  href=" {{route('programs.index')}} ">Gestionar</a>
              </div>
            </div>
</div>


<div id="card" class="">
          <div class="contenedor">
              <img id="img" src=" {{asset('../images/black.jpg')}} " alt="">
            <div class="p-6 flex flex-col justify-start">
              <h5 class="text-gray-900 text-xl font-medium mb-2">Blacklist</h5>
              <p class="text-gray-700 text-base aling-center">
                Gestione a los usuarios ingresados en el apartado de la blacklist.  
              </p>
            </div>
            <div class="gestion" >
              <a href=" {{route('blacklist.index')}} ">Gestionar</a>
            </div>
          </div>
</div>
</div>
</x-app-layout>
