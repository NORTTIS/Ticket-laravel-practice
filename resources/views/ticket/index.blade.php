
<x-app-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 white:bg-gray-900">
        <div class=" flex items-center bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg p-2">
            <a href="{{route('ticket.create')}}" class="text-black text-lg font-bold">Create new support ticket</a></div>
        <div class="w-full max-h-52 sm:max-w-xl mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-y-auto sm:rounded-lg ">
          
               @foreach ($tickets as $ticket)
               <div class="flex justify-between py-4">
                <a href="{{route('ticket.show',$ticket->id)}}">{{ $ticket->title }}</a>
              
                 <p> {{ $ticket->created_at->diffForHumans() }}</p>
               </div>
                 @endforeach
          
            
        </div>
    </div>
</x-app-layout>