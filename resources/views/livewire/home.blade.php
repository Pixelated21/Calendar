<div>
    <form wire:submit.prevent="SearchStudentName">

        <input class="border border-gray-500" type="text" name="search" wire:model.lazy="lvSearch">

        <button type="submit"> Search </button>
    </form>


    <div class="mt-28">

        @if($student)
            @forelse($student as $student)

                <li class="uppercase">{{ $student->name }}</li>
                <li class="font-bold">{{ $student->dob }}</li>
            @empty
                <div> No Search </div>
            @endforelse
        @endif

    </div>

</div>
