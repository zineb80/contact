<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Telephone book</title>
  </head>
  <body>

  @if ($layout == 'index')
 <div class="container-fluid">
    </div class="raw">
              <section class="col">
                 @include("contactsliste")
              </section> 
              <section class="col"></section>
      </div>
 </div>  
    
   @elseif($layout == 'create') 
    <div class="container-fluid">
       <div class="raw">
             <section class="col">
                   @include("contactsliste")
              </section>
              <section class="col"> 
                  <form action="{{ url('/store')}}" method="post">   
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                  <div class="from-group">  
                      <label>Wilaya</label>
                       <input name="wilaya" type="text" class="form-control"  placeholder="Enter Wilaya">
                  </div>
                  <div class="from-group">
                       <label>NOME</label>
                       <input name="nome" type="text" class="form-control"  placeholder="Enter NOME">
                   </div> 
                   <div class="from-group">
                       <label>Email</label>
                       <input name="Email" type="text" class="form-control"  placeholder="Enter Email">
                  </div> 
                  <div class="from-group">
                        <label>Telephon</label>
                        <input name="Telephon" type="text" class="form-control"  placeholder="Enter Telephon">
                  </div> 
                  <div class="from-group">
                        <label>Fax</label>
                         <input name="Fax" type="text" class="form-control"  placeholder="Enter the Fax">
                  </div> 
                  <div class="from-group">
                        <label>Adress</label>
                         <input name="Adress" type="text" class="form-control"  placeholder="Enter Adress">
                  </div>
                  
                       <input type="submit" class="btn btn-info" value="Save">
                       <input type="reset" class="btn btn-warning" value="Reset">  
              </form>
          </section>
       </div>
    </div>
   @elseif($layout == 'show')
    <div class="container-fluid">
             <div class="raw"> 
             <section class="col">         
                 @include("contactsliste")
             </section>
             <section class="col"> </section>            
    </div>
   </div>
    
   @elseif($layout == 'edit')
    <div class="container-fluid">
          <div class="raw">                      
          <section class="col">
               @include("contactsliste")
          </section>
          <section class="col">
          <form action="{{ url('/update/'.$contact->id)}}" method="post"> 
                   @csrf  
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                  <div class="from-group">  
                      <label>Wilaya</label>
                       <input value="{{$contact->wilaya}}" name="wilaya" type="text" class="form-control"  placeholder="Enter Wilaya">
                  </div>
                  <div class="from-group">
                       <label>NOME</label>
                       <input value="{{$contact->nome}}" name="nome" type="text" class="form-control"  placeholder="Enter NOME">
                   </div> 
                   <div class="from-group">
                       <label>Email</label>
                       <input  value="{{$contact->email}}" name="Email" type="text" class="form-control"  placeholder="Enter Email">
                  </div> 
                  <div class="from-group">
                        <label>Telephon</label>
                        <input  value="{{$contact->telephon}}" name="Telephon" type="text" class="form-control"  placeholder="Enter Telephon">
                  </div> 
                  <div class="from-group">
                        <label>Fax</label>
                         <input  value="{{$contact->fax}}" name="Fax" type="text" class="form-control"  placeholder="Enter the Fax">
                  </div> 
                  <div class="from-group">
                        <label>Adress</label>
                         <input value="{{$contact->adress}}" name="Adress" type="text" class="form-control"  placeholder="Enter Adress">
                  </div>
                  
                       <input type="submit" class="btn btn-info" value="Save">
                       <input type="reset" class="btn btn-warning" value="Reset">  
              </form>
          </section>
      </div>
  </div>
    @endif

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>


