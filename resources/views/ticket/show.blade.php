
<x-app-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 white:bg-gray-900">
        <div class=" flex items-center bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg p-2">
            <h1 class="text-black text-lg font-bold">{{$ticket->title}}</h1></div>
        <div class="w-full max-h-52 sm:max-w-xl mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-y-auto sm:rounded-lg ">
               <div class="flex justify-between py-4">
                <p>{{ $ticket->description }}</p>
              
                 <p> {{ $ticket->created_at->diffForHumans() }}</p>
                 @if ($ticket->attachment)
                     <a href="{{"/storage/".$ticket->attachment}}" target="_blank">attachment</a>
                 @endif
               </div>
          <div class="flex">
              <form action="{{route('ticket.edit',$ticket->id)}}">
                {{-- @csrf --}}
                <x-primary-button class="ml-1">
                Edit
              </x-primary-button>
              <form action="{{route('ticket.destroy',$ticket->id)}}" method="post">
                @method('delete')
                @csrf
                <x-primary-button class="ml-1">
                Delete
              </x-primary-button>
              </form>
          </div>
            
        </div>
    </div>
</x-app-layout>