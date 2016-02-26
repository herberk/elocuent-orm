<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        Consultas Eloquent
        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li>
            <a href="{{ route('all') }}">
                Todos los usuarios (ALL)
            </a>
        </li>
        <li>
            <a href="{{ route('get', 'f') }}">
                Lista de usuarios (Femenina) (GET)
            </a>
        </li>
        <li>
            <a href="{{ route('get', 'm') }}">
                Lista de usuarios (Masculino) (GET)
            </a>
        </li>
        <li>
            <a href="{{ route('get-custom') }}">
                Lista de usuarios (GET con array)
            </a>
        </li>
         <li>
            <a href="{{ route('lists') }}">
                Lista de usuarios en select (LISTS)
            </a>
        </li>
           <li>
            <a href="{{ route('first-last') }}">
                First Last
            </a>
        </li>
    </ul>
</li>