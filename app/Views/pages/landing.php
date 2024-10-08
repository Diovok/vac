<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    
    <?= $this->include('partials/head-page-meta') ?>
    <!-- [Page specific CSS] start -->
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins/animate.min.css') ?>" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
    <!-- [Page specific CSS] end -->
    <?= $this->include('partials/head-css') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/landing.css') ?>" >

  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->
  <body class="landing-page">
    <?= $this->include('partials/loader') ?>
    <!-- [ Main Content ] start -->
    <!-- [ Header ] start -->
    <header id="home" style="background-image: url(<?= base_url('assets/images/landing/img-headerbg.jpg') ?>)">
      <!-- [ Nav ] start -->
      <?= $this->include('partials/component/component-header') ?>
      <!-- [ Nav ] start -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 text-center">
            <h1 class="mb-4 wow fadeInUp" data-wow-delay="0.2s">
              Explore One of the
              <span class="hero-text-gradient">Featured Dashboard</span>
              Template in Themeforest
            </h1>
            <div
              class="row justify-content-center wow fadeInUp"
              data-wow-delay="0.3s"
            >
              <div class="col-md-8">
                <p class="text-muted f-16 mb-0">
                  Able Pro is the one of the Featured admin dashboard template
                  in Envato Marketplace and used by over 2.5K+ Customers
                  wordwide.
                </p>
              </div>
            </div>
            <div class="my-4 my-sm-5 wow fadeInUp" data-wow-delay="0.4s">
              <a href="bc-alert" class="btn btn-outline-secondary me-2">Explore Components</a>
              <div class="dropdown d-inline-block">
                <a class="btn btn-primary dropdown-toggle arrow-none d-inline-flex align-items-center" data-bs-toggle="dropdown" href="#"
                  >Live Preview <i class="ti ti-chevron-down ms-1"></i
                ></a>
                <div class="dropdown-menu drp-technology drp-tech-scrollble">
                  <a class="dropdown-item gap-2" href="https://ableproadmin.com/tailwind/dashboard/index.html" target="_blank">
                    <img src="<?= base_url('assets/images/landing/tech-tailwind.svg') ?>" alt="img" class="img-fluid wid-30" />Tailwind
                  </a>
                  <a class="dropdown-item gap-2" href="https://ableproadmin.com/dashboard/index.html" target="_blank"
                    ><img src="<?= base_url('assets/images/landing/tech-bootstrap.svg') ?>" alt="img" class="img-fluid wid-30" />Bootstrap 5</a
                  >
                  <a class="dropdown-item gap-2" href="https://ableproadmin.com/react/dashboard/default" target="_blank"
                    ><img src="<?= base_url('assets/images/landing/tech-react.svg') ?>" alt="img" class="img-fluid wid-30" />React MUI</a
                  >
                  <a class="dropdown-item gap-2" href="https://ableproadmin.com/angular/default/dashboard/default" target="_blank"
                    ><img src="<?= base_url('assets/images/landing/tech-angular.svg') ?>" alt="img" class="img-fluid wid-30" />Angular Material</a
                  >
                  <a class="dropdown-item gap-2" href="dashboard-default" target="_blank"
                    ><img src="<?= base_url('assets/images/landing/tech-codeigniter.svg') ?>" alt="img" class="img-fluid wid-30" />CodeIgniter</a
                  >
                  <a class="dropdown-item gap-2" href="https://able-pro.azurewebsites.net/Dashboard/Index" target="_blank"
                    ><img src="<?= base_url('assets/images/landing/tech-net.svg') ?>" alt="img" class="img-fluid wid-30" />ASP.net</a
                  >
                  <a class="dropdown-item gap-2" href="https://able-pro-material-next-ts-navy.vercel.app/dashboard/default" target="_blank"
                    ><img src="<?= base_url('assets/images/landing/tech-nextjs.svg') ?>" alt="img" class="img-fluid wid-30" />NextJS</a
                  >
                  <a class="dropdown-item gap-2" href="https://ableproadmin.com/vue/dashboard/default" target="_blank"
                    ><img src="<?= base_url('assets/images/landing/tech-vuetify.svg') ?>" alt="img" class="img-fluid wid-30" />Vue</a
                  >
                  <a class="dropdown-item gap-2" href="https://phplaravel-207002-4524103.cloudwaysapps.com/build/dashboards/default" target="_blank"
                    ><img src="<?= base_url('assets/images/landing/tech-l-v.svg') ?>" alt="img" class="img-fluid wid-30" />Vue+Laravel</a
                  >
                  <a class="dropdown-item gap-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Live Preview not available"><img src="<?= base_url('assets/images/landing/tech-django.svg') ?>" alt="img" class="img-fluid wid-30" />Django</a>
                  <a class="dropdown-item gap-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Live Preview not available"><img src="<?= base_url('assets/images/landing/tech-flask.svg') ?>" alt="img" class="img-fluid wid-30" />Flask</a>
                  <a class="dropdown-item gap-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Live Preview not available"><img src="<?= base_url('assets/images/landing/tech-nodejs.svg') ?>" alt="img" class="img-fluid wid-30" />NodeJS</a>
                  <a class="dropdown-item gap-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Live Preview not available"><img src="<?= base_url('assets/images/landing/tech-l-b.svg') ?>" alt="img" class="img-fluid wid-30" />Laravel Bootstrap</a>
                  <a class="dropdown-item gap-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Live Preview not available"><img src="<?= base_url('assets/images/landing/tech-svelteKit.svg') ?>" alt="img" class="img-fluid wid-30" />SvelteKit</a>
                  <!-- <a
                    class="dropdown-item gap-2" target="_blank"
                    href="https://www.figma.com/file/6XqmRhRmkr33w0EFD49acY/Able-Pro--v9.0-Figma-Preview?type=design&node-id=46-226114&mode=design&t=4FS2Lw6WxsmJ3RLm-0"
                    ><img src="<?= base_url('assets/images/landing/tech-figma.svg') ?>" alt="img" class="img-fluid wid-30" />Figma</a
                  > -->
                </div>
              </div>
            </div>
            <div
              class="row g-5 justify-content-center text-center wow fadeInUp"
              data-wow-delay="0.5s"
            >
              <div class="col-auto head-rating-block">
                <div class="star mb-2">
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star-half-alt text-warning"></i>
                </div>
                <h4 class="mb-0">
                  4.7/5 <small class="text-muted f-w-400"> Ratings</small>
                </h4>
              </div>
              <div class="col-auto">
                <h5 class="mb-2">
                  <small class="text-muted f-w-400"> Sales</small>
                </h5>
                <h4 class="mb-0">2.5K+</h4>
              </div>
            </div>
            <div
              class="row g-5 mt-1 justify-content-center text-center wow fadeInUp"
              data-wow-delay="1s"
            >
              <div class="col-auto">
                <p class="mb-4 text-muted">
                  - Click Below Icon to Preview Each Tech Demos -
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="technology-block scrollble-tech-block">
        <ul class="list-inline mb-0">
          <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to Preview Tailwind">
            <a href="https://ableproadmin.com/tailwind/dashboard/index.html"><img src="<?= base_url('assets/images/landing/tech-tailwind.svg') ?>" alt="img" class="img-fluid" /></a>
          </li>
          <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to Preview Bootstrap 5">
            <a href="https://ableproadmin.com/dashboard/index.html"><img src="<?= base_url('assets/images/landing/tech-bootstrap.svg') ?>" alt="img" class="img-fluid" /></a>
          </li>
          <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to Preview React MUI">
            <a href="https://ableproadmin.com/react/dashboard/default" target="_blank"
              ><img src="<?= base_url('assets/images/landing/tech-react.svg') ?>" alt="img" class="img-fluid"
            /></a>
          </li>
          <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to Preview Angular Material">
            <a href="https://ableproadmin.com/angular/default/dashboard/default" target="_blank"
              ><img src="<?= base_url('assets/images/landing/tech-angular.svg') ?>" alt="img" class="img-fluid"
            /></a>
          </li>
          <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to Preview CodeIgniter">
            <a href="dashboard-default" target="_blank"
              ><img src="<?= base_url('assets/images/landing/tech-codeigniter.svg') ?>" alt="img" class="img-fluid"
            /></a>
          </li>
          <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to Preview ASP.net">
            <a href="https://able-pro.azurewebsites.net/Dashboard/Index" target="_blank"
              ><img src="<?= base_url('assets/images/landing/tech-net.svg') ?>" alt="img" class="img-fluid"
            /></a>
          </li>
          <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to Preview NextJS">
            <a href="https://able-pro-material-next-ts-navy.vercel.app/dashboard/default" target="_blank"
              ><img src="<?= base_url('assets/images/landing/tech-nextjs.svg') ?>" alt="img" class="img-fluid"
            /></a>
          </li>
          <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to Preview Vue">
            <a href="https://ableproadmin.com/vue/dashboard/default" target="_blank"><img src="<?= base_url('assets/images/landing/tech-vuetify.svg') ?>" alt="img" class="img-fluid" /></a>
          </li>
          <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to Preview Vue+Laravel">
            <a href="https://phplaravel-207002-4524103.cloudwaysapps.com/build/dashboards/default" target="_blank"><img src="<?= base_url('assets/images/landing/tech-l-v.svg') ?>" alt="img" class="img-fluid" /></a>
          </li>
          <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Live Preview not available">
            <a href="#" target="_blank"><img src="<?= base_url('assets/images/landing/tech-django.svg') ?>" alt="img" class="img-fluid" /></a>
          </li>
          <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Live Preview not available">
            <a href="#" target="_blank"><img src="<?= base_url('assets/images/landing/tech-flask.svg') ?>" alt="img" class="img-fluid" /></a>
          </li>
          <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Live Preview not available">
            <a href="#" target="_blank"><img src="<?= base_url('assets/images/landing/tech-nodejs.svg') ?>" alt="img" class="img-fluid" /></a>
          </li>
          <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Live Preview not available">
            <a href="#" target="_blank"><img src="<?= base_url('assets/images/landing/tech-l-b.svg') ?>" alt="img" class="img-fluid" /></a>
          </li>
          <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Live Preview not available">
            <a href="#" target="_blank"><img src="<?= base_url('assets/images/landing/tech-svelteKit.svg') ?>" alt="img" class="img-fluid" /></a>
          </li>
          <!-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Figma Design System">
            <a
              href="https://www.figma.com/file/6XqmRhRmkr33w0EFD49acY/Able-Pro--v9.0-Figma-Preview?type=design&node-id=46-226114&mode=design&t=4FS2Lw6WxsmJ3RLm-0"
              target="_blank"
              ><img src="<?= base_url('assets/images/landing/tech-figma.svg') ?>" alt="img" class="img-fluid"
            /></a>
          </li> -->
        </ul>
      </div>
    </header>
    <!-- [ Header ] End -->
    <!-- [ Technologies ] start -->
    <section id="technologies">
      <div class="container title">
        <div class="row justify-content-center text-center wow fadeInUp" data-wow-delay="0.2s">
          <div class="col-md-8 col-xl-6">
            <h2 class="mb-3">Available Technologies</h2>
            <p class="mb-0">Explore the Demos of Able Pro in multiple technologies.</p>
          </div>
        </div>
      </div>
      <div class="container technology-block">
        <!-- Row 1 -->
        <div class="row align-items-center justify-content-start mb-4 mb-sm-2">
          <div class="col-md-6 col-lg-4">
            <div class="card">
              <div class="card-body">
                <img src="<?= base_url('assets/images/landing/tech-tailwind.svg') ?>" alt="img" class="img-fluid" />
                <h4 class="mb-3 mt-2">Tailwind</h4>
                <p class="text-muted">
                  Able Pro with Tailwind CSS lets developers create sleek, professional interfaces quickly. Tailwind's utility classes ensure consistent styling across all devices.
                </p>
                <a class="btn btn-light-dark mt-2" href="https://ableproadmin.com/tailwind/dashboard/index.html" target="_blank"
                  ><i class="ti ti-external-link"></i> Preview Tailwind</a
                >
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card">
              <div class="card-body">
                <img src="<?= base_url('assets/images/landing/tech-bootstrap.svg') ?>" alt="img" class="img-fluid" />
                <h4 class="mb-3 mt-2">Bootstrap 5</h4>
                <p class="text-muted">
                  Able Pro Bootstrap 5 - the top choice for responsive, mobile-first design, you can achieve both professional functionality and visual appeal.
                </p>
                <a class="btn btn-light-dark mt-2" href="https://ableproadmin.com/dashboard/index.html" target="_blank"
                  ><i class="ti ti-external-link"></i> Preview Bootstrap</a
                >
                <a
                  class="btn btn-icon btn-light mt-2"
                  target="_blank"
                  data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  title="Click to Download Free Able Pro Bootstrap 5 Admin Template"
                  href="https://links.codedthemes.com/vYUWM"
                  ><i class="ti ti-brand-github"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card">
              <div class="card-body">
                <img src="<?= base_url('assets/images/landing/tech-react-1.svg') ?>" alt="img" class="img-fluid" />
                <h4 class="mb-3 mt-2">React Material-UI</h4>
                <p class="text-muted">
                  Able Pro React dashboard template is a powerful tool that utilizes the Material-UI component library to create stunning and intuitive user interfaces
                </p>
                <a class="btn btn-light-dark mt-2" href="https://ableproadmin.com/react/dashboard/default" target="_blank"
                  ><i class="ti ti-external-link"></i> Preview React</a
                >
                <a
                  class="btn btn-icon btn-light mt-2"
                  target="_blank"
                  data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  title="Click to Download Free Able Pro React Dashboard Template"
                  href="https://links.codedthemes.com/vYUWM"
                  ><i class="ti ti-brand-github"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card">
              <div class="card-body">
                <img src="<?= base_url('assets/images/landing/tech-net.svg') ?>" alt="img" class="img-fluid" />
                <h4 class="mb-3 mt-2">Asp.net</h4>
                <p class="text-muted">
                  Able Pro .NET version is a robust dashboard template designed specifically for .NET developers. Its comes with a wide range of pre-built components.
                </p>
                <a class="btn btn-light-dark mt-2" href="https://able-pro.azurewebsites.net/Dashboard/Index" target="_blank"
                  ><i class="ti ti-external-link"></i> Preview .net</a
                >
                <a
                  class="btn btn-icon btn-light mt-2"
                  target="_blank"
                  data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  title="Click to Download Free Able Pro ASP.net Dashboard Template"
                  href="https://links.codedthemes.com/vYUWM"
                  ><i class="ti ti-brand-github"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card">
              <div class="card-body">
                <img src="<?= base_url('assets/images/landing/tech-codeigniter.svg') ?>" alt="img" class="img-fluid" />
                <h4 class="mb-3 mt-2">CodeIgniter</h4>
                <p class="text-muted">
                  Able Pro CodeIgniter version is a powerful dashboard template built specifically for developers who use the CodeIgniter PHP framework with Bootstrap.
                </p>
                <a class="btn btn-light-dark mt-2" href="dashboard-default" target="_blank"
                  ><i class="ti ti-external-link"></i> Preview CodeIgniter</a
                >
                <a
                  class="btn btn-icon btn-light mt-2"
                  target="_blank"
                  data-bs-toggle="tooltip"
                  disabled
                  data-bs-placement="top"
                  title="Click to Download Free Able Pro CodeIgniter Dashboard Template"
                  href="https://links.codedthemes.com/vYUWM"
                  ><i class="ti ti-brand-github"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card">
              <div class="card-body">
                <img src="<?= base_url('assets/images/landing/tech-angular.svg') ?>" alt="img" class="img-fluid" />
                <h4 class="mb-3 mt-2">Angular Material</h4>
                <p class="text-muted">
                  Able Pro Angular dashboard template is a powerful tool that utilizes the Google Material component library to create stunning and intuitive user interfaces.
                </p>
                <a class="btn btn-light-dark mt-2" href="https://ableproadmin.com/angular/default/dashboard/default" target="_blank"
                  ><i class="ti ti-external-link"></i> Preview Angular</a
                >
                <a
                  class="btn btn-icon btn-light mt-2"
                  target="_blank"
                  data-bs-toggle="tooltip"
                  disabled
                  data-bs-placement="top"
                  title="Click to Download Free Able Pro Angular Dashboard Template"
                  href="https://github.com/phoenixcoded/able-pro-free-admin-dashboard-template/tree/master"
                  ><i class="ti ti-brand-github"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- <div class="col-md-6 col-lg-4">
            <div class="card">
              <div class="card-body">
                <img src="<?= base_url('assets/images/landing/tech-figma.svg') ?>" alt="img" class="img-fluid" />
                <h4 class="mb-3 mt-2">Figma</h4>
                <p class="text-muted">
                  Able Pro comes with a Figma design file that allows you to customize and fine-tune your dashboard to meet your specific needs.
                </p>
                <a class="btn btn-light-dark mt-2" href="https://links.codedthemes.com/mQZrX" target="_blank"
                  ><i class="ti ti-external-link"></i> Preview Figma</a
                >
              </div>
            </div>
          </div> -->
          <div class="col-md-6 col-lg-4">
            <div class="card">
              <div class="card-body">
                <img src="<?= base_url('assets/images/landing/tech-nextjs.svg') ?>" alt="img" class="img-fluid" />
                <h4 class="mb-3 mt-2">NextJS</h4>
                <p class="text-muted">
                  Able Pro NextJs dashboard template is a powerful tool that utilizes the Material-UI component library to create stunning and intuitive user interfaces.
                </p>
                <a class="btn btn-light-dark mt-2" href="https://able-pro-material-next-ts-navy.vercel.app/dashboard/default" target="_blank"
                  ><i class="ti ti-external-link"></i> Preview NextJS</a
                >
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card">
              <div class="card-body">
                <img src="<?= base_url('assets/images/landing/tech-vuetify.svg') ?>" alt="img" class="img-fluid" />
                <h4 class="mb-3 mt-2">Vue</h4>
                <p class="text-muted">Able Pro Vue stands out as a versatile and powerful - Vue with Vuetify dashboard combines modern design principles with robust functionality.</p>
                <a class="btn btn-light-dark mt-2" href="https://ableproadmin.com/vue/dashboard/default" target="_blank"
                  ><i class="ti ti-external-link"></i> Preview Vue</a
                >
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card">
              <div class="card-body">
                <img src="<?= base_url('assets/images/landing/tech-l-v.svg') ?>" alt="img" class="img-fluid" />
                <h4 class="mb-3 mt-2">Vue+Laravel</h4>
                <p class="text-muted">Able Pro Vue stands out as a versatile and powerful - Vue with Vuetify dashboard combines modern design principles with robust functionality.</p>
                <a class="btn btn-light-dark mt-2" href="https://phplaravel-207002-4524103.cloudwaysapps.com/build/dashboards/default" target="_blank"
                  ><i class="ti ti-external-link"></i> Preview Vue+Laravel</a
                >
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card">
              <div class="card-body">
                <img src="<?= base_url('assets/images/landing/tech-django.svg') ?>" alt="img" class="img-fluid" />
                <h4 class="mb-3 mt-2">Django</h4>
                <p class="text-muted">Able Pro Django is a powerful dashboard template designed for developers. it offers an extensive collection of pre-built components for seamless web development.</p>
                <div class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Live Preview not available">
                  <a class="btn btn-light-dark mt-2 disabled" href="#" disabled
                    ><i class="ti ti-external-link"></i> Preview Django</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card">
              <div class="card-body">
                <img src="<?= base_url('assets/images/landing/tech-flask.svg') ?>" alt="img" class="img-fluid" />
                <h4 class="mb-3 mt-2">Flask</h4>
                <p class="text-muted">Able Pro Flask is a versatile dashboard solution that offers a rich set of pre-built components to simplify web development.</p>
                <div class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Live Preview not available">
                  <a class="btn btn-light-dark mt-2 disabled" href="#" disabled
                    ><i class="ti ti-external-link"></i> Preview Flask</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card">
              <div class="card-body">
                <img src="<?= base_url('assets/images/landing/tech-nodejs.svg') ?>" alt="img" class="img-fluid" />
                <h4 class="mb-3 mt-2">NodeJS</h4>
                <p class="text-muted">Able Pro Node.js combines flexibility and functionality with a variety of pre-built components tailored for Node.js, which make it easier to develop.</p>
                <div class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Live Preview not available">
                  <a class="btn btn-light-dark mt-2 disabled" href="#" disabled
                    ><i class="ti ti-external-link"></i> Preview NodeJS</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card">
              <div class="card-body">
                <img src="<?= base_url('assets/images/landing/tech-l-b.svg') ?>" alt="img" class="img-fluid" />
                <h4 class="mb-3 mt-2">Laravel Bootstrap</h4>
                <p class="text-muted">Able Pro Laravel with Bootstrap provides a powerful set of tools and components, crafted specifically for Laravel, to simplify and accelerate your development process.</p>
                <div class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Live Preview not available">
                  <a class="btn btn-light-dark mt-2 disabled" href="#" disabled
                    ><i class="ti ti-external-link"></i> Preview Laravel Bootstrap</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card">
              <div class="card-body">
                <img src="<?= base_url('assets/images/landing/tech-svelteKit.svg') ?>" alt="img" class="img-fluid" />
                <h4 class="mb-3 mt-2">SvelteKit</h4>
                <p class="text-muted">Able Pro Svelte provides an extensive toolkit and components, allowing you to build dynamic and responsive interfaces with ease and efficiency.</p>
                <div class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Live Preview not available">
                  <a class="btn btn-light-dark mt-2 disabled" href="#" disabled
                    ><i class="ti ti-external-link"></i> Preview SvelteKit</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- [ Technologies ] End -->
    <!-- [ Top Features apps ] start -->
    <section>
      <div class="container title">
        <div
          class="row justify-content-center text-center wow fadeInUp"
          data-wow-delay="0.2s"
        >
          <div class="col-md-8 col-xl-6">
            <h2 class="mb-3">Complete Combo</h2>
            <p class="mb-0">
              Able Pro caters to the needs of both developers and designers,
              whether they are beginners or experts.
            </p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row g-4">
          <!-- <div class="col-md-6 col-lg-4">
            <div class="card">
              <div class="card-body mt-2">
                <h5 class="mb-3">Figma Design System</h5>
                <p class="text-muted">
                  Check the live preview of Able Pro Figma design file. Figma
                  file included in all licenses.
                </p>
                <img
                  class="pt-2"
                  alt="img"
                  src=<?= base_url('assets/images/landing/feature-figma.png') ?>
                  width="100%"
                />
                <a
                  class="btn btn-light-dark mt-3"
                  href="https://www.figma.com/file/6XqmRhRmkr33w0EFD49acY/Able-Pro--v9.0-Figma-Preview?type=design&node-id=46-226114&mode=design&t=4FS2Lw6WxsmJ3RLm-0"
                  target="_blank"
                  >Preview Figma <i class="ti ti-external-link"></i
                ></a>
              </div>
            </div>
          </div> -->
          <div class="col-md-6 col-lg-6">
          <div class="card h-100 mb-0">
              <div class="card-body mt-2">
                <h5 class="mb-3">Explore Components</h5>
                <p class="text-muted">
                  Access all components of Able Pro in one place to make your
                  development work easier.
                </p>
                <img
                  class="pt-2"
                  alt="img"
                  src=<?= base_url('assets/images/landing/feature-components.png') ?>
                  width="100%"
                />
                <a
                  class="btn btn-light-dark mt-3"
                  href="bc-alert"
                  target="_blank"
                  >View All Components <i class="ti ti-external-link"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6">
            <div class="card h-100 mb-0">
              <div class="card-body mt-2">
                <h5 class="mb-3">Documentation</h5>
                <p class="text-muted">Find solutions and navigate through our helper guide with ease. </p>
                <img class="pt-2" src="<?= base_url('assets/images/landing/feature-documentation.png') ?>" width="100%" />
                <a class="btn btn-light-dark mt-3" href="https://phoenixcoded.gitbook.io/able-pro/v/code-ignitor/">Check Documentation <i class="ti ti-external-link"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- [ Top Features ] End -->
    <!-- [ working apps ] start -->
    <section class="bg-primary overflow-hidden">
      <div class="container title">
        <div
          class="row justify-content-center text-center wow fadeInUp"
          data-wow-delay="0.2s"
        >
          <div class="col-md-8 col-xl-6">
            <h2 class="mb-3 text-white">Working Conceptual Apps</h2>
            <p class="mb-0 text-white text-opacity-75">
              Each App is carefully crafted to achieve the best feature rich
              working concept for your project
            </p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 app_dotsContainer">
            <a
              class="app-link wow fadeInUp"
              data-wow-delay="0.2s"
              href="#app_1"
            >
              <h4 class="text-white f-w-500">Chat</h4>
              <p class="mb-0 text-white text-opacity-75">
                Power your web apps with the conceptual chat app of Able Pro
                Dashboard Template.
              </p>
            </a>
            <a
              class="app-link wow fadeInUp"
              data-wow-delay="0.2s"
              href="#app_2"
            >
              <h4 class="text-white f-w-500">E-commerce</h4>
              <p class="mb-0 text-white text-opacity-75">
                Collection, Filter, Product Detail, Add New Product, and
                Checkout pages makes your e-commerce app complete.
              </p>
            </a>
            <a
              class="app-link wow fadeInUp"
              data-wow-delay="0.4s"
              href="#app_3"
            >
              <h4 class="text-white f-w-500">Inbox</h4>
              <p class="mb-0 text-white text-opacity-75">
                Compose Message, List Message (email), Detailed Inbox pages well
                suited for any conversation based web apps.
              </p>
            </a>
            <a
              class="app-link wow fadeInUp"
              data-wow-delay="0.6s"
              href="#app_4"
            >
              <h4 class="text-white f-w-500">User Management</h4>
              <p class="mb-0 text-white text-opacity-75">
                Detailed pages for User Management like Profile settings, role,
                account settings, social profile and more to explore.
              </p>
            </a>
          </div>
          <div
            class="col-md-6 position-relative wow fadeInRight"
            data-wow-delay="0.4s"
          >
            <div class="owl-carousel owl-theme screen-slide img-app-moke">
              <div class="item" data-hash="app_1">
                <img
                  src=<?= base_url('assets/images/landing/chat.png') ?>
                  alt="img"
                  class="img-fluid rounded"
                />
              </div>
              <div class="item" data-hash="app_2">
                <img
                  src=<?= base_url('assets/images/landing/e-commerce.png') ?>
                  alt="img"
                  class="img-fluid rounded"
                />
              </div>
              <div class="item" data-hash="app_3">
                <img
                  src=<?= base_url('assets/images/landing/mail.png') ?>
                  alt="img"
                  class="img-fluid rounded"
                />
              </div>
              <div class="item" data-hash="app_4">
                <img
                  src=<?= base_url('assets/images/landing/social.png') ?>
                  alt="img"
                  class="img-fluid rounded"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- [ working apps ] End -->
    <!-- [ Applications apps ] start -->
    <section class="bg-white">
      <div class="container title mb-0">
        <div class="row align-items-center wow fadeInUp" data-wow-delay="0.2s">
          <div class="col-md-8">
            <h2 class="mb-3">
              <span class="text-primary">TRY</span> BEFORE BUY
            </h2>
            <p class="text-muted mb-md-0">
              Download the Free MIT Able Pro Dashboard Template before make your
              purchase decision.
            </p>
          </div>
          <div class="col-md-4 text-md-end">
            <a
              class="btn btn-lg btn-outline-secondary bg-gray-100 m-1"
              href="dashboard-default"
              target="_blank"
              >Check out Pro Version</a
            >
            <a
              class="btn btn-lg btn-primary m-2"
              data-bs-toggle="tooltip"
              data-bs-placement="bottom"
              href="https://github.com/phoenixcoded/able-pro-free-admin-dashboard-template"
              target="_blank"
              title="Free version of Able Pro"
              ><i class="ti ti-brand-github"></i> Free (Soon)</a
            >
          </div>
        </div>
      </div>
    </section>
    <!-- [ Applications apps ] End -->
    <!-- [ support team apps ] start -->
    <section class="support-team-block">
      <div class="container title">
        <div
          class="row justify-content-center text-center wow fadeInUp"
          data-wow-delay="0.2s"
        >
          <div class="col-md-8 col-xl-6">
            <h2 class="mb-3">
              They <span class="text-primary">love</span> Able Pro, Now your
              turn 😍
            </h2>
            <!-- prettier-ignore -->
            <p class="mb-0"
              >We take pride in our Dashboard development, which has been consistently rated 4.6/5 by our satisfied customers. It brings us joy to share the positive feedback we have received from our loyal clients.</p
            >
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div
              class="marquee marquee-text wow fadeInUp"
              data-wow-delay="0.4s"
            >
              <ul class="list-inline marquee-list">
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src=<?= base_url('assets/images/user/avatar-1.jpg') ?>
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <p class="mb-1">
                            “Amazing template for fast develop.💎“
                          </p>
                          <small
                            >devbar -
                            <span class="text-muted"
                              >Customizability</span
                            ></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src=<?= base_url('assets/images/user/avatar-2.jpg') ?>
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <!-- prettier-ignore -->
                          <p class="mb-1">“Code quality is amazing. Design is astonishing. very easy to customize..😍“</p>
                          <small
                            >shahabblouch -
                            <span class="text-muted">Code Quality</span></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src=<?= base_url('assets/images/user/avatar-3.jpg') ?>
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <p class="mb-1">
                            “This has been one of my favorite admin dashboards
                            to use. 😍“
                          </p>
                          <small
                            >htmhell -
                            <span class="text-muted"
                              >Design Quality</span
                            ></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src=<?= base_url('assets/images/user/avatar-4.jpg') ?>
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <!-- prettier-ignore -->
                          <p class="mb-1">“Excellent support, if we need any modification, they are doing immediately“</p>
                          <small
                            >hemchandkodali -
                            <span class="text-muted"
                              >Customer Support</span
                            ></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src=<?= base_url('assets/images/user/avatar-5.jpg') ?>
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <p class="mb-1">
                            “For developers like me, this is the total package!
                            😍 “
                          </p>
                          <small
                            >sumaranjum -
                            <span class="text-muted"
                              >Feature Availability</span
                            ></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src=<?= base_url('assets/images/user/avatar-1.jpg') ?>
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <!-- prettier-ignore -->
                          <p class="mb-1"
                            >“I love the looks of Able Pro 7.0. I really like the colors you guys have chosen for this theme. It looks really nice.. 💎“</p
                          >
                          <small
                            >ritelogic -
                            <span class="text-muted">Other</span></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src=<?= base_url('assets/images/user/avatar-2.jpg') ?>
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <p class="mb-1">
                            “The author is very nice and solved my problem
                            inmediately 😍 “
                          </p>
                          <small
                            >richitela -
                            <span class="text-muted"
                              >Customer Support</span
                            ></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src=<?= base_url('assets/images/user/avatar-3.jpg') ?>
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <p class="mb-1">“Very universal admin template“</p>
                          <small
                            >Genstiade -
                            <span class="text-muted"
                              >Feature Availability</span
                            ></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src=<?= base_url('assets/images/user/avatar-4.jpg') ?>
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <p class="mb-1">
                            “An amazing template. Very good design, good quality
                            code and also very good customer support. 💎“
                          </p>
                          <small
                            >macugi -
                            <span class="text-muted">Code Quality</span></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src=<?= base_url('assets/images/user/avatar-5.jpg') ?>
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <!-- prettier-ignore -->
                          <p class="mb-1"
                            >“I have it running on a medium size site that is geared towards displaying stats tables and custom forms, a blog and a forum. My customers love the design and the speed in which the pages load. 😍 “</p
                          >
                          <small
                            >RizzoFrank -
                            <span class="text-muted"
                              >Design Quality</span
                            ></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div
              class="marquee-1 marquee-text wow fadeInUp"
              data-wow-delay="0.5s"
            >
              <ul class="list-inline marquee-list">
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src=<?= base_url('assets/images/user/avatar-1.jpg') ?>
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <p class="mb-1">
                            “Perfect for my need. Elegant look n feel with
                            blazing fast code. 💎“
                          </p>
                          <small
                            >ThemeShakers -
                            <span class="text-muted"
                              >Feature Availability</span
                            ></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src=<?= base_url('assets/images/user/avatar-2.jpg') ?>
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <!-- prettier-ignore -->
                          <p class="mb-1"
                            >“Excellent template! It's also very well organized and easy to find our way..“</p>
                          <small
                            >Danlec -
                            <span class="text-muted">Code Quality</span></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src=<?= base_url('assets/images/user/avatar-3.jpg') ?>
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <!-- prettier-ignore -->
                          <p class="mb-1"
                            >“Their Team is great and working great always. when you need help...“</p
                          >
                          <small
                            >manojkumarhr -
                            <span class="text-muted"
                              >Customer Support</span
                            ></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src=<?= base_url('assets/images/user/avatar-4.jpg') ?>
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <p class="mb-1">
                            “Wonderful theme, full of features, with ton of
                            addons.“
                          </p>
                          <small
                            >momennoor -
                            <span class="text-muted"
                              >Design Quality</span
                            ></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src=<?= base_url('assets/images/user/avatar-5.jpg') ?>
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <p class="mb-1">
                            “An excellent theme. It contains everything you need
                            to open complex projects. 😍 “
                          </p>
                          <small
                            >Vihtora -
                            <span class="text-muted">Other</span></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src=<?= base_url('assets/images/user/avatar-1.jpg') ?>
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <p class="mb-1">
                            “Excellent template. Very complete. 💎“
                          </p>
                          <small
                            >mundodascasas -
                            <span class="text-muted">Code Quality</span></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src=<?= base_url('assets/images/user/avatar-2.jpg') ?>
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <p class="mb-1">
                            “It serves my all purposes well and one thing it was
                            great because i didn't require designer at all.“
                          </p>
                          <small
                            >amit1134 -
                            <span class="text-muted">Code Quality</span></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src=<?= base_url('assets/images/user/avatar-3.jpg') ?>
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <!-- prettier-ignore -->
                          <p class="mb-1"
                            >“I highly recommend Able pro admin template and team phoenixcoded item. It was best purchase on themeforest for me.“</p
                          >
                          <small
                            >vishalmg -
                            <span class="text-muted">Flexibility</span></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src=<?= base_url('assets/images/user/avatar-4.jpg') ?>
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <!-- prettier-ignore -->
                          <p class="mb-1"
                            >“5 stars are for the excellent support, that is brilliant! The design is very cool and...!“</p
                          >
                          <small
                            >ab69aho -
                            <span class="text-muted">Code Quality</span></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- [ support team apps ] End -->
    <!-- [ companies apps ] start -->
    <section class="bg-white">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-12">
            <h2>Trusted By</h2>
            <p class="my-4 wow fadeInUp" data-wow-delay="0.2s">
              From Startups to Fortune 500 companies using our Template for
              their product.
            </p>
            <div class="row justify-content-center client-block g-5">
              <div class="col-auto wow fadeInRight" data-wow-delay="0.4s">
                <img
                  src=<?= base_url('assets/images/landing/client-eagames.svg') ?>
                  alt="img"
                  class="img-fluid"
                />
              </div>
              <div class="col-auto wow fadeInRight" data-wow-delay="0.4s">
                <img
                  src=<?= base_url('assets/images/landing/client-vodafone.svg') ?>
                  alt="img"
                  class="img-fluid"
                />
              </div>
              <div class="col-auto wow fadeInRight" data-wow-delay="0.4s">
                <img
                  src=<?= base_url('assets/images/landing/client-crystal-1.svg') ?>
                  alt="img"
                  class="img-fluid"
                />
              </div>
              <div class="col-auto wow fadeInRight" data-wow-delay="0.5s">
                <img
                  src=<?= base_url('assets/images/landing/client-haswent-2.svg') ?>
                  alt="img"
                  class="img-fluid"
                />
              </div>
              <div class="col-auto wow fadeInRight" data-wow-delay="0.6s">
                <img
                  src=<?= base_url('assets/images/landing/client-haxter-3.svg') ?>
                  alt="img"
                  class="img-fluid"
                />
              </div>
              <div class="col-auto wow fadeInRight" data-wow-delay="0.7s">
                <img
                  src=<?= base_url('assets/images/landing/client-montecito-4.svg') ?>
                  alt="img"
                  class="img-fluid"
                />
              </div>
              <div class="col-auto wow fadeInRight" data-wow-delay="0.8s">
                <img
                  src=<?= base_url('assets/images/landing/client-slingshot.svg') ?>
                  alt="img"
                  class="img-fluid"
                />
              </div>
              <div class="col-auto wow fadeInRight" data-wow-delay="0.9s">
                <img
                  src=<?= base_url('assets/images/landing/client-totalstudio-5.svg') ?>
                  alt="img"
                  class="img-fluid"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- [ companies apps ] End -->

    <!-- [ footer apps ] start -->
    <footer class="footer">
      <div class="container title mb-0">
        <div class="row align-items-center wow fadeInUp" data-wow-delay="0.2s">
          <div class="col-md-8">
            <h2 class="mb-3">Stay connected with us</h2>
            <p class="mb-4 mb-md-0">
              Simply submit your email, we share you the top news related to
              Able Pro feature updates, roadmap, and news.
            </p>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col">
                <input
                  type="email"
                  class="form-control"
                  placeholder="Enter your email"
                />
              </div>
              <div class="col-auto">
                <button class="btn btn-primary">Subscribe</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="border-top border-bottom footer-center">
        <div class="container">
          <div class="row">
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
              <img
                src=<?= base_url('assets/images/logo-dark.svg') ?>
                alt="image"
                class="img-fluid mb-3"
              />
              <p class="mb-4">
                Phoenixcoded has gained the trust of over 5.5K customers since
                2015, thanks to our commitment to delivering high-quality
                products. Our experienced team players are responsible for
                managing Able Pro.
              </p>
            </div>
            <div class="col-md-8">
              <div class="row">
                <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                  <h5 class="mb-4">Company</h5>
                  <ul class="list-unstyled footer-link">
                    <li>
                      <a href="https://1.envato.market/xk3bQd" target="_blank">Profile</a>
                    </li>
                    <li>
                      <a href="https://1.envato.market/Qyre4x" target="_blank">Portfolio</a>
                    </li>
                    <li>
                      <a href="https://1.envato.market/Py9k4X" target="_blank">Follow Us</a>
                    </li>
                    <li>
                      <a href="https://phoenixcoded.net" target="_blank">Website</a>
                    </li>
                  </ul>
                </div>
                <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.8s">
                  <h5 class="mb-4">Help & Support</h5>
                  <ul class="list-unstyled footer-link">
                    <li>
                      <a
                        href="https://phoenixcoded.gitbook.io/able-pro/"
                        target="_blank"
                        >Documentation</a
                      >
                    </li>
                    <li>
                      <a
                        href="https://phoenixcoded.gitbook.io/able-pro/roadmap/"
                        target="_blank"
                        >Feature Request</a
                      >
                    </li>
                    Explore Com
                    <li>
                      <a
                        href="https://phoenixcoded.gitbook.io/able-pro/roadmap/"
                        target="_blank"
                        >RoadMap</a
                      >
                    </li>
                    ponents
                    <li>
                      <a
                        href="https://phoenixcoded.authordesk.app/"
                        target="_blank"
                        >Support</a
                      >
                    </li>
                    <li>
                      <a
                        href="https://themeforest.net/user/phoenixcoded#contact"
                        target="_blank"
                        >Email Us</a
                      >
                    </li>
                  </ul>
                </div>
                <div class="col-sm-4 wow fadeInUp" data-wow-delay="1s">
                  <h5 class="mb-4">Useful Resources</h5>
                  <ul class="list-unstyled footer-link">
                    <li>
                      <a
                        href="https://themeforest.net/page/item_support_policy"
                        target="_blank"
                        >Support Policy</a
                      >
                    </li>
                    <li>
                      <a
                        href="https://themeforest.net/licenses/standard"
                        target="_blank"
                        >Licenses Term</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col my-1 wow fadeInUp" data-wow-delay="0.4s">
            <p class="mb-0">
              © Handcrafted by Team
              <a
                href="https://themeforest.net/user/phoenixcoded"
                target="_blank"
                >Phoenixcoded</a
              >
            </p>
          </div>
          <div class="col-auto my-1">
            <ul class="list-inline footer-sos-link mb-0">
              <li class="list-inline-item wow fadeInUp" data-wow-delay="0.4s">
                <a href="https://fb.com/phoenixcoded">
                  <svg class="pc-icon">
                    <use xlink:href="#custom-facebook"></use>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- [ footer apps ] End -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!-- [ Main Content ] end -->
  <?= $this->include('partials/footer-js') ?>
  <?= $this->include('partials/customizer.php') ?>
  <!-- [Page Specific JS] start -->
  <script src="<?= base_url('assets/js/plugins/wow.min.js') ?>"></script>
  <script src="https://cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="<?= base_url('assets/js/plugins/Jarallax.js') ?>"></script>
    <script>
      // Start [ Menu hide/show on scroll ]
      let ost = 0;
      document.addEventListener('scroll', function () {
        let cOst = document.documentElement.scrollTop;
        if (cOst == 0) {
          document.querySelector('.navbar').classList.add('top-nav-collapse');
        } else if (cOst > ost) {
          document.querySelector('.navbar').classList.add('top-nav-collapse');
          document.querySelector('.navbar').classList.remove('default');
        } else {
          document.querySelector('.navbar').classList.add('default');
          document.querySelector('.navbar').classList.remove('top-nav-collapse');
        }
        ost = cOst;
      });
      // End [ Menu hide/show on scroll ]
      new SimpleBar(document.querySelector('.scrollble-tech-block'));
      var wow = new WOW({
        animateClass: 'animated'
      });
      wow.init();

      // slider start
      $('.screen-slide').owlCarousel({
        loop: true,
        margin: 30,
        center: true,
        nav: false,
        dotsContainer: '.app_dotsContainer',
        URLhashListener: true,
        items: 1
      });
      $('.workspace-slider').owlCarousel({
        loop: true,
        margin: 30,
        center: true,
        nav: false,
        dotsContainer: '.workspace-card-block',
        URLhashListener: true,
        items: 1.5
      });
      // slider end
      // marquee start
      $('.marquee').marquee({
        duration: 500000,
        pauseOnHover: true,
        startVisible: true,
        duplicated: true
      });
      $('.marquee-1').marquee({
        duration: 500000,
        pauseOnHover: true,
        startVisible: true,
        duplicated: true,
        direction: 'right'
      });
      // marquee end
    </script>
  <!-- [Page Specific JS] end -->
</body>
  <!-- [Body] end -->
</html>
