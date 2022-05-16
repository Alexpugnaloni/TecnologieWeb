<ul>
    <li><a href="{{ route('offerte') }}" title="Home">Offerte</a></li>
    <li><a href="{{ route('who') }}" title="Il nostro profilo aziendale">Chi siamo</a></li>
    <li><a href="{{ route('where') }}" title="Dove trovarci">Dove Siamo</a></li>
    <li><a href="mailto:info@trovacasa.it" title="Mandaci un messaggio">Contattaci</a></li>
    <li><a href="{{ route('faq') }}" title="Domande frequenti">F.A.Q.</a></li>
    <li><a href="{{ route('condizioni') }}" title="Condizioni generali d'uso">Condizioni generali d'uso</a></li>
    @can('isAdmin')
        <li><a href="{{ route('admin') }}" class="highlight" title="Home Admin">Home Admin</a></li>
    @endcan
    @can('isUser')
        <li><a href="{{ route('user') }}" class="highlight" title="Home User">Home User</a></li>
    @endcan
    @auth
        <li><a href="" title="Esci dal sito" class="highlight" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endauth    
    @guest
        <li><a href="{{ route('login') }}" class="highlight" title="Accedi all'area riservata del sito">Accedi</a></li>  
    @endguest
</ul>
