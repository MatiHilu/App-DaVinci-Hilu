
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


        <form action="{{ route('updateClient') }}" enctype="multipart/form-data" method="POST" >
            <input type="hidden" name="id" value="{{ $user->id }}">
            <div class="row border border-primary rounded p-3 m-3">

                <div class="col-md-4">                
                    <label class="text-gray-700 text-sm font-bold mb-2" >
                        Nombre y apellido
                    </label>
                    <input id="name" type="text"  name="name" class="form-control" value="{{ old('name', $user->name) }}">
                    @error('name')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="col-md-4">
                    <label class="text-gray-700 text-sm font-bold mb-2" >
                        Slug
                    </label>
                    <input id="slug" type="text"  name="slug" class="form-control" value="{{ old('slug', $user->slug) }}">
                    @error('slug')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4">
                    <label class="text-gray-700 text-sm font-bold mb-2" >
                        Telefono
                    </label>
                    <input id="tel" type="text"  name="tel" class="form-control" value="{{ old('tel', $user->tel) }}">
                    @error('tel')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4">
                    <label class="text-gray-700 text-sm font-bold mb-2" >
                        Direccion
                    </label>
                    <input id="address" type="text"  name="address" class="form-control" value="{{ old('address', $user->address) }}">
                    @error('address')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4">
                    <label class="text-gray-700 text-sm font-bold mb-2" >
                        Titulo laboral
                    </label>
                    <input id="title_job" type="text"  name="title_job" class="form-control" value="{{ old('title_job', $user->title_job) }}">
                    @error('title_job')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <div class="border border-primary rounded p-3 m-3 row">

                
                <div class="col-md-4">
                    <label class="text-gray-700 text-sm font-bold mb-2" >
                        Título de Presentación
                    </label>
                    <input id="presentation" type="text"  name="presentation" class="form-control" value="{{ old('presentation', $user->presentation) }}">
                    @error('presentation')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4">
                    <label class="text-gray-700 text-sm font-bold mb-2" >
                        Título About me
                    </label>
                    <input id="" type="text"  name="titulo_about_me" class="form-control" value="{{ old('titulo_about_me', $user->titulo_about_me) }}">
                    @error('titulo_about_me')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4">
                    <label class="text-gray-700 text-sm font-bold mb-2" >
                    Título What I Do
                    </label>
                    <input id="" type="text"  name="titulo_what_i_do" class="form-control" value="{{ old('titulo_what_i_do', $user->titulo_what_i_do) }}">
                    @error('titulo_what_i_do')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4">
                    <label class="text-gray-700 text-sm font-bold mb-2" >
                    Título Skills
                    </label>
                    <input id="" type="text"  name="titulo_skills" class="form-control" value="{{ old('titulo_skills', $user->titulo_skills) }}">
                    @error('titulo_skills')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4">
                    <label class="text-gray-700 text-sm font-bold mb-2" >
                    Título Professional Skills
                    </label>
                    <input id="" type="text"  name="titulo_professional_skills" class="form-control" value="{{ old('titulo_professional_skills', $user->titulo_professional_skills) }}">
                    @error('titulo_professional_skills')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div>
                
            </div>




            <div class="row border border-primary rounded p-3 m-3">

                <div class="col-md-3">
                    <label class="text-gray-700 text-sm font-bold mb-2" >
                        Facebook
                    </label>
                    <input id="" type="text"  name="link_facebook" class="form-control" value="{{ old('link_facebook', $user->link_facebook) }}">
                </div>

                <div class="col-md-3">
                    <label class="text-gray-700 text-sm font-bold mb-2" >
                        Instagram
                    </label>
                    <input id="" type="text"  name="link_instagram" class="form-control" value="{{ old('link_instagram', $user->link_instagram) }}">

                </div>

                <div class="col-md-3">
                    <label class="text-gray-700 text-sm font-bold mb-2" >
                        Git Hub
                    </label>
                    <input id="" type="text"  name="link_github" class="form-control" value="{{ old('link_github', $user->link_github) }}">
    
                </div>

                <div class="col-md-3">
                    <label class="text-gray-700 text-sm font-bold mb-2" >
                        Linkedin
                    </label>
                    <input id="" type="text"  name="link_linkedin" class="form-control" value="{{ old('link_linkedin', $user->link_linkedin) }}">
     
                </div>

            </div>



            <div class="row mt-4 border border-primary rounded p-3 m-3">

                <div class="col-md-4 border border-secondary">
                    <label class="text-gray-700 text-sm font-bold mb-2" >
                        Descripción About Me
                    </label>
                    <input id="" type="text"  name="about_me" class="form-control" value="{{ old('about_me', $user->about_me) }}">
                    @error('about_me')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4 border border-secondary pb-3">
                    <label>Imagen de perfil (Ideal 400px ancho | 400px alto)</label>
                    @if ($user->image)
                        <img class="card-img-top" src="{{ $user->get_image }}" alt="{{ $user->name }}">
                    @else
                        <img class="card-img-top" src="http://lorempixel.com/400/200/" alt="Card image cap">
                    @endif
                    <input type="file" name="file" class=" mt-3">
                    @error('file')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4 border border-secondary pb-3">
                    <label>Imagen de About me (Ideal 400px ancho | 300px alto)</label>
                    @if ($user->image_about_me)
                        <img class="card-img-top" src="{{ $user->get_image2 }}" alt="{{ $user->name }}">
                    @else
                        <img class="card-img-top" src="http://lorempixel.com/400/200/" alt="Card image cap">
                    @endif
                    <input type="file" name="file_about_me" class=" mt-3">
                    @error('file')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div>

                

            </div>




            @csrf
            @method('PUT')

            <button type="submit" class="btn btn-success mt-4 col-12 p-3 h3">Guardar Cambios</button>
        </form>
    </div>
</main>



