<section class="home section" id="home">
    <div class="home__container container grid">
       <div class="home__content">
          <div class="home__data">
             <h3 class="home__subtitle">
                Hello, <span>I'm</span>

                <h1 class="home__title">Golam Rabbani</h1>

                <h3 class="home__education">Php & Laravel Developer</h3>

                <p class="home__description">
                   Hey there!, I'm an experienced PHP and Laravel developer who wants to make web experiences that work well and are new. I have two years of experience and really care about writing clean code. I'm also good at fixing problems.
                </p>

                <a href="{{ route('contact') }}" class="button">Let's Talk</a>
             </h3>
          </div>
          <div class="home__social">
             <a href="https://github.com/rabbaniST" target="_blank"
                class="home__social-link">
                <i class="ri-github-fill"></i>
             </a>
             <a href="https://dribbble.com/" target="_blank"
                class="home__social-link">
                <i class="ri-dribbble-line"></i>
             </a>
             <a href="https://www.linkedin.com/" target="_blank"
                class="home__social-link">
                <i class="ri-linkedin-line"></i>
             </a>
          </div>
       </div>

       <div class="home__image">
          <svg class="home__blob" viewBox="0 0 550 591"
             xmlns="http://www.w3.org/2000/svg">
             <mask id="maskBlob" mask-type="alpha">
                <path
                   d="M263 47.1782C270.426 42.891 279.574 42.891 287 47.1782L501.157
                170.822C508.583 175.109 513.157 183.032 513.157 191.606V438.894C513.157
                447.468 508.583 455.391 501.157 459.678L287 583.322C279.574 587.609 270.426
                587.609 263 583.322L48.843 459.678C41.4174 455.391 36.843 447.468 36.843
                438.894V191.606C36.843 183.032 41.4174 175.109 48.843 170.822L263 47.1782Z" />
             </mask>
             <g mask="url(#maskBlob)">
                <path
                   d="M263 47.1782C270.426 42.891 279.574 42.891 287 47.1782L501.157
                170.822C508.583 175.109 513.157 183.032 513.157 191.606V438.894C513.157
                447.468 508.583 455.391 501.157 459.678L287 583.322C279.574 587.609 270.426
                587.609 263 583.322L48.843 459.678C41.4174 455.391 36.843 447.468 36.843
                438.894V191.606C36.843 183.032 41.4174 175.109 48.843 170.822L263 47.1782Z" />

                <rect x="37" width="476" height="630"
                   fill="url(#pattern0)" />
             </g>

             <rect x="37" width="476" height="300" fill="url(#pattern1)" />

             <defs>
                <pattern id="pattern0"
                   patternContentUnits="objectBoundingBox" width="1"
                   height="1">
                   <use href="#imageBlob"
                      transform="matrix(0.00143057 0 0 0.00108108 0.0404062 0)" />
                </pattern>

                <pattern id="pattern1"
                   patternContentUnits="objectBoundingBox" width="1"
                   height="1">
                   <use href="#imageBlob"
                      transform="matrix(0.00143057 0 0 0.00226984 0.0404062 0)" />
                </pattern>

                <!-- Insert your profile (recommended size: 640 x 940) -->
                <image class="home__img" id="imageBlob" width="690"
                   height="925" href="{{ asset('assets/img/hero.png') }}" />
             </defs>
          </svg>
       </div>
    </div>
 </section>
