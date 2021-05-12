@extends('app')
@section('content')
 <!-- MAIN -->
 <main id="main">
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/img1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/img2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/img3.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="overlay">
                <div class="container">
                        <div class="row">
                            <div class="slad col-md-6 offset-md-6 text-md-right text-center">
                                   <h1>TecnoEduca</h1> 
                                   <p class="d-none d-md-block">Por fin disponible en línea, un
                                       evento que vale la pena compartir.
                                       La primera experiencia online con profesionales+
                                       que llevan el aprendizaje a otro nivel
                                   </p>
                                   <a href="{{route('Reg')}}" class="btn btn-outline-info">Quiero ser alumno</a>
                                   <button class=" btn btn-outline-light">Más información</button>
                            </div>
                        </div>
                </div>
          </div>
        </div>
      </div>
</main>
<!-- /MAIN -->
<!-- CURSOS -->
    <section class="mt-4" id="cursos">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center text-uppercase"> 
                        Conoce nuestros <small><h4>cursos</h4></small>
                </div>
            </div>
            <div class="row"> 
                    <div class="col-12 col-md-6 col-lg-3  mb-4">
                        <div class="card">
                            <img src="images/html.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Html</h5>
                              <p class="card-text">Es un lenguaje de marcado que se utiliza para el desarrollo de paginas de internet</p>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#htmlModal">
                                Ver curso
                              </button>
                            </div>
                          </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="card" >
                            <img src="images/css.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">CSS</h5>
                              <p class="card-text"> Hojas de estilo en cascada, es el lenguaje de estilos para describir la presentación en documentos html.</p>
                              <a href="#" class="btn btn-primary">Ver curso</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="card">
                            <img src="images/javascript.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Java Script</h5>
                              <p class="card-text">Es  un lenguaje de programación ligero interpretado o compilado con funciones de primera clase</p>
                              <a href="#" class="btn btn-primary">Ver curso</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                      <div class="card">
                          <img src="images/javascript.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Java Script</h5>
                            <p class="card-text">Es  un lenguaje de programación ligero interpretado o compilado con funciones de primera clase</p>
                            <a href="#" class="btn btn-primary">Ver curso</a>
                          </div>
                        </div>
                  </div>
            </div>
        </div>
    </section>
<!-- /CURSOS -->

<!-- CLASE ONLINE -->
<section id="clase-online">
<div class="container-fluid">
  <div class="row">
      <div class="col-lg-6 col-12 pl-0 pr-0">
          <img src="images/joven.jpg">
      </div>
      <div class="col-lg-6 col-12 pt-3">
        <h2>Clases de prueba online Agosto 2021</h2>
        <p>Registrate a la clase de prueba online, rellena el formulario
          de contacto para que podamos tener más información sobre las necesidades
          especificas y podamos concretar una clase gratuita de 30
          miutos con el profesor que mejor se adapte a tus necesidades
          academicas.

        </p>
        <button type="button" class="btn btn-outline-light">Registrarme</button>
      </div>
  </div>
</div>
</section>
<!-- /CLASE ONLINE -->

<!-- SER MAESTRO -->
<section class="pt-4 pb-4" id="semaestro">
<div class="container" >
  <div class="row">
      <div class="col text-center">
          <small class="text-uppercase">
              Conviertete en un
          </small>
          <h2>Maestro</h2>
      </div>
  </div>
  <div class="row">
      <div class=" col text-center"> 
          Participa en el proceso de selección y forma
          parte del equipo <abbr title="Es el nombre de tu nueva familia" data-toggle="tooltip">TecnoEduca</abbr> 
      </div>
  </div>
  <div class="row">
      <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 pt-2">
        <form>
          <div class="form-row">
            <div class="col-12 col-md-6 form-group">
              <input type="text" class="form-control" placeholder="Nombres">
            </div>
            <div class="col-12 col-md-6 form-group">
              <input type="text" class="form-control" placeholder="Apellidos">
            </div>
          </div>
          <div class="form-row"> 
              <div class="col form-group">
                  <textarea name="descripcion" class="form-control"></textarea>
                  <small>Incluye un titulo en tu descripción</small>
              </div>
          </div>
          <div class="form-row"> 
            <button type="button" class="btn btn-dark btn-block">Enviar</button>
        </div>
        </form>
      </div>
  </div>
</div>
</section>
<!-- SER MAESTRO -->
@endsection
