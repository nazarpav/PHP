<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Головна <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/posts">Пости</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/posts/create">Додати поста</a>
                </li>
                @if(auth()->check())
                    <li class="nav-item">
                        <a  class="nav-link" href="#">{{auth()->user()->name}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Вихід</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Реєструватися</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
