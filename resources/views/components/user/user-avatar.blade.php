<div>
    @if (!Auth::guard('web')->user())
        <a href="{{ route('user.login') }}" class="text-text hover:text-link-hover">Login</a>
    @else
        <form action="{{ route('user.logout') }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit"
                class="text-text  bg-secondary px-4 py-2 rounded-md cursor-pointer hover:bg-red-500">Logout</button>
        </form>
    @endif
</div>
