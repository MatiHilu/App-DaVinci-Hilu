
@include('includes.header-client')

<main class="container-flow px-4 my-4">
  <!-- Sección notificaciones -->
  <div class="row">    
        @if (session('succes'))
          <div class="alert alert-success" role="alert">
            {{ session('succes') }}
          </div>
        @elseif(session('danger'))
          <div class="alert alert-danger" role="alert">
            {{ session('danger') }}
          </div>
        @endif    
  </div>
  <!-- Fin Sección notificaciones -->

  <div class="text-center">
    <p>Para acceder a la vista de tu cv/portfolio debes tener un slug, si no lo tienes haz clic en el botón para darte un slug</p>
    <a class="btn btn-primary" href="{{ url('/my-portfolio-edit')  }}" role="button">Obtener slug</a>
  </div>

  
  <!-- Mostrar datos de usuario -->
  <div class="row border border-primary rounded p-3 m-3">
       <!-- <div class="col-12 text-center">-->
       <p class="h4">Datos personales</p>
        <div class="col-12 col-md-6 h4 text-center my-auto">
          
          <p class="col-12  h5">Nombre: {{ $user->name }}</p>
          <p class="col-12  h5">Email: {{ $user->email }}</p>	
          <p class="col-12  h5">Teléfono: {{ $user->tel }}</p>	
          <p class="col-12  h5">Título de trabajo: {{ $user->title_job }}</p>
         </div>
          
      
        <div class="col-3">
          <p class="h4">Foto de perfil</p>
          @if ($user->image)
            <img class="card-img-top" src="{{ $user->get_image }}" alt="{{ $user->name }}">
          @else
            <img class="card-img-top" src="https://www.pngall.com/wp-content/uploads/5/Profile-Avatar-PNG-Free-Download.png" alt="Card image cap">
          @endif
        </div>
        <div class="col-3">
          <p class="h4">Foto de about me</p>
          @if ($user->image_about_me)
            <img class="card-img-top" src="{{ $user->get_image2 }}" alt="{{ $user->name }}">
          @else
            <img class="card-img-top" src="https://www.pngall.com/wp-content/uploads/5/Profile-Avatar-PNG-Free-Download.png" alt="Card image cap">
          @endif
       </div>
        
  </div>
  <!-- Fin Mostrar datos de usuario -->



  <!-- Sección de crear y mostrar habilidades -->
  <div class="row my-4 border border-primary rounded p-3 m-3">
        <h3>Habilidades</h3>
          <!-- Mostrar skills -->
            @foreach ($user->skill as $skills)
              <div class="col-3">
                <p class="h5">{{ $skills->name }}: {{ $skills->percent }}%</p>
              </div>
            @endforeach
          <!-- Fin Mostrar skills -->
        <!-- Inicio Crear nueva habilidad -->
        <form action="{{ route('newSkill') }}"
                method="POST">

                <div class="form-row mt-5">
                    <div class="col-md-12">
                        <label class="h5 font-bold mb-2" >
                            Nueva Habilidad
                        </label>
                        <input required id="" type="text"  name="name" class="form-control" placeholder="Nombre de habilidad">
                    @error('name')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                        <input required id="" type="numer"  name="percent" class="form-control" placeholder="Nivel de hábilidad 1% - 100%">
                    @error('percent')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                    </div>

                </div>
                @csrf
                <button class="bg-success text-white btn btn-lg mt-3" type="submit" class="site-btn">Agregar</button>
            </form>
        <!-- Fin Crear nueva habilidad -->

          
  </div> 
  <!-- Fin Sección de crear y mostrar habilidades -->

  <!-- Sección Actualizar o Borrar habilidad -->
  <div class="border border-primary rounded p-3 m-3">
    <h3>Actualizar o Borrar habilidad</h3>
        @foreach ($user->skill as $skill)
        <div class="border border-secondary rounded p-4 my-2">
          <form action="{{ route('updateSkillClient') }}" method="POST">
            <input type="hidden" name="id" value="{{ $skill->id }}">
                <div class="form-row">
                    <div class="col-md-6">
                        <label class="text-gray-700 text-sm font-bold mb-2" >
                            Habilidades
                        </label>
                        <input required id="" type="text"  name="name" class="form-control" value="{{ old('name', $skill->name) }}">
                        @error('name')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                        <input required id="" type="text"  name="percent" class="form-control" value="{{ old('percent', $skill->percent) }}">
                        @error('percent')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                        
                    </div>

                </div>
                @csrf
                @method('PUT')
                <button class="bg-warning btn btn-lg mt-3" type="submit" class="site-btn">Actualizar</button>
            </form>
            <form action="{{ route('deleteSkill') }}"
                method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="skill_id" value="{{ $skill->id }}">
                <button class="bg-danger btn btn-lg" type="submit" class="site-btn">Eliminar</button>
            </form>
            </div>
        @endforeach
  </div>
 <!-- Fin Sección Actualizar o Borrar habilidad -->      



  <!-- Inicio Sección de crear y mostrar habilidad profesional -->
  <div class="row my-4 border border-primary rounded p-3 m-3">
        <h3>Hábilidades profesionales</h3>
            <!-- Mostrar habilidad profesional -->
            @foreach ($user->professional as $prof)
              <div class="col-3">
                <h5 class="pr-skill-name">{{ $prof->name }} = {{ $prof->percent }} %</h5>
              </div>
            @endforeach
            <!-- Fin Mostrar habilidad profesional -->
    <!-- Crear nueva habilidad -->    
        <form action="{{ route('newProfessional') }}"
                method="POST">

                <div class="form-row mt-5">
                    <div class="col-md-12">
                        <label class="h4 font-bold mb-2" >
                            Nueva Habilidad profesional
                        </label>
                        <input required id="" type="text"  name="name" class="form-control" placeholder="Nombre de habilidad profeisonal">
                    @error('name')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                        <input required id="" type="numer"  name="percent" class="form-control" placeholder="Nivel de hábilidad profesional 1% - 100%">
                    @error('percent')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                    </div>

                </div>
                @csrf
                <button class="bg-success text-white btn btn-lg mt-3" type="submit" class="site-btn">Agregar</button>
            </form>
    <!-- Fin Crear nueva habilidad -->

            
        

  </div>
  <!-- Fin Sección de crear y mostrar habilidad profesional -->
  
  <!-- Sección Actualizar o Borrar habilidad profesional -->
  <div class="border border-primary rounded p-3 m-3">
    <h3>Actualizar o Borrar habilidad profesional</h3>
      @foreach ($user->professional as $professional)
      <div class="border border-secondary rounded p-4 my-2">
            <form action="{{ route('updateProfessionalClient') }}" method="POST" class="my-2">
              <input type="hidden" name="id" value="{{ $professional->id }}">
                <div class="form-row">
                    <div class="col-md-6">
                        <label class="text-gray-700 text-sm font-bold mb-2" >
                            Habilidad profesional
                        </label>
                        <input required id="" type="text"  name="name" class="form-control" value="{{ old('name', $professional->name) }}">
                      @error('name')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror 
                        <input required id="" type="text"  name="percent" class="form-control" value="{{ old('percent', $professional->percent) }}">
                        @error('percent')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                        
                  </div>
                </div>
                @csrf
                @method('PUT')
                <button class="bg-warning btn btn-lg mt-3" type="submit" class="site-btn">Actualizar</button>
            </form>
            <form action="{{ route('deleteProfessional') }}"
                method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="professional_id" value="{{ $professional->id }}">
                <button class="bg-danger btn btn-lg" type="submit" class="site-btn">Eliminar</button>
            </form>
        </div>
        @endforeach
  </div>
  <!-- Fin Sección Actualizar o Borrar habilidad profesional -->
      
                
  <!-- Sección de crear y mostrar What i do -->
  <div class="row my-4 border border-primary rounded p-3 m-3">
        <h3>What i do</h3>
                  <!-- Mostrar What i do -->
                    @foreach ($user->whatido as $what)
                        <div class="col-sm-4">
                            <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <i class="fa fa-bullseye purple-color"></i>
                                <h3>{{ $what->title }}</h3>
                                <p>{{ $what->description }}</p>
                            </div>
                        </div>
                    @endforeach
                  <!-- Fin Mostrar What i do -->
        <!-- Inicio Crear What i do -->
        <form action="{{ route('newWhatido') }}"
                method="POST">

                <div class="form-row">
                    <div class="col-md-12 mt-5">
                        <label class="h4 font-bold mb-2" >
                            Nuevo Que hago
                        </label>
                        <input required id="" type="text"  name="title" class="form-control" placeholder="Título de que hago">
                    @error('title')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                        <input required id="" type="numer"  name="description" class="form-control" placeholder="Contenido">
                    @error('description')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                    </div>

                </div>
                @csrf
                <button class="bg-success text-white btn btn-lg mt-3" type="submit" class="site-btn">Agregar</button>
            </form>
        <!-- Fin Crear What i do -->

          
  </div> 
  <!-- Fin Sección de crear y mostrar What i do -->

  <!-- Sección Actualizar o Borrar What i do -->
  <div class="border border-primary rounded p-3 m-3">
        <h3>Actualizar o Borrar what i do</h3>
        @foreach ($user->whatido as $what)
        <div class="border border-secondary rounded p-4 my-2">
          <form action="{{ route('updateWhatidoClient') }}" method="POST" class="my-2">
            <input type="hidden" name="id" value="{{ $what->id }}">
                <div class="form-row">
                    <div class="col-md-6">
                        <label class="text-gray-700 text-sm font-bold mb-2" >
                            What i do
                        </label>
                        <input required id="" type="text"  name="title" class="form-control" value="{{ old('title', $what->title) }}">
                        @error('title')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                        <input required id="" type="text"  name="description" class="form-control" value="{{ old('description', $what->description) }}">
                        @error('description')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                        
                    </div>

                </div>
                @csrf
                @method('PUT')
                <button class="bg-warning btn btn-lg mt-3" type="submit" class="site-btn">Actualizar</button>
            </form>
            <form action="{{ route('deleteWhatido') }}"
                method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="what_id" value="{{ $what->id }}"> 
                <button class="bg-danger btn btn-lg" type="submit" class="site-btn">Eliminar</button>
            </form>
        </div>
        @endforeach
  </div>
 <!-- Fin Sección Actualizar o Borrar What i do --> 



</main>





@include('admin.includes.footer')