<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* baseFront.html.twig */
class __TwigTemplate_9f3de73196baa2d29b3f2f05b84ab97c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title> ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicon.ico"), "html", null, true);
        echo "\" rel=\"icon\">
";
        // line 13
        $this->displayBlock('css', $context, $blocks);
        // line 34
        echo "</head>

<body> ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "
    <!-- Topbar Start -->
    <div class=\"container-fluid bg-dark text-light px-0 py-2\">
        <div class=\"row gx-0 d-none d-lg-flex\">
            <div class=\"col-lg-7 px-5 text-start\">
                <div class=\"h-100 d-inline-flex align-items-center me-4\">
                    <span class=\"fa fa-phone-alt me-2\"></span>
                    <span>+012 345 6789</span>
                </div>
                <div class=\"h-100 d-inline-flex align-items-center\">
                    <span class=\"far fa-envelope me-2\"></span>
                    <span>info@example.com</span>
                </div>
            </div>
            <div class=\"col-lg-5 px-5 text-end\">
                <div class=\"h-100 d-inline-flex align-items-center mx-n2\">
                    <span>Follow Us:</span>
                    <a class=\"btn btn-link text-light\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a class=\"btn btn-link text-light\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                    <a class=\"btn btn-link text-light\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                    <a class=\"btn btn-link text-light\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light sticky-top p-0\">
       
        
        <a href=\"index.html\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-7\">
            <h1 class=\"m-0\">WasteWise</h1>
        </a>
        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
                <a href=\"index.html\" class=\"nav-item nav-link active\">Home</a>
                <a href=\"about.html\" class=\"nav-item nav-link\">About</a>
                <a href=\"service.html\" class=\"nav-item nav-link\">Services</a>
                <a href=\"project.html\" class=\"nav-item nav-link\">Projects</a>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                    <div class=\"dropdown-menu bg-light m-0\">
                        <a href=\"feature.html\" class=\"dropdown-item\">Features</a>
                        <a href=\"quote.html\" class=\"dropdown-item\">Free Quote</a>
                        <a href=\"team.html\" class=\"dropdown-item\">Our Team</a>
                        <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                        <a href=\"404.html\" class=\"dropdown-item\">404 Page</a>
                    </div>
                </div>
                <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
            </div>
            <a href=\"\" class=\"btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block\">Get A Quote<i class=\"fa fa-arrow-right ms-3\"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class=\"container-fluid p-0 wow fadeIn\" data-wow-delay=\"0.1s\">
        <div id=\"header-carousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img class=\"w-100\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/carousel-1.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                    <div class=\"carousel-caption\">
                        <div class=\"container\">
                            <div class=\"row justify-content-center\">
                                <div class=\"col-lg-8\">
                                    <a href=\"\" class=\"btn btn-primary py-sm-3 px-sm-4\">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img class=\"w-100\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/carousel-2.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                    <div class=\"carousel-caption\">
                        <div class=\"container\">
                            <div class=\"row justify-content-center\">
                                <div class=\"col-lg-7\">
                                    <a href=\"\" class=\"btn btn-primary py-sm-3 px-sm-4\">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img class=\"w-100\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/carousel-3.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                    <div class=\"carousel-caption\">
                        <div class=\"container\">
                            <div class=\"row justify-content-center\">
                                <div class=\"col-lg-7\">
                                    <a href=\"\" class=\"btn btn-primary py-sm-3 px-sm-4\">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#header-carousel\"
                data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Previous</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#header-carousel\"
                data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Top Feature Start -->
    <div class=\"container-fluid top-feature py-5 pt-lg-0\">
        <div class=\"container py-5 pt-lg-0\">
            <div class=\"row gx-0\">
                <div class=\"col-lg-4 wow fadeIn\" data-wow-delay=\"0.1s\">
                    <div class=\"bg-white shadow d-flex align-items-center h-100 px-5\" style=\"min-height: 160px;\">
                        <div class=\"d-flex\">
                            <div class=\"flex-shrink-0 btn-lg-square rounded-circle bg-light\">
                                <i class=\"fa fa-times text-primary\"></i>
                            </div>
                            <div class=\"ps-3\">
                                <h4>No Hidden Cost</h4>
                                <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 wow fadeIn\" data-wow-delay=\"0.3s\">
                    <div class=\"bg-white shadow d-flex align-items-center h-100 px-5\" style=\"min-height: 160px;\">
                        <div class=\"d-flex\">
                            <div class=\"flex-shrink-0 btn-lg-square rounded-circle bg-light\">
                                <i class=\"fa fa-users text-primary\"></i>
                            </div>
                            <div class=\"ps-3\">
                                <h4>Dedicated Team</h4>
                                <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 wow fadeIn\" data-wow-delay=\"0.5s\">
                    <div class=\"bg-white shadow d-flex align-items-center h-100 px-5\" style=\"min-height: 160px;\">
                        <div class=\"d-flex\">
                            <div class=\"flex-shrink-0 btn-lg-square rounded-circle bg-light\">
                                <i class=\"fa fa-phone text-primary\"></i>
                            </div>
                            <div class=\"ps-3\">
                                <h4>24/7 Available</h4>
                                <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Feature End -->


    <!-- About Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-5 align-items-end\">
                <div class=\"col-lg-3 col-md-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <img class=\"img-fluid rounded\" data-wow-delay=\"0.1s\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/about.jpg"), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-lg-6 col-md-7 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <h1 class=\"display-1 text-primary mb-0\">25</h1>
                    <p class=\"text-primary mb-4\">Year of Experience</p>
                    <h1 class=\"display-5 mb-4\">We Make Your Home Like A Garden</h1>
                    <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <a class=\"btn btn-primary py-3 px-4\" href=\"\">Explore More</a>
                </div>
                <div class=\"col-lg-3 col-md-12 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"row g-5\">
                        <div class=\"col-12 col-sm-6 col-lg-12\">
                            <div class=\"border-start ps-4\">
                                <i class=\"fa fa-award fa-3x text-primary mb-3\"></i>
                                <h4 class=\"mb-3\">Award Winning</h4>
                                <span>Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna</span>
                            </div>
                        </div>
                        <div class=\"col-12 col-sm-6 col-lg-12\">
                            <div class=\"border-start ps-4\">
                                <i class=\"fa fa-users fa-3x text-primary mb-3\"></i>
                                <h4 class=\"mb-3\">Dedicated Team</h4>
                                <span>Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class=\"container-fluid facts my-5 py-5\" data-parallax=\"scroll\" data-image-src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/carousel-1.jpg"), "html", null, true);
        echo "\">
        <div class=\"container py-5\">
            <div class=\"row g-5\">
                <div class=\"col-sm-6 col-lg-3 text-center wow fadeIn\" data-wow-delay=\"0.1s\">
                    <h1 class=\"display-4 text-white\" data-toggle=\"counter-up\">1234</h1>
                    <span class=\"fs-5 fw-semi-bold text-light\">Happy Clients</span>
                </div>
                <div class=\"col-sm-6 col-lg-3 text-center wow fadeIn\" data-wow-delay=\"0.3s\">
                    <h1 class=\"display-4 text-white\" data-toggle=\"counter-up\">1234</h1>
                    <span class=\"fs-5 fw-semi-bold text-light\">Garden Complated</span>
                </div>
                <div class=\"col-sm-6 col-lg-3 text-center wow fadeIn\" data-wow-delay=\"0.5s\">
                    <h1 class=\"display-4 text-white\" data-toggle=\"counter-up\">1234</h1>
                    <span class=\"fs-5 fw-semi-bold text-light\">Dedicated Staff</span>
                </div>
                <div class=\"col-sm-6 col-lg-3 text-center wow fadeIn\" data-wow-delay=\"0.7s\">
                    <h1 class=\"display-4 text-white\" data-toggle=\"counter-up\">1234</h1>
                    <span class=\"fs-5 fw-semi-bold text-light\">Awards Achieved</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-5 align-items-center\">
                <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <p class=\"fs-5 fw-bold text-primary\">Why Choosing Us!</p>
                    <h1 class=\"display-5 mb-4\">Few Reasons Why People Choosing Us!</h1>
                    <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <a class=\"btn btn-primary py-3 px-4\" href=\"\">Explore More</a>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"row g-4 align-items-center\">
                        <div class=\"col-md-6\">
                            <div class=\"row g-4\">
                                <div class=\"col-12 wow fadeIn\" data-wow-delay=\"0.3s\">
                                    <div class=\"text-center rounded py-5 px-4\" style=\"box-shadow: 0 0 45px rgba(0,0,0,.08);\">
                                        <div class=\"btn-square bg-light rounded-circle mx-auto mb-4\" style=\"width: 90px; height: 90px;\">
                                            <i class=\"fa fa-check fa-3x text-primary\"></i>
                                        </div>
                                        <h4 class=\"mb-0\">100% Satisfaction</h4>
                                    </div>
                                </div>
                                <div class=\"col-12 wow fadeIn\" data-wow-delay=\"0.5s\">
                                    <div class=\"text-center rounded py-5 px-4\" style=\"box-shadow: 0 0 45px rgba(0,0,0,.08);\">
                                        <div class=\"btn-square bg-light rounded-circle mx-auto mb-4\" style=\"width: 90px; height: 90px;\">
                                            <i class=\"fa fa-users fa-3x text-primary\"></i>
                                        </div>
                                        <h4 class=\"mb-0\">Dedicated Team</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 wow fadeIn\" data-wow-delay=\"0.7s\">
                            <div class=\"text-center rounded py-5 px-4\" style=\"box-shadow: 0 0 45px rgba(0,0,0,.08);\">
                                <div class=\"btn-square bg-light rounded-circle mx-auto mb-4\" style=\"width: 90px; height: 90px;\">
                                    <i class=\"fa fa-tools fa-3x text-primary\"></i>
                                </div>
                                <h4 class=\"mb-0\">Modern Equipment</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Service Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"max-width: 500px;\">
                <p class=\"fs-5 fw-bold text-primary\">Our Services</p>
                <h1 class=\"display-5 mb-5\">Services That We Offer For You</h1>
            </div>
            <div class=\"row g-4\">
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"service-item rounded d-flex h-100\">
                        <div class=\"service-img rounded\">
                            <img class=\"img-fluid\" src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/service-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"service-text rounded p-5\">
                            <div class=\"btn-square rounded-circle mx-auto mb-3\">
                                <img class=\"img-fluid\" src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/icon/icon-3.png"), "html", null, true);
        echo "\" alt=\"Icon\">
                            </div>
                            <h4 class=\"mb-3\">Landscaping</h4>
                            <p class=\"mb-4\">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            <a class=\"btn btn-sm\" href=\"\"><i class=\"fa fa-plus text-primary me-2\"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"service-item rounded d-flex h-100\">
                        <div class=\"service-img rounded\">
                            <img class=\"img-fluid\" src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/service-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"service-text rounded p-5\">
                            <div class=\"btn-square rounded-circle mx-auto mb-3\">
                                <img class=\"img-fluid\" src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/icon/icon-6.png"), "html", null, true);
        echo "\" alt=\"Icon\">
                            </div>
                            <h4 class=\"mb-3\">Pruning plants</h4>
                            <p class=\"mb-4\">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            <a class=\"btn btn-sm\" href=\"\"><i class=\"fa fa-plus text-primary me-2\"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"service-item rounded d-flex h-100\">
                        <div class=\"service-img rounded\">
                            <img class=\"img-fluid\" src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/service-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"service-text rounded p-5\">
                            <div class=\"btn-square rounded-circle mx-auto mb-3\">
                                <img class=\"img-fluid\" src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/icon/icon-5.png"), "html", null, true);
        echo "\" alt=\"Icon\">
                            </div>
                            <h4 class=\"mb-3\">Irrigation & Drainage</h4>
                            <p class=\"mb-4\">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            <a class=\"btn btn-sm\" href=\"\"><i class=\"fa fa-plus text-primary me-2\"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"service-item rounded d-flex h-100\">
                        <div class=\"service-img rounded\">
                            <img class=\"img-fluid\" src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/service-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"service-text rounded p-5\">
                            <div class=\"btn-square rounded-circle mx-auto mb-3\">
                                <img class=\"img-fluid\" src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/icon/icon-4.png"), "html", null, true);
        echo "\" alt=\"Icon\">
                            </div>
                            <h4 class=\"mb-3\">Garden Maintenance </h4>
                            <p class=\"mb-4\">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            <a class=\"btn btn-sm\" href=\"\"><i class=\"fa fa-plus text-primary me-2\"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"service-item rounded d-flex h-100\">
                        <div class=\"service-img rounded\">
                            <img class=\"img-fluid\" src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/service-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"service-text rounded p-5\">
                            <div class=\"btn-square rounded-circle mx-auto mb-3\">
                                <img class=\"img-fluid\" src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/icon/icon-8.png"), "html", null, true);
        echo "\" alt=\"Icon\">
                            </div>
                            <h4 class=\"mb-3\">Green Technology</h4>
                            <p class=\"mb-4\">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            <a class=\"btn btn-sm\" href=\"\"><i class=\"fa fa-plus text-primary me-2\"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"service-item rounded d-flex h-100\">
                        <div class=\"service-img rounded\">
                            <img class=\"img-fluid\" src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/service-6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"service-text rounded p-5\">
                            <div class=\"btn-square rounded-circle mx-auto mb-3\">
                                <img class=\"img-fluid\" src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/icon/icon-2.png"), "html", null, true);
        echo "\" alt=\"Icon\">
                            </div>
                            <h4 class=\"mb-3\">Urban Gardening</h4>
                            <p class=\"mb-4\">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            <a class=\"btn btn-sm\" href=\"\"><i class=\"fa fa-plus text-primary me-2\"></i>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Quote Start -->
    <div class=\"container-fluid quote my-5 py-5\" data-parallax=\"scroll\" data-image-src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/carousel-2.jpg"), "html", null, true);
        echo "\">
        <div class=\"container py-5\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-7\">
                    <div class=\"bg-white rounded p-4 p-sm-5 wow fadeIn\" data-wow-delay=\"0.5s\">
                        <h1 class=\"display-5 text-center mb-5\">Get A Free Quote</h1>
                        <div class=\"row g-3\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-floating\">
                                    <input type=\"text\" class=\"form-control bg-light border-0\" id=\"gname\" placeholder=\"Gurdian Name\">
                                    <label for=\"gname\">Your Name</label>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-floating\">
                                    <input type=\"email\" class=\"form-control bg-light border-0\" id=\"gmail\" placeholder=\"Gurdian Email\">
                                    <label for=\"gmail\">Your Email</label>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-floating\">
                                    <input type=\"text\" class=\"form-control bg-light border-0\" id=\"cname\" placeholder=\"Child Name\">
                                    <label for=\"cname\">Your Mobile</label>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-floating\">
                                    <input type=\"text\" class=\"form-control bg-light border-0\" id=\"cage\" placeholder=\"Child Age\">
                                    <label for=\"cage\">Service Type</label>
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <div class=\"form-floating\">
                                    <textarea class=\"form-control bg-light border-0\" placeholder=\"Leave a message here\" id=\"message\" style=\"height: 100px\"></textarea>
                                    <label for=\"message\">Message</label>
                                </div>
                            </div>
                            <div class=\"col-12 text-center\">
                                <button class=\"btn btn-primary py-3 px-4\" type=\"submit\">Submit Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


    <!-- Projects Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"max-width: 500px;\">
                <p class=\"fs-5 fw-bold text-primary\">Our Projects</p>
                <h1 class=\"display-5 mb-5\">Some Of Our Wonderful Projects</h1>
            </div>
            <div class=\"row wow fadeInUp\" data-wow-delay=\"0.3s\">
                <div class=\"col-12 text-center\">
                    <ul class=\"list-inline rounded mb-5\" id=\"portfolio-flters\">
                        <li class=\"mx-2 active\" data-filter=\"*\">All</li>
                        <li class=\"mx-2\" data-filter=\".first\">Complete Projects</li>
                        <li class=\"mx-2\" data-filter=\".second\">Ongoing Projects</li>
                    </ul>
                </div>
            </div>
            <div class=\"row g-4 portfolio-container\">
                <div class=\"col-lg-4 col-md-6 portfolio-item first wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"portfolio-inner rounded\">
                        <img class=\"img-fluid\" src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/service-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"portfolio-text\">
                            <h4 class=\"text-white mb-4\">Landscaping</h4>
                            <div class=\"d-flex\">
                                <a class=\"btn btn-lg-square rounded-circle mx-2\" href=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/service-1.jpg"), "html", null, true);
        echo "\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                                <a class=\"btn btn-lg-square rounded-circle mx-2\" href=\"\"><i class=\"fa fa-link\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 portfolio-item second wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"portfolio-inner rounded\">
                        <img class=\"img-fluid\" src=\"";
        // line 507
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/service-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"portfolio-text\">
                            <h4 class=\"text-white mb-4\">Pruning plants</h4>
                            <div class=\"d-flex\">
                                <a class=\"btn btn-lg-square rounded-circle mx-2\" href=\"";
        // line 511
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/service-2.jpg"), "html", null, true);
        echo "\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                                <a class=\"btn btn-lg-square rounded-circle mx-2\" href=\"\"><i class=\"fa fa-link\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 portfolio-item first wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"portfolio-inner rounded\">
                        <img class=\"img-fluid\" src=\"";
        // line 519
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/service-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"portfolio-text\">
                            <h4 class=\"text-white mb-4\">Irrigation & Drainage</h4>
                            <div class=\"d-flex\">
                                <a class=\"btn btn-lg-square rounded-circle mx-2\" href=\"";
        // line 523
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/service-3.jpg"), "html", null, true);
        echo "\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                                <a class=\"btn btn-lg-square rounded-circle mx-2\" href=\"\"><i class=\"fa fa-link\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 portfolio-item second wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"portfolio-inner rounded\">
                        <img class=\"img-fluid\" src=\"";
        // line 531
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/service-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"portfolio-text\">
                            <h4 class=\"text-white mb-4\">Garden Maintenance</h4>
                            <div class=\"d-flex\">
                                <a class=\"btn btn-lg-square rounded-circle mx-2\" href=\"";
        // line 535
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/service-4.jpg"), "html", null, true);
        echo "\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                                <a class=\"btn btn-lg-square rounded-circle mx-2\" href=\"\"><i class=\"fa fa-link\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 portfolio-item first wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"portfolio-inner rounded\">
                        <img class=\"img-fluid\" src=\"";
        // line 543
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/service-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"portfolio-text\">
                            <h4 class=\"text-white mb-4\">Green Technology</h4>
                            <div class=\"d-flex\">
                                <a class=\"btn btn-lg-square rounded-circle mx-2\" href=\"";
        // line 547
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/service-5.jpg"), "html", null, true);
        echo "\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                                <a class=\"btn btn-lg-square rounded-circle mx-2\" href=\"\"><i class=\"fa fa-link\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 portfolio-item second wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"portfolio-inner rounded\">
                        <img class=\"img-fluid\" src=\"";
        // line 555
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/service-6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"portfolio-text\">
                            <h4 class=\"text-white mb-4\">Urban Gardening</h4>
                            <div class=\"d-flex\">
                                <a class=\"btn btn-lg-square rounded-circle mx-2\" href=\"";
        // line 559
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/service-6.jpg"), "html", null, true);
        echo "\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                                <a class=\"btn btn-lg-square rounded-circle mx-2\" href=\"\"><i class=\"fa fa-link\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->


    <!-- Team Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"max-width: 500px;\">
                <p class=\"fs-5 fw-bold text-primary\">Our Team</p>
                <h1 class=\"display-5 mb-5\">Dedicated & Experienced Team Members</h1>
            </div>
            <div class=\"row g-4\">
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"team-item rounded\">
                        <img class=\"img-fluid\" src=\"";
        // line 581
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/team-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"team-text\">
                            <h4 class=\"mb-0\">Doris Jordan</h4>
                            <p class=\"text-primary\">Landscape Designer</p>
                            <div class=\"team-social d-flex\">
                                <a class=\"btn btn-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"team-item rounded\">
                        <img class=\"img-fluid\" src=\"";
        // line 595
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/team-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"team-text\">
                            <h4 class=\"mb-0\">Johnny Ramirez</h4>
                            <p class=\"text-primary\">Garden Designer</p>
                            <div class=\"team-social d-flex\">
                                <a class=\"btn btn-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"team-item rounded\">
                        <img class=\"img-fluid\" src=\"";
        // line 609
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/team-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"team-text\">
                            <h4 class=\"mb-0\">Diana Wagner</h4>
                            <p class=\"text-primary\">Senior Gardener</p>
                            <div class=\"team-social d-flex\">
                                <a class=\"btn btn-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-5\">
                <div class=\"col-lg-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <p class=\"fs-5 fw-bold text-primary\">Testimonial</p>
                    <h1 class=\"display-5 mb-5\">What Our Clients Say About Us!</h1>
                    <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.</p>
                    <a class=\"btn btn-primary py-3 px-4\" href=\"\">See More</a>
                </div>
                <div class=\"col-lg-7 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"owl-carousel testimonial-carousel\">
                        <div class=\"testimonial-item\">
                            <img class=\"img-fluid rounded mb-3\" src=\"";
        // line 640
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/testimonial-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <p class=\"fs-5\">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <h4>Client Name</h4>
                            <span>Profession</span>
                        </div>
                        <div class=\"testimonial-item\">
                            <img class=\"img-fluid rounded mb-3\" src=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/testimonial-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <p class=\"fs-5\">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <h4>Client Name</h4>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-white mb-4\">Our Office</h4>
                    <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York, USA</p>
                    <p class=\"mb-2\"><i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890</p>
                    <p class=\"mb-2\"><i class=\"fa fa-envelope me-3\"></i>info@example.com</p>
                    <div class=\"d-flex pt-2\">
                        <a class=\"btn btn-square btn-outline-light rounded-circle me-2\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-square btn-outline-light rounded-circle me-2\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-square btn-outline-light rounded-circle me-2\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                        <a class=\"btn btn-square btn-outline-light rounded-circle me-2\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-white mb-4\">Services</h4>
                    <a class=\"btn btn-link\" href=\"\">Landscaping</a>
                    <a class=\"btn btn-link\" href=\"\">Pruning plants</a>
                    <a class=\"btn btn-link\" href=\"\">Urban Gardening</a>
                    <a class=\"btn btn-link\" href=\"\">Garden Maintenance</a>
                    <a class=\"btn btn-link\" href=\"\">Green Technology</a>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-white mb-4\">Quick Links</h4>
                    <a class=\"btn btn-link\" href=\"\">About Us</a>
                    <a class=\"btn btn-link\" href=\"\">Contact Us</a>
                    <a class=\"btn btn-link\" href=\"\">Our Services</a>
                    <a class=\"btn btn-link\" href=\"\">Terms & Condition</a>
                    <a class=\"btn btn-link\" href=\"\">Support</a>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-white mb-4\">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class=\"position-relative w-100\">
                        <input class=\"form-control bg-light border-light w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Your email\">
                        <button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class=\"container-fluid copyright py-4\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                    &copy; <a class=\"border-bottom\" href=\"#\">Your Site Name</a>, All Right Reserved.
                </div>
                <div class=\"col-md-6 text-center text-md-end\">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                    Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a> Distributed By <a href=\"https://themewagon.com\">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>

";
        // line 725
        $this->displayBlock('javascripts', $context, $blocks);
        // line 741
        echo "</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Gardener - Gardening Website Template ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 14
        echo "    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap\" rel=\"stylesheet\">  

    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/lib/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/lib/lightbox/css/lightbox.min.css\" rel=\"stylesheet"), "html", null, true);
        echo "\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/style.css\" rel=\"stylesheet"), "html", null, true);
        echo "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "    <!-- Spinner Start -->
    <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
        <div class=\"spinner-border text-primary\" role=\"status\" style=\"width: 3rem; height: 3rem;\"></div>
    </div>
    <!-- Spinner End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 725
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 726
        echo "    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"";
        // line 729
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/lib/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 730
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 731
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 732
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 733
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/lib/counterup/counterup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 734
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/lib/parallax/parallax.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 735
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/lib/isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 736
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/lib/lightbox/js/lightbox.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Javascript -->
    <script src=\"";
        // line 739
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "baseFront.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  1025 => 739,  1019 => 736,  1015 => 735,  1011 => 734,  1007 => 733,  1003 => 732,  999 => 731,  995 => 730,  991 => 729,  986 => 726,  976 => 725,  961 => 37,  951 => 36,  939 => 32,  933 => 29,  927 => 26,  923 => 25,  919 => 24,  907 => 14,  897 => 13,  878 => 6,  866 => 741,  864 => 725,  782 => 646,  773 => 640,  739 => 609,  722 => 595,  705 => 581,  680 => 559,  673 => 555,  662 => 547,  655 => 543,  644 => 535,  637 => 531,  626 => 523,  619 => 519,  608 => 511,  601 => 507,  590 => 499,  583 => 495,  512 => 427,  494 => 412,  487 => 408,  473 => 397,  466 => 393,  452 => 382,  445 => 378,  431 => 367,  424 => 363,  410 => 352,  403 => 348,  389 => 337,  382 => 333,  295 => 249,  258 => 215,  174 => 134,  159 => 122,  144 => 110,  75 => 43,  73 => 36,  69 => 34,  67 => 13,  63 => 12,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title> {% block title %}Gardener - Gardening Website Template {% endblock %}</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"{{asset('Front/img/favicon.ico')}}\" rel=\"icon\">
{% block css %}
    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap\" rel=\"stylesheet\">  

    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"{{asset('Front/lib/animate/animate.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('Front/lib/owlcarousel/assets/owl.carousel.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('Front/lib/lightbox/css/lightbox.min.css\" rel=\"stylesheet')}}\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"{{asset('Front/css/bootstrap.min.css')}}\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"{{asset('Front/css/style.css\" rel=\"stylesheet')}}\">
    {% endblock %}
</head>

<body> {% block body %}
    <!-- Spinner Start -->
    <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
        <div class=\"spinner-border text-primary\" role=\"status\" style=\"width: 3rem; height: 3rem;\"></div>
    </div>
    <!-- Spinner End -->
{% endblock %}

    <!-- Topbar Start -->
    <div class=\"container-fluid bg-dark text-light px-0 py-2\">
        <div class=\"row gx-0 d-none d-lg-flex\">
            <div class=\"col-lg-7 px-5 text-start\">
                <div class=\"h-100 d-inline-flex align-items-center me-4\">
                    <span class=\"fa fa-phone-alt me-2\"></span>
                    <span>+012 345 6789</span>
                </div>
                <div class=\"h-100 d-inline-flex align-items-center\">
                    <span class=\"far fa-envelope me-2\"></span>
                    <span>info@example.com</span>
                </div>
            </div>
            <div class=\"col-lg-5 px-5 text-end\">
                <div class=\"h-100 d-inline-flex align-items-center mx-n2\">
                    <span>Follow Us:</span>
                    <a class=\"btn btn-link text-light\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a class=\"btn btn-link text-light\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                    <a class=\"btn btn-link text-light\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                    <a class=\"btn btn-link text-light\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light sticky-top p-0\">
       
        
        <a href=\"index.html\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-7\">
            <h1 class=\"m-0\">WasteWise</h1>
        </a>
        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
                <a href=\"index.html\" class=\"nav-item nav-link active\">Home</a>
                <a href=\"about.html\" class=\"nav-item nav-link\">About</a>
                <a href=\"service.html\" class=\"nav-item nav-link\">Services</a>
                <a href=\"project.html\" class=\"nav-item nav-link\">Projects</a>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                    <div class=\"dropdown-menu bg-light m-0\">
                        <a href=\"feature.html\" class=\"dropdown-item\">Features</a>
                        <a href=\"quote.html\" class=\"dropdown-item\">Free Quote</a>
                        <a href=\"team.html\" class=\"dropdown-item\">Our Team</a>
                        <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                        <a href=\"404.html\" class=\"dropdown-item\">404 Page</a>
                    </div>
                </div>
                <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
            </div>
            <a href=\"\" class=\"btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block\">Get A Quote<i class=\"fa fa-arrow-right ms-3\"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class=\"container-fluid p-0 wow fadeIn\" data-wow-delay=\"0.1s\">
        <div id=\"header-carousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img class=\"w-100\" src=\"{{asset('Front/img/carousel-1.jpg')}}\" alt=\"Image\">
                    <div class=\"carousel-caption\">
                        <div class=\"container\">
                            <div class=\"row justify-content-center\">
                                <div class=\"col-lg-8\">
                                    <a href=\"\" class=\"btn btn-primary py-sm-3 px-sm-4\">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img class=\"w-100\" src=\"{{asset('Front/img/carousel-2.jpg')}}\" alt=\"Image\">
                    <div class=\"carousel-caption\">
                        <div class=\"container\">
                            <div class=\"row justify-content-center\">
                                <div class=\"col-lg-7\">
                                    <a href=\"\" class=\"btn btn-primary py-sm-3 px-sm-4\">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img class=\"w-100\" src=\"{{asset('Front/img/carousel-3.jpg')}}\" alt=\"Image\">
                    <div class=\"carousel-caption\">
                        <div class=\"container\">
                            <div class=\"row justify-content-center\">
                                <div class=\"col-lg-7\">
                                    <a href=\"\" class=\"btn btn-primary py-sm-3 px-sm-4\">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#header-carousel\"
                data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Previous</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#header-carousel\"
                data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Top Feature Start -->
    <div class=\"container-fluid top-feature py-5 pt-lg-0\">
        <div class=\"container py-5 pt-lg-0\">
            <div class=\"row gx-0\">
                <div class=\"col-lg-4 wow fadeIn\" data-wow-delay=\"0.1s\">
                    <div class=\"bg-white shadow d-flex align-items-center h-100 px-5\" style=\"min-height: 160px;\">
                        <div class=\"d-flex\">
                            <div class=\"flex-shrink-0 btn-lg-square rounded-circle bg-light\">
                                <i class=\"fa fa-times text-primary\"></i>
                            </div>
                            <div class=\"ps-3\">
                                <h4>No Hidden Cost</h4>
                                <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 wow fadeIn\" data-wow-delay=\"0.3s\">
                    <div class=\"bg-white shadow d-flex align-items-center h-100 px-5\" style=\"min-height: 160px;\">
                        <div class=\"d-flex\">
                            <div class=\"flex-shrink-0 btn-lg-square rounded-circle bg-light\">
                                <i class=\"fa fa-users text-primary\"></i>
                            </div>
                            <div class=\"ps-3\">
                                <h4>Dedicated Team</h4>
                                <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 wow fadeIn\" data-wow-delay=\"0.5s\">
                    <div class=\"bg-white shadow d-flex align-items-center h-100 px-5\" style=\"min-height: 160px;\">
                        <div class=\"d-flex\">
                            <div class=\"flex-shrink-0 btn-lg-square rounded-circle bg-light\">
                                <i class=\"fa fa-phone text-primary\"></i>
                            </div>
                            <div class=\"ps-3\">
                                <h4>24/7 Available</h4>
                                <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Feature End -->


    <!-- About Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-5 align-items-end\">
                <div class=\"col-lg-3 col-md-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <img class=\"img-fluid rounded\" data-wow-delay=\"0.1s\" src=\"{{asset('Front/img/about.jpg')}}\">
                </div>
                <div class=\"col-lg-6 col-md-7 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <h1 class=\"display-1 text-primary mb-0\">25</h1>
                    <p class=\"text-primary mb-4\">Year of Experience</p>
                    <h1 class=\"display-5 mb-4\">We Make Your Home Like A Garden</h1>
                    <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <a class=\"btn btn-primary py-3 px-4\" href=\"\">Explore More</a>
                </div>
                <div class=\"col-lg-3 col-md-12 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"row g-5\">
                        <div class=\"col-12 col-sm-6 col-lg-12\">
                            <div class=\"border-start ps-4\">
                                <i class=\"fa fa-award fa-3x text-primary mb-3\"></i>
                                <h4 class=\"mb-3\">Award Winning</h4>
                                <span>Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna</span>
                            </div>
                        </div>
                        <div class=\"col-12 col-sm-6 col-lg-12\">
                            <div class=\"border-start ps-4\">
                                <i class=\"fa fa-users fa-3x text-primary mb-3\"></i>
                                <h4 class=\"mb-3\">Dedicated Team</h4>
                                <span>Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class=\"container-fluid facts my-5 py-5\" data-parallax=\"scroll\" data-image-src=\"{{asset('Front/img/carousel-1.jpg')}}\">
        <div class=\"container py-5\">
            <div class=\"row g-5\">
                <div class=\"col-sm-6 col-lg-3 text-center wow fadeIn\" data-wow-delay=\"0.1s\">
                    <h1 class=\"display-4 text-white\" data-toggle=\"counter-up\">1234</h1>
                    <span class=\"fs-5 fw-semi-bold text-light\">Happy Clients</span>
                </div>
                <div class=\"col-sm-6 col-lg-3 text-center wow fadeIn\" data-wow-delay=\"0.3s\">
                    <h1 class=\"display-4 text-white\" data-toggle=\"counter-up\">1234</h1>
                    <span class=\"fs-5 fw-semi-bold text-light\">Garden Complated</span>
                </div>
                <div class=\"col-sm-6 col-lg-3 text-center wow fadeIn\" data-wow-delay=\"0.5s\">
                    <h1 class=\"display-4 text-white\" data-toggle=\"counter-up\">1234</h1>
                    <span class=\"fs-5 fw-semi-bold text-light\">Dedicated Staff</span>
                </div>
                <div class=\"col-sm-6 col-lg-3 text-center wow fadeIn\" data-wow-delay=\"0.7s\">
                    <h1 class=\"display-4 text-white\" data-toggle=\"counter-up\">1234</h1>
                    <span class=\"fs-5 fw-semi-bold text-light\">Awards Achieved</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-5 align-items-center\">
                <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <p class=\"fs-5 fw-bold text-primary\">Why Choosing Us!</p>
                    <h1 class=\"display-5 mb-4\">Few Reasons Why People Choosing Us!</h1>
                    <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <a class=\"btn btn-primary py-3 px-4\" href=\"\">Explore More</a>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"row g-4 align-items-center\">
                        <div class=\"col-md-6\">
                            <div class=\"row g-4\">
                                <div class=\"col-12 wow fadeIn\" data-wow-delay=\"0.3s\">
                                    <div class=\"text-center rounded py-5 px-4\" style=\"box-shadow: 0 0 45px rgba(0,0,0,.08);\">
                                        <div class=\"btn-square bg-light rounded-circle mx-auto mb-4\" style=\"width: 90px; height: 90px;\">
                                            <i class=\"fa fa-check fa-3x text-primary\"></i>
                                        </div>
                                        <h4 class=\"mb-0\">100% Satisfaction</h4>
                                    </div>
                                </div>
                                <div class=\"col-12 wow fadeIn\" data-wow-delay=\"0.5s\">
                                    <div class=\"text-center rounded py-5 px-4\" style=\"box-shadow: 0 0 45px rgba(0,0,0,.08);\">
                                        <div class=\"btn-square bg-light rounded-circle mx-auto mb-4\" style=\"width: 90px; height: 90px;\">
                                            <i class=\"fa fa-users fa-3x text-primary\"></i>
                                        </div>
                                        <h4 class=\"mb-0\">Dedicated Team</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 wow fadeIn\" data-wow-delay=\"0.7s\">
                            <div class=\"text-center rounded py-5 px-4\" style=\"box-shadow: 0 0 45px rgba(0,0,0,.08);\">
                                <div class=\"btn-square bg-light rounded-circle mx-auto mb-4\" style=\"width: 90px; height: 90px;\">
                                    <i class=\"fa fa-tools fa-3x text-primary\"></i>
                                </div>
                                <h4 class=\"mb-0\">Modern Equipment</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Service Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"max-width: 500px;\">
                <p class=\"fs-5 fw-bold text-primary\">Our Services</p>
                <h1 class=\"display-5 mb-5\">Services That We Offer For You</h1>
            </div>
            <div class=\"row g-4\">
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"service-item rounded d-flex h-100\">
                        <div class=\"service-img rounded\">
                            <img class=\"img-fluid\" src=\"{{asset('Front/img/service-1.jpg')}}\" alt=\"\">
                        </div>
                        <div class=\"service-text rounded p-5\">
                            <div class=\"btn-square rounded-circle mx-auto mb-3\">
                                <img class=\"img-fluid\" src=\"{{asset('Front/img/icon/icon-3.png')}}\" alt=\"Icon\">
                            </div>
                            <h4 class=\"mb-3\">Landscaping</h4>
                            <p class=\"mb-4\">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            <a class=\"btn btn-sm\" href=\"\"><i class=\"fa fa-plus text-primary me-2\"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"service-item rounded d-flex h-100\">
                        <div class=\"service-img rounded\">
                            <img class=\"img-fluid\" src=\"{{asset('Front/img/service-2.jpg')}}\" alt=\"\">
                        </div>
                        <div class=\"service-text rounded p-5\">
                            <div class=\"btn-square rounded-circle mx-auto mb-3\">
                                <img class=\"img-fluid\" src=\"{{asset('Front/img/icon/icon-6.png')}}\" alt=\"Icon\">
                            </div>
                            <h4 class=\"mb-3\">Pruning plants</h4>
                            <p class=\"mb-4\">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            <a class=\"btn btn-sm\" href=\"\"><i class=\"fa fa-plus text-primary me-2\"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"service-item rounded d-flex h-100\">
                        <div class=\"service-img rounded\">
                            <img class=\"img-fluid\" src=\"{{asset('Front/img/service-3.jpg')}}\" alt=\"\">
                        </div>
                        <div class=\"service-text rounded p-5\">
                            <div class=\"btn-square rounded-circle mx-auto mb-3\">
                                <img class=\"img-fluid\" src=\"{{asset('Front/img/icon/icon-5.png')}}\" alt=\"Icon\">
                            </div>
                            <h4 class=\"mb-3\">Irrigation & Drainage</h4>
                            <p class=\"mb-4\">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            <a class=\"btn btn-sm\" href=\"\"><i class=\"fa fa-plus text-primary me-2\"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"service-item rounded d-flex h-100\">
                        <div class=\"service-img rounded\">
                            <img class=\"img-fluid\" src=\"{{asset('Front/img/service-4.jpg')}}\" alt=\"\">
                        </div>
                        <div class=\"service-text rounded p-5\">
                            <div class=\"btn-square rounded-circle mx-auto mb-3\">
                                <img class=\"img-fluid\" src=\"{{asset('Front/img/icon/icon-4.png')}}\" alt=\"Icon\">
                            </div>
                            <h4 class=\"mb-3\">Garden Maintenance </h4>
                            <p class=\"mb-4\">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            <a class=\"btn btn-sm\" href=\"\"><i class=\"fa fa-plus text-primary me-2\"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"service-item rounded d-flex h-100\">
                        <div class=\"service-img rounded\">
                            <img class=\"img-fluid\" src=\"{{asset('Front/img/service-5.jpg')}}\" alt=\"\">
                        </div>
                        <div class=\"service-text rounded p-5\">
                            <div class=\"btn-square rounded-circle mx-auto mb-3\">
                                <img class=\"img-fluid\" src=\"{{asset('Front/img/icon/icon-8.png')}}\" alt=\"Icon\">
                            </div>
                            <h4 class=\"mb-3\">Green Technology</h4>
                            <p class=\"mb-4\">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            <a class=\"btn btn-sm\" href=\"\"><i class=\"fa fa-plus text-primary me-2\"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"service-item rounded d-flex h-100\">
                        <div class=\"service-img rounded\">
                            <img class=\"img-fluid\" src=\"{{asset('Front/img/service-6.jpg')}}\" alt=\"\">
                        </div>
                        <div class=\"service-text rounded p-5\">
                            <div class=\"btn-square rounded-circle mx-auto mb-3\">
                                <img class=\"img-fluid\" src=\"{{asset('Front/img/icon/icon-2.png')}}\" alt=\"Icon\">
                            </div>
                            <h4 class=\"mb-3\">Urban Gardening</h4>
                            <p class=\"mb-4\">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            <a class=\"btn btn-sm\" href=\"\"><i class=\"fa fa-plus text-primary me-2\"></i>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Quote Start -->
    <div class=\"container-fluid quote my-5 py-5\" data-parallax=\"scroll\" data-image-src=\"{{asset('Front/img/carousel-2.jpg')}}\">
        <div class=\"container py-5\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-7\">
                    <div class=\"bg-white rounded p-4 p-sm-5 wow fadeIn\" data-wow-delay=\"0.5s\">
                        <h1 class=\"display-5 text-center mb-5\">Get A Free Quote</h1>
                        <div class=\"row g-3\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-floating\">
                                    <input type=\"text\" class=\"form-control bg-light border-0\" id=\"gname\" placeholder=\"Gurdian Name\">
                                    <label for=\"gname\">Your Name</label>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-floating\">
                                    <input type=\"email\" class=\"form-control bg-light border-0\" id=\"gmail\" placeholder=\"Gurdian Email\">
                                    <label for=\"gmail\">Your Email</label>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-floating\">
                                    <input type=\"text\" class=\"form-control bg-light border-0\" id=\"cname\" placeholder=\"Child Name\">
                                    <label for=\"cname\">Your Mobile</label>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-floating\">
                                    <input type=\"text\" class=\"form-control bg-light border-0\" id=\"cage\" placeholder=\"Child Age\">
                                    <label for=\"cage\">Service Type</label>
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <div class=\"form-floating\">
                                    <textarea class=\"form-control bg-light border-0\" placeholder=\"Leave a message here\" id=\"message\" style=\"height: 100px\"></textarea>
                                    <label for=\"message\">Message</label>
                                </div>
                            </div>
                            <div class=\"col-12 text-center\">
                                <button class=\"btn btn-primary py-3 px-4\" type=\"submit\">Submit Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


    <!-- Projects Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"max-width: 500px;\">
                <p class=\"fs-5 fw-bold text-primary\">Our Projects</p>
                <h1 class=\"display-5 mb-5\">Some Of Our Wonderful Projects</h1>
            </div>
            <div class=\"row wow fadeInUp\" data-wow-delay=\"0.3s\">
                <div class=\"col-12 text-center\">
                    <ul class=\"list-inline rounded mb-5\" id=\"portfolio-flters\">
                        <li class=\"mx-2 active\" data-filter=\"*\">All</li>
                        <li class=\"mx-2\" data-filter=\".first\">Complete Projects</li>
                        <li class=\"mx-2\" data-filter=\".second\">Ongoing Projects</li>
                    </ul>
                </div>
            </div>
            <div class=\"row g-4 portfolio-container\">
                <div class=\"col-lg-4 col-md-6 portfolio-item first wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"portfolio-inner rounded\">
                        <img class=\"img-fluid\" src=\"{{asset('Front/img/service-1.jpg')}}\" alt=\"\">
                        <div class=\"portfolio-text\">
                            <h4 class=\"text-white mb-4\">Landscaping</h4>
                            <div class=\"d-flex\">
                                <a class=\"btn btn-lg-square rounded-circle mx-2\" href=\"{{asset('Front/img/service-1.jpg')}}\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                                <a class=\"btn btn-lg-square rounded-circle mx-2\" href=\"\"><i class=\"fa fa-link\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 portfolio-item second wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"portfolio-inner rounded\">
                        <img class=\"img-fluid\" src=\"{{asset('Front/img/service-2.jpg')}}\" alt=\"\">
                        <div class=\"portfolio-text\">
                            <h4 class=\"text-white mb-4\">Pruning plants</h4>
                            <div class=\"d-flex\">
                                <a class=\"btn btn-lg-square rounded-circle mx-2\" href=\"{{asset('Front/img/service-2.jpg')}}\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                                <a class=\"btn btn-lg-square rounded-circle mx-2\" href=\"\"><i class=\"fa fa-link\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 portfolio-item first wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"portfolio-inner rounded\">
                        <img class=\"img-fluid\" src=\"{{asset('Front/img/service-3.jpg')}}\" alt=\"\">
                        <div class=\"portfolio-text\">
                            <h4 class=\"text-white mb-4\">Irrigation & Drainage</h4>
                            <div class=\"d-flex\">
                                <a class=\"btn btn-lg-square rounded-circle mx-2\" href=\"{{asset('Front/img/service-3.jpg')}}\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                                <a class=\"btn btn-lg-square rounded-circle mx-2\" href=\"\"><i class=\"fa fa-link\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 portfolio-item second wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"portfolio-inner rounded\">
                        <img class=\"img-fluid\" src=\"{{asset('Front/img/service-4.jpg')}}\" alt=\"\">
                        <div class=\"portfolio-text\">
                            <h4 class=\"text-white mb-4\">Garden Maintenance</h4>
                            <div class=\"d-flex\">
                                <a class=\"btn btn-lg-square rounded-circle mx-2\" href=\"{{asset('Front/img/service-4.jpg')}}\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                                <a class=\"btn btn-lg-square rounded-circle mx-2\" href=\"\"><i class=\"fa fa-link\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 portfolio-item first wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"portfolio-inner rounded\">
                        <img class=\"img-fluid\" src=\"{{asset('Front/img/service-5.jpg')}}\" alt=\"\">
                        <div class=\"portfolio-text\">
                            <h4 class=\"text-white mb-4\">Green Technology</h4>
                            <div class=\"d-flex\">
                                <a class=\"btn btn-lg-square rounded-circle mx-2\" href=\"{{asset('Front/img/service-5.jpg')}}\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                                <a class=\"btn btn-lg-square rounded-circle mx-2\" href=\"\"><i class=\"fa fa-link\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 portfolio-item second wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"portfolio-inner rounded\">
                        <img class=\"img-fluid\" src=\"{{asset('Front/img/service-6.jpg')}}\" alt=\"\">
                        <div class=\"portfolio-text\">
                            <h4 class=\"text-white mb-4\">Urban Gardening</h4>
                            <div class=\"d-flex\">
                                <a class=\"btn btn-lg-square rounded-circle mx-2\" href=\"{{asset('Front/img/service-6.jpg')}}\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                                <a class=\"btn btn-lg-square rounded-circle mx-2\" href=\"\"><i class=\"fa fa-link\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->


    <!-- Team Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"max-width: 500px;\">
                <p class=\"fs-5 fw-bold text-primary\">Our Team</p>
                <h1 class=\"display-5 mb-5\">Dedicated & Experienced Team Members</h1>
            </div>
            <div class=\"row g-4\">
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"team-item rounded\">
                        <img class=\"img-fluid\" src=\"{{asset('Front/img/team-1.jpg')}}\" alt=\"\">
                        <div class=\"team-text\">
                            <h4 class=\"mb-0\">Doris Jordan</h4>
                            <p class=\"text-primary\">Landscape Designer</p>
                            <div class=\"team-social d-flex\">
                                <a class=\"btn btn-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"team-item rounded\">
                        <img class=\"img-fluid\" src=\"{{asset('Front/img/team-2.jpg')}}\" alt=\"\">
                        <div class=\"team-text\">
                            <h4 class=\"mb-0\">Johnny Ramirez</h4>
                            <p class=\"text-primary\">Garden Designer</p>
                            <div class=\"team-social d-flex\">
                                <a class=\"btn btn-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"team-item rounded\">
                        <img class=\"img-fluid\" src=\"{{asset('Front/img/team-3.jpg')}}\" alt=\"\">
                        <div class=\"team-text\">
                            <h4 class=\"mb-0\">Diana Wagner</h4>
                            <p class=\"text-primary\">Senior Gardener</p>
                            <div class=\"team-social d-flex\">
                                <a class=\"btn btn-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-5\">
                <div class=\"col-lg-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <p class=\"fs-5 fw-bold text-primary\">Testimonial</p>
                    <h1 class=\"display-5 mb-5\">What Our Clients Say About Us!</h1>
                    <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.</p>
                    <a class=\"btn btn-primary py-3 px-4\" href=\"\">See More</a>
                </div>
                <div class=\"col-lg-7 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"owl-carousel testimonial-carousel\">
                        <div class=\"testimonial-item\">
                            <img class=\"img-fluid rounded mb-3\" src=\"{{asset('Front/img/testimonial-1.jpg')}}\" alt=\"\">
                            <p class=\"fs-5\">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <h4>Client Name</h4>
                            <span>Profession</span>
                        </div>
                        <div class=\"testimonial-item\">
                            <img class=\"img-fluid rounded mb-3\" src=\"{{asset('Front/img/testimonial-2.jpg')}}\" alt=\"\">
                            <p class=\"fs-5\">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <h4>Client Name</h4>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-white mb-4\">Our Office</h4>
                    <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York, USA</p>
                    <p class=\"mb-2\"><i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890</p>
                    <p class=\"mb-2\"><i class=\"fa fa-envelope me-3\"></i>info@example.com</p>
                    <div class=\"d-flex pt-2\">
                        <a class=\"btn btn-square btn-outline-light rounded-circle me-2\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-square btn-outline-light rounded-circle me-2\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-square btn-outline-light rounded-circle me-2\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                        <a class=\"btn btn-square btn-outline-light rounded-circle me-2\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-white mb-4\">Services</h4>
                    <a class=\"btn btn-link\" href=\"\">Landscaping</a>
                    <a class=\"btn btn-link\" href=\"\">Pruning plants</a>
                    <a class=\"btn btn-link\" href=\"\">Urban Gardening</a>
                    <a class=\"btn btn-link\" href=\"\">Garden Maintenance</a>
                    <a class=\"btn btn-link\" href=\"\">Green Technology</a>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-white mb-4\">Quick Links</h4>
                    <a class=\"btn btn-link\" href=\"\">About Us</a>
                    <a class=\"btn btn-link\" href=\"\">Contact Us</a>
                    <a class=\"btn btn-link\" href=\"\">Our Services</a>
                    <a class=\"btn btn-link\" href=\"\">Terms & Condition</a>
                    <a class=\"btn btn-link\" href=\"\">Support</a>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-white mb-4\">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class=\"position-relative w-100\">
                        <input class=\"form-control bg-light border-light w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Your email\">
                        <button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class=\"container-fluid copyright py-4\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                    &copy; <a class=\"border-bottom\" href=\"#\">Your Site Name</a>, All Right Reserved.
                </div>
                <div class=\"col-md-6 text-center text-md-end\">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                    Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a> Distributed By <a href=\"https://themewagon.com\">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>

{% block javascripts %}
    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"{{asset('Front/lib/wow/wow.min.js')}}\"></script>
    <script src=\"{{asset('Front/lib/easing/easing.min.js')}}\"></script>
    <script src=\"{{asset('Front/lib/waypoints/waypoints.min.js')}}\"></script>
    <script src=\"{{asset('Front/lib/owlcarousel/owl.carousel.min.js')}}\"></script>
    <script src=\"{{asset('Front/lib/counterup/counterup.min.js')}}\"></script>
    <script src=\"{{asset('Front/lib/parallax/parallax.min.js')}}\"></script>
    <script src=\"{{asset('Front/lib/isotope/isotope.pkgd.min.js')}}\"></script>
    <script src=\"{{asset('Front/lib/lightbox/js/lightbox.min.js')}}\"></script>

    <!-- Template Javascript -->
    <script src=\"{{asset('Front/js/main.js')}}\"></script>
    {% endblock %}
</body>

</html>", "baseFront.html.twig", "C:\\Users\\mabro\\WasteWise\\templates\\baseFront.html.twig");
    }
}
