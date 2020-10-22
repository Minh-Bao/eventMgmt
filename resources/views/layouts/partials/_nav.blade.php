<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="{{ route('home') }}">EventBrote</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto ">
            <li class="nav-item active ">
               <p class="navbar-btn">
                   <a class="btn btn-primary" href="{{ route('events.create') }}"> 
                       <i class="fa fa-plus"></i> 
                       Creer un Evenement 
                       <span class="sr-only">(current)</span>
                    </a>
                </p>
            </li>
        </ul>
    </div>
</nav>