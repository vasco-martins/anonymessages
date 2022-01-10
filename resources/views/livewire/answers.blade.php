<div>
    <h2 class="mx-5 my-5">{{ $user->name }}'s answers</h2>
   @foreach($answers as $answer)

       <div class="card my-5 p-5">
           <h5>{{ $answer?->name }}</h5>
           <p>{{ $answer?->message }}</p>
       </div>

   @endforeach
</div>
