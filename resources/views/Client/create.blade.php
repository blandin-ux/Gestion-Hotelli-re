
          <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
          <link rel="stylesheet" href="{{asset('css/clients.css')}}">
             <div class="container">
                <h2 class="text-center">Ajouter un nouveau client</h2>
                  <form action="/clients" method="post">
                   @csrf
                    <div class="row">
                      <div class="col-md-4"> 
                         <div class="form-group">
                          <input type="text" placeholder="Nom du client" name="name" class="form-control" required> 
                         </div>
                      </div>
                      <div class="col-md-3"> 
                         <div class="form-group">
                          <input type="text" placeholder="Numero de téléphone" name="phone" class="form-control" required> 
                         </div>
                      </div>
                      <div class="col-md-3"> 
                         <div class="form-group">
                          <input type="text" placeholder="E-mail du client" name="email" class="form-control" required> 
                         </div>
                      </div>
                        <div class="form-group">
                         <button type="submit" class="btn btn-danger">Envoyer <i class="fa fa-send"></i></button>
                        </div> 
                    </div>
                  </form> 
             </div>