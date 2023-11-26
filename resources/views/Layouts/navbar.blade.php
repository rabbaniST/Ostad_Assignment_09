<header class="header" id="header">
    <nav class="nav container">
       <a href="{{ route('index') }}" class="nav__logo">
          golam<span>Rabbani</span>
       </a>

       <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
             <li class="nav__item">
                <a href="{{ route('home') }}" class="nav__link">Home</a>
             </li>
             <li class="nav__item">
                <a href="{{ route('about') }}" class="nav__link">About</a>
             </li>
             <li class="nav__item">
                <a href="{{ route('skills') }}" class="nav__link">Skills</a>
             </li>
             <li class="nav__item">
                <a href="{{ route('services') }}" class="nav__link">Services</a>
             </li>
             <li class="nav__item">
                <a href="{{ route('projects') }}" class="nav__link">Projects</a>
             </li>
             <li class="nav__item">
                <a href="{{ route('contact') }}" class="nav__link">Contact</a>
             </li>
          </ul>

          <!-- Close Button -->
          <div class="nav__close" id="nav-close">
             <i class="ri-close-line"></i>
          </div>
       </div>

       <!-- Toggle Button -->

       <div class="nav__toggle" id="nav-toggle">
          <i class="ri-menu-line"></i>
       </div>
    </nav>
 </header>
