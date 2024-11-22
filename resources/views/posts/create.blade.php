<x-layouts.main>

    <x-slot:title>
        Create
    </x-slot:title>


    <x-page-header>
        Create
    </x-page-header>
    <div class="container py-5">
        <div class="W-50 py-4">
    {{-- <div class="row">
        <div class="col-lg-7 mb-5 mb-lg-0"> --}}
            <div class="contact-form">
                <div id="success"></div>
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>

            @endforeach
        </ul>
    </div>
@endif
                <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="control-group">
                        <input type="text" class="form-control p-4" name="title" placeholder="Sarlavha"   />
                        <p class="help-block text-danger"></p>
                    </div>


                    <div class="control-group">
                        <select name="catagory_id" >
                            @foreach ($catagorys as $catagory)

                            <option value="{{$catagory->id}}">{{$catagory->name}}</option>
                            @endforeach
                        </select>
                    </div>




                    <div class="control-group">
                        <input name ="photo" type="file" class="form-control p-4" id="subject" placeholder="Rasm" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control p-4" name="short_content" placeholder="Qisqacha"  />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control p-4" rows="6" name="content" placeholder="Ma'qola" ></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block py-3 px-5" type="submit" >Saqlash</button>
                    </div>
                </form>
            </div>
        {{-- </div> 
    </div> --}}
</div> 
    </div>
</x-layouts.main>