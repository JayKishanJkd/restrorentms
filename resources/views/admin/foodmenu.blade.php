<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
    
      @include("admin.navbar")
    <div style="position: relative; top: 60px; right:-150px">
        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
            
        @csrf
            <div >
                <lable>Title</lable>
                <input style="color:blue;" type="text" name="title" placeholder="Write a title " required>
            </div>
            <div style="padding-top: 5%;">
                <lable>Price</lable>
                <input style="color:blue;" type="num" name="price" placeholder="Write a price " required>
            </div>
            <div style="padding-top: 5%;">
                <lable>Image</lable>
                <input style="color:blue;" type="file" name="image" placeholder="Write a title " required>
            </div>
            <div style="padding-top: 5%;">
                <lable>Description</lable>
                <input style="color:blue;" type="text" name="description" placeholder="Write a desription " required>
            </div>
            <div style="padding-top: 5%;">
                
                <input type="Submit" value="Save">
            </div>
        </form>
        

        <table bgcolor="black">
        
            <tr>
                <th style="padding:30px">Food Name</th>
                <th style="padding:30px">Price</th>
                <th style="padding:30px">Description</th>
                <th style="padding:30px">Image</th>
                <th style="padding:30px">Action</th>
                <th style="padding:30px">Action1</th>
            </tr>
            @foreach($data as $data)
            <tr align ="center">
                <th>{{$data->title}}</th>
                <th>{{$data->price}}</th>
                <th>{{$data->description}}</th>
                <th><image width="200" height="200" src="/foodimage/{{$data->image}}"></th>
                <th><a style="text-decoration-line: none" href="{{url('/deletemenu',$data->id )}}">Delete</a></th>
                <th ><a style="text-decoration-line: none" href="{{url('/updateview',$data->id )}}">Update</a></th>

            </tr>
            
            @endforeach
            
        </table>
        





    </div>




      
   </div>     
    @include("admin.adminscript")

  </body>
</html>