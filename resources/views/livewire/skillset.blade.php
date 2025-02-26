<div class="w-[26vw] h-fit mx-[1vw]">

    @foreach($skills as $skill)
        <p class="text-xl">
        {{ $skill->description }}
            <a href="Debug:{{ $skill->link }}" class="cursor-pointer">link</a>
        </p>
        <img src="{{ Vite::asset('resources/images/' . $skill->img)}}url(" class="h-[40%] w-[40%]" alt="Image">
    @endforeach
</div>
