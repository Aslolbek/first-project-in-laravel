<x-layouts.main>

    <x-slot:title>
        Postni o'zgartirish #{{$post->id}}
    </x-slot:title>


    <x-page-header>
        Postni o'zgartirish #{{$post->id}}
    </x-page-header>

    <div class="container py-5">
        <div class="W-50 py-4">
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
                <form action="{{route('posts.update', ['post' =>$post->id])}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    
                    <div class="control-group">
                        <input type="text" class="form-control p-4" name="title" value="{{$post->title}}" placeholder="Sarlavha"   />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input name ="photo" type="file" class="form-control p-4"  placeholder="Rasm" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control p-4" name="short_content" value="{{$post->short_content}}" placeholder="Qisqacha"  />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control p-4" rows="6" name="content" value="{{$post->content}}"  placeholder="Ma'qola" ></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="flex">
                        <button class="btn btn-success  py-3 px-5" type="submit" >Saqlash</button>
                        <a href="{{route('posts.show', ['post'=>$post->id])}}" class="btn btn-danger b py-3 px-5" type="submit" >Bekor qilish</a>
                    </div>
                </form>
            </div>
        {{-- </div> 
    </div> --}}
</div> 

</x-layouts.main>