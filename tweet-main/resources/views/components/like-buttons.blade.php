<div class="flex mt-2 items-center">

  <form action="/tweets/{{$tweet->id}}/like" method="post">
    @csrf
    <div class="flex items-center mr-2">
      <button type="submit" class="text-xs text-gray-500 flex items-center">
        <img 
        width="20" 
        height="20" 
        src="https://cdn-icons-png.flaticon.com/512/739/739231.png" 
        alt="Like free icon" 
        title="Like free icon" 
        class="loaded {{$tweet->isLikedBy(auth()->user()) ? 'bg-blue-300' : 'bg-gray-300'}} p-1 rounded">
        {{$tweet->likes ?: 0 }}
      </button>
    </div>
  </form>

  <form action="/tweets/{{$tweet->id}}/like" method="post">
    @csrf
    @method('DELETE')
    <div class="flex items-center mr-2">
      <button type="submit" class="text-xs text-gray-500 flex items-center">
        <img 
        width="20" 
        height="20" 
        src="https://cdn-icons-png.flaticon.com/512/880/880613.png" 
        alt="Dislike free icon" 
        title="Dislike free icon" 
        class="loaded {{$tweet->isDislikedBy(auth()->user()) ? 'bg-blue-300' : 'bg-gray-300'}} p-1 rounded">    
        {{$tweet->dislikes?: 0 }}
      </button>
    </div>
  </form>
  <div>

  </div>
</div>