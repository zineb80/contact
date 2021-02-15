

<table class="table">
  <thead class="thead-light">
    <tr>
    <th scope="col">wilaya</th>
    <th scope="col">nome</th>
    <th scope="col">email</th> 
    <th scope="col">telephon</th>
    <th scope="col">fax</th>
    <th scope="col">Adress</th>
    </tr>
  </thead>
  <tbody>
   @foreach($contacts as $Contact )
    <tr>
    <td>{{$contact->id}}</td>
        <td>{{$contact->wilaya}}</td>
       <td> {{$contact->lnome}}</td>
        <td>{{$contact->email}}</td>
        <td>{{$contact->telephon}}</td>
        <td>{{$contact->fax}}</td>
        <td>{{$contact->Adress}}</td>
        <td>
            <a href="{{ route('contacts.edit',$contact->id)}}" class="btn btn-primary">show</a>
            <a href="{{ route('contacts.edit',$contact->id)}}" class="btn btn-primary">Edit</a>
            <a href="{{ route('contacts.edit',$contact->id)}}" class="btn btn-primary">Delete</a> 
        </td>
    </tr>
    @endforeach
  </tbody>
</table>

