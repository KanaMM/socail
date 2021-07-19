<div class="d-flex">
    <div class="flex-shrink-0">
        <a href="">
            <img src="{{ $user->getAvatarUrl() }}" alt="{{ $user->getNameOrUsername() }}">
        </a>
    </div>
    <div class="flex-grow-1 ms-3">
        <h5 class="mt-0">
            <a href="{{ route('getProfile', ['username' => $user->username]) }}"> {{ $user->getNameOrUsername() }} </a>
        </h5>
        @if($user->location )
           <p>{{ $user->location }}</p>
        @endif
    </div>
</div>
