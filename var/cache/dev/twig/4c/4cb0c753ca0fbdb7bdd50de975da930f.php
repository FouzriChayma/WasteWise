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

/* baseBack.html.twig */
class __TwigTemplate_950af63a615092bfed7acbcf77d51e12 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\"> 
<head>
    <title> ";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
    
    <!-- Meta -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    
    <meta name=\"description\" content=\"Portal - Bootstrap 5 Admin Dashboard Template For Developers\">
    <meta name=\"author\" content=\"Xiaoying Riley at 3rd Wave Media\">    
    <link rel=\"shortcut icon\" href=\"favicon.ico\"> 
    
    <!-- FontAwesome JS-->
    <script defer src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/plugins/fontawesome/js/all.min.js"), "html", null, true);
        echo "\"></script>    
    <!-- App CSS -->  ";
        // line 17
        $this->displayBlock('css', $context, $blocks);
        // line 20
        echo "</head> 

<body class=\"app\">";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "</svg>
\t\t\t\t\t            <span class=\"icon-badge\">3</span>
\t\t\t\t\t        </a><!--//dropdown-toggle-->
\t\t\t\t\t        
\t\t\t\t\t        <div class=\"dropdown-menu p-0\" aria-labelledby=\"notifications-dropdown-toggle\">
\t\t\t\t\t            <div class=\"dropdown-menu-header p-3\">
\t\t\t\t\t\t            <h5 class=\"dropdown-menu-title mb-0\">Notifications</h5>
\t\t\t\t\t\t        </div><!--//dropdown-menu-title-->
\t\t\t\t\t\t        <div class=\"dropdown-menu-content\">
\t\t\t\t\t\t\t       <div class=\"item p-3\">
\t\t\t\t\t\t\t\t        <div class=\"row gx-2 justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t       <img class=\"profile-image\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/images/profiles/profile-1.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t\t\t\t        <div class=\"col\">
\t\t\t\t\t\t\t\t\t\t        <div class=\"info\"> 
\t\t\t\t\t\t\t\t\t\t\t        <div class=\"desc\">Amy shared a file with you. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
\t\t\t\t\t\t\t\t\t\t\t        <div class=\"meta\"> 2 hrs ago</div>
\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t        </div><!--//col--> 
\t\t\t\t\t\t\t\t        </div><!--//row-->
\t\t\t\t\t\t\t\t        <a class=\"link-mask\" href=\"notifications.html\"></a>
\t\t\t\t\t\t\t       </div><!--//item-->
\t\t\t\t\t\t\t       <div class=\"item p-3\">
\t\t\t\t\t\t\t\t        <div class=\"row gx-2 justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t        <div class=\"app-icon-holder\">
\t\t\t\t\t\t\t\t\t\t\t        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-receipt\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t  <path fill-rule=\"evenodd\" d=\"M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z\"/>
\t  <path fill-rule=\"evenodd\" d=\"M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z\"/>
\t</svg>
\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t\t\t\t        <div class=\"col\">
\t\t\t\t\t\t\t\t\t\t        <div class=\"info\"> 
\t\t\t\t\t\t\t\t\t\t\t        <div class=\"desc\">You have a new invoice. Proin venenatis interdum est.</div>
\t\t\t\t\t\t\t\t\t\t\t        <div class=\"meta\"> 1 day ago</div>
\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t\t\t        </div><!--//row-->
\t\t\t\t\t\t\t\t        <a class=\"link-mask\" href=\"notifications.html\"></a>
\t\t\t\t\t\t\t       </div><!--//item-->
\t\t\t\t\t\t\t       <div class=\"item p-3\">
\t\t\t\t\t\t\t\t        <div class=\"row gx-2 justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t        <div class=\"app-icon-holder icon-holder-mono\">
\t\t\t\t\t\t\t\t\t\t\t        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-bar-chart-line\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path fill-rule=\"evenodd\" d=\"M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z\"/>
</svg>
\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t\t\t\t        <div class=\"col\">
\t\t\t\t\t\t\t\t\t\t        <div class=\"info\"> 
\t\t\t\t\t\t\t\t\t\t\t        <div class=\"desc\">Your report is ready. Proin venenatis interdum est.</div>
\t\t\t\t\t\t\t\t\t\t\t        <div class=\"meta\"> 3 days ago</div>
\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t\t\t        </div><!--//row-->
\t\t\t\t\t\t\t\t        <a class=\"link-mask\" href=\"notifications.html\"></a>
\t\t\t\t\t\t\t       </div><!--//item-->
\t\t\t\t\t\t\t       <div class=\"item p-3\">
\t\t\t\t\t\t\t\t        <div class=\"row gx-2 justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t       <img class=\"profile-image\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/images/profiles/profile-2.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t\t\t\t        <div class=\"col\">
\t\t\t\t\t\t\t\t\t\t        <div class=\"info\"> 
\t\t\t\t\t\t\t\t\t\t\t        <div class=\"desc\">James sent you a new message.</div>
\t\t\t\t\t\t\t\t\t\t\t        <div class=\"meta\"> 7 days ago</div>
\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t        </div><!--//col--> 
\t\t\t\t\t\t\t\t        </div><!--//row-->
\t\t\t\t\t\t\t\t        <a class=\"link-mask\" href=\"notifications.html\"></a>
\t\t\t\t\t\t\t       </div><!--//item-->
\t\t\t\t\t\t        </div><!--//dropdown-menu-content-->
\t\t\t\t\t\t        
\t\t\t\t\t\t        <div class=\"dropdown-menu-footer p-2 text-center\">
\t\t\t\t\t\t\t        <a href=\"notifications.html\">View all</a>
\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div><!--//dropdown-menu-->\t\t\t\t\t        
\t\t\t\t        </div><!--//app-utility-item-->
\t\t\t            <div class=\"app-utility-item\">
\t\t\t\t            <a href=\"settings.html\" title=\"Settings\">
\t\t\t\t\t            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t            <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-gear icon\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path fill-rule=\"evenodd\" d=\"M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z\"/>
  <path fill-rule=\"evenodd\" d=\"M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z\"/>
</svg>
\t\t\t\t\t        </a>
\t\t\t\t\t    </div><!--//app-utility-item-->
\t\t\t            
\t\t\t            <div class=\"app-utility-item app-user-dropdown dropdown\">
\t\t\t\t            <a class=\"dropdown-toggle\" id=\"user-dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\"><img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/images/user.png"), "html", null, true);
        echo "\" alt=\"user profile\"></a>
\t\t\t\t            <ul class=\"dropdown-menu\" aria-labelledby=\"user-dropdown-toggle\">
\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"account.html\">Account</a></li>
\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"settings.html\">Settings</a></li>
\t\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"login.html\">Log Out</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t            </div><!--//app-user-dropdown--> 
\t\t            </div><!--//app-utilities-->
\t\t        </div><!--//row-->
\t            </div><!--//app-header-content-->
\t        </div><!--//container-fluid-->
        </div><!--//app-header-inner-->
        <div id=\"app-sidepanel\" class=\"app-sidepanel\"> 
\t        <div id=\"sidepanel-drop\" class=\"sidepanel-drop\"></div>
\t        <div class=\"sidepanel-inner d-flex flex-column\">
\t\t        <a href=\"#\" id=\"sidepanel-close\" class=\"sidepanel-close d-xl-none\">&times;</a>
\t\t        <div class=\"app-branding\">
\t\t            <a class=\"app-logo\" href=\"index.html\"><img class=\"logo-icon me-2\" src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/images/logoW.png"), "html", null, true);
        echo "\" alt=\"logo\"><span class=\"logo-text\" style=\"color:#563d2d\" >WasteWise</span></a>
\t
\t\t        </div><!--//app-branding-->  
\t\t        
\t\t\t    <nav id=\"app-nav-main\" class=\"app-nav app-nav-main flex-grow-1\">
\t\t\t\t    <ul class=\"app-menu list-unstyled accordion\" id=\"menu-accordion\">
\t\t\t\t\t    <li class=\"nav-item\">
\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t        <a class=\"nav-link active\" href=\"index.html\">
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-house-door\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t  <path fill-rule=\"evenodd\" d=\"M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z\"/>
\t\t  <path fill-rule=\"evenodd\" d=\"M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z\"/>
\t\t</svg>
\t\t\t\t\t\t         </span>
\t\t                         <span class=\"nav-link-text\">Overview</span>
\t\t\t\t\t\t\t
\t\t\t\t\t        </a><!--//nav-link-->

\t\t\t\t\t    </li><!--//nav-item-->
<li class=\"nav-item has-submenu\">
\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t        <a class=\"nav-link submenu-toggle\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#submenu-1\" aria-expanded=\"false\" aria-controls=\"submenu-1\">
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t\t        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-people\" viewBox=\"0 0 16 16\">
  <path d=\"M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4\"/>
</svg>
\t\t\t\t\t\t         </span>
\t\t                         <span class=\"nav-link-text\">Users</span>
\t\t                         <span class=\"submenu-arrow\">
\t\t                             <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-chevron-down\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t  <path fill-rule=\"evenodd\" d=\"M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z\"/>
\t</svg>
\t                             </span><!--//submenu-arrow-->
\t\t\t\t\t        </a><!--//nav-link-->
\t\t\t\t\t        <div id=\"submenu-1\" class=\"collapse submenu submenu-1\" data-bs-parent=\"#menu-accordion\">
\t\t\t\t\t\t        <ul class=\"submenu-list list-unstyled\">
\t\t\t\t\t\t\t\t\t<li class=\"submenu-item\"><a class=\"submenu-link\" href=\"notifications.html\">Admin</a></li>
\t\t\t\t\t\t\t        <li class=\"submenu-item\"><a class=\"submenu-link\" href=\"notifications.html\">Suppliers</a></li>
\t\t\t\t\t\t\t        <li class=\"submenu-item\"><a class=\"submenu-link\" href=\"account.html\">Drivers</a></li>
\t\t\t\t\t\t\t        <li class=\"submenu-item\"><a class=\"submenu-link\" href=\"settings.html\">Clients</a></li>

\t\t\t\t\t\t        </ul>
\t\t\t\t\t        </div>
\t\t\t\t\t    </li><!--//nav-item-->

<li class=\"nav-item\">
\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t        <a class=\"nav-link\" href=\"docs.html\">
\t\t\t\t\t\t        
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->

\t\t\t\t\t\t        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-check2-square\" viewBox=\"0 0 16 16\">
  <path d=\"M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5z\"/>
  <path d=\"m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0\"/>
</svg>
\t\t\t\t\t\t         </span>


</span>
\t\t                         <span class=\"nav-link-text\">Mission</span>
\t\t\t\t\t        </a><!--//nav-link-->
\t\t\t\t\t    </li><!--//nav-item-->

<li class=\"nav-item\">
\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t        <a class=\"nav-link\" href=\"docs.html\">
\t\t\t\t\t\t        
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->

\t\t\t\t\t\t        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-calendar-event\" viewBox=\"0 0 16 16\">
  <path d=\"M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z\"/>
  <path d=\"M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z\"/>
</svg>
\t\t\t\t\t\t         </span>


</span>
\t\t                         <span class=\"nav-link-text\">Planning</span>
\t\t\t\t\t        </a><!--//nav-link-->
\t\t\t\t\t    </li><!--//nav-item-->

<li class=\"nav-item\">
\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t        <a class=\"nav-link\" href=\"docs.html\">
\t\t\t\t\t\t        
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->

\t\t\t\t\t\t        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-truck\" viewBox=\"0 0 16 16\">
  <path d=\"M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2\"/>
</svg>
\t\t\t\t\t\t         </span>


</span>
\t\t                         <span class=\"nav-link-text\">Truck</span>
\t\t\t\t\t        </a><!--//nav-link-->
\t\t\t\t\t    </li><!--//nav-item-->

<li class=\"nav-item has-submenu\">
\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t        <a class=\"nav-link submenu-toggle\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#submenu-1\" aria-expanded=\"false\" aria-controls=\"submenu-1\">
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->

\t\t\t\t\t\t        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\">
  <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z\"/>
  <path d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z\"/>
</svg>
\t\t\t\t\t\t         </span>


</span>

\t\t                         <span class=\"nav-link-text\">Waste</span>
\t\t\t\t\t        </a><!--//nav-link-->
\t\t\t\t\t    </li><!--//nav-item-->

<li class=\"nav-item\">
\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t        <a class=\"nav-link\" href=\"docs.html\">
\t\t\t\t\t\t        
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->

\t\t\t\t\t\t        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-box\" viewBox=\"0 0 16 16\">
  <path d=\"M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z\"/>
</svg>
\t\t\t\t\t\t         </span>


</span>
\t\t                         <span class=\"nav-link-text\">Stock</span>
\t\t\t\t\t        </a><!--//nav-link-->
\t\t\t\t\t    </li><!--//nav-item-->

<li class=\"nav-item\">
\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t        <a class=\"nav-link\" href=\"docs.html\">
\t\t\t\t\t\t        
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->

\t\t\t\t\t\t        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-house-door\" viewBox=\"0 0 16 16\">
  <path d=\"M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z\"/>
</svg>
\t\t\t\t\t\t         </span>


</span>
\t\t                         <span class=\"nav-link-text\">storehouse</span>
\t\t\t\t\t        </a><!--//nav-link-->
\t\t\t\t\t    </li><!--//nav-item-->
\t\t\t\t\t    <li class=\"nav-item\">
\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t        <a class=\"nav-link\" href=\"docs.html\">
\t\t\t\t\t\t        
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->

\t\t\t\t\t\t        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-house-heart\" viewBox=\"0 0 16 16\">
  <path d=\"M8 6.982C9.664 5.309 13.825 8.236 8 12 2.175 8.236 6.336 5.309 8 6.982\"/>
  <path d=\"M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.707L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.646a.5.5 0 0 0 .708-.707L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z\"/>
</svg>
\t\t\t\t\t\t         </span>


</span>
\t\t                         <span class=\"nav-link-text\">Association</span>
\t\t\t\t\t        </a><!--//nav-link-->
\t\t\t\t\t    </li><!--//nav-item-->
\t\t\t\t\t    <li class=\"nav-item has-submenu\">
\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t        <a class=\"nav-link submenu-toggle\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#submenu-1\" aria-expanded=\"false\" aria-controls=\"submenu-1\">
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->

\t\t\t\t\t\t        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-box2-heart\" viewBox=\"0 0 16 16\">
  <path d=\"M8 7.982C9.664 6.309 13.825 9.236 8 13 2.175 9.236 6.336 6.31 8 7.982\"/>
  <path d=\"M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4zm0 1H7.5v3h-6zM8.5 4V1h3.75l2.25 3zM15 5v10H1V5z\"/>
</svg>
\t\t\t\t\t\t         </span>


</span>

\t\t                         <span class=\"nav-link-text\">Donation</span>
\t\t\t\t\t        </a><!--//nav-link-->
\t\t\t\t\t    </li><!--//nav-item-->

<li class=\"nav-item has-submenu\">
\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t        <a class=\"nav-link submenu-toggle\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#submenu-1\" aria-expanded=\"false\" aria-controls=\"submenu-1\">
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-emoji-smile-upside-down\" viewBox=\"0 0 16 16\">
  <path d=\"M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1m0-1a8 8 0 1 1 0 16A8 8 0 0 1 8 0\"/>
  <path d=\"M4.285 6.433a.5.5 0 0 0 .683-.183A3.5 3.5 0 0 1 8 4.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.5 4.5 0 0 0 8 3.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683M7 9.5C7 8.672 6.552 8 6 8s-1 .672-1 1.5.448 1.5 1 1.5 1-.672 1-1.5m4 0c0-.828-.448-1.5-1-1.5s-1 .672-1 1.5.448 1.5 1 1.5 1-.672 1-1.5\"/>
</svg>
\t\t\t\t\t\t        
\t\t\t\t\t\t         </span>


</span>

\t\t                         <span class=\"nav-link-text\">Feedback</span>
\t\t\t\t\t        </a><!--//nav-link-->
\t\t\t\t\t    </li><!--//nav-item-->

<li class=\"nav-item has-submenu\">
\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t        <a class=\"nav-link submenu-toggle\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#submenu-1\" aria-expanded=\"false\" aria-controls=\"submenu-1\">
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->

\t\t\t\t\t\t        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-chat-square-heart\" viewBox=\"0 0 16 16\">
  <path d=\"M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z\"/>
  <path d=\"M8 3.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132\"/>
</svg>
\t\t\t\t\t\t         </span>


</span>

\t\t                         <span class=\"nav-link-text\">reclamation</span>
\t\t\t\t\t        </a><!--//nav-link-->
\t\t\t\t\t    </li><!--//nav-item-->


\t\t\t\t\t    </ul><!--//footer-menu-->
\t\t\t\t    </nav>
\t\t\t    </div><!--//app-sidepanel-footer-->
\t\t       
\t        </div><!--//sidepanel-inner-->
\t    </div><!--//app-sidepanel-->
    </header><!--//app-header-->
    
    <div class=\"app-wrapper\">
\t    
\t    <div class=\"app-content pt-3 p-md-3 p-lg-4\">
\t\t    <div class=\"container-xl\">
\t\t\t    
\t\t\t    <h1 class=\"app-page-title\">Overview</h1>
\t\t\t    
\t\t\t    <div class=\"app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration\" role=\"alert\">
\t\t\t\t    <div class=\"inner\">
\t\t\t\t\t    <div class=\"app-card-body p-3 p-lg-4\">
\t\t\t\t\t\t    <h3 class=\"mb-3\">Welcome, developer!</h3>
\t\t\t\t\t\t    <div class=\"row gx-5 gy-3\">
\t\t\t\t\t\t        <div class=\"col-12 col-lg-9\">
\t\t\t\t\t\t\t        
\t\t\t\t\t\t\t        <div>Portal is a free Bootstrap 5 admin dashboard template. The design is simple, clean and modular so it's a great base for building any modern web app.</div>
\t\t\t\t\t\t\t    </div><!--//col-->
\t\t\t\t\t\t\t    <div class=\"col-12 col-lg-3\">
\t\t\t\t\t\t\t\t    <a class=\"btn app-btn-primary\" href=\"https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/\"><svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-file-earmark-arrow-down me-2\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path d=\"M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z\"/>
  <path d=\"M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z\"/>
  <path fill-rule=\"evenodd\" d=\"M8 6a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 10.293V6.5A.5.5 0 0 1 8 6z\"/>
</svg>Free Download</a>
\t\t\t\t\t\t\t    </div><!--//col-->
\t\t\t\t\t\t    </div><!--//row-->
\t\t\t\t\t\t    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t\t\t\t    </div><!--//app-card-body-->
\t\t\t\t\t    
\t\t\t\t    </div><!--//inner-->
\t\t\t    </div><!--//app-card-->
\t\t\t\t    
\t\t\t    <div class=\"row g-4 mb-4\">
\t\t\t\t    <div class=\"col-6 col-lg-3\">
\t\t\t\t\t    <div class=\"app-card app-card-stat shadow-sm h-100\">
\t\t\t\t\t\t    <div class=\"app-card-body p-3 p-lg-4\">
\t\t\t\t\t\t\t    <h4 class=\"stats-type mb-1\">Total Sales</h4>
\t\t\t\t\t\t\t    <div class=\"stats-figure\">\$12,628</div>
\t\t\t\t\t\t\t    <div class=\"stats-meta text-success\">
\t\t\t\t\t\t\t\t    <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-arrow-up\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path fill-rule=\"evenodd\" d=\"M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z\"/>
</svg> 20%</div>
\t\t\t\t\t\t    </div><!--//app-card-body-->
\t\t\t\t\t\t    <a class=\"app-card-link-mask\" href=\"#\"></a>
\t\t\t\t\t    </div><!--//app-card-->
\t\t\t\t    </div><!--//col-->
\t\t\t\t    
\t\t\t\t    <div class=\"col-6 col-lg-3\">
\t\t\t\t\t    <div class=\"app-card app-card-stat shadow-sm h-100\">
\t\t\t\t\t\t    <div class=\"app-card-body p-3 p-lg-4\">
\t\t\t\t\t\t\t    <h4 class=\"stats-type mb-1\">Expenses</h4>
\t\t\t\t\t\t\t    <div class=\"stats-figure\">\$2,250</div>
\t\t\t\t\t\t\t    <div class=\"stats-meta text-success\">
\t\t\t\t\t\t\t\t    <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-arrow-down\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path fill-rule=\"evenodd\" d=\"M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z\"/>
</svg> 5% </div>
\t\t\t\t\t\t    </div><!--//app-card-body-->
\t\t\t\t\t\t    <a class=\"app-card-link-mask\" href=\"#\"></a>
\t\t\t\t\t    </div><!--//app-card-->
\t\t\t\t    </div><!--//col-->
\t\t\t\t    <div class=\"col-6 col-lg-3\">
\t\t\t\t\t    <div class=\"app-card app-card-stat shadow-sm h-100\">
\t\t\t\t\t\t    <div class=\"app-card-body p-3 p-lg-4\">
\t\t\t\t\t\t\t    <h4 class=\"stats-type mb-1\">Projects</h4>
\t\t\t\t\t\t\t    <div class=\"stats-figure\">23</div>
\t\t\t\t\t\t\t    <div class=\"stats-meta\">
\t\t\t\t\t\t\t\t    Open</div>
\t\t\t\t\t\t    </div><!--//app-card-body-->
\t\t\t\t\t\t    <a class=\"app-card-link-mask\" href=\"#\"></a>
\t\t\t\t\t    </div><!--//app-card-->
\t\t\t\t    </div><!--//col-->
\t\t\t\t    <div class=\"col-6 col-lg-3\">
\t\t\t\t\t    <div class=\"app-card app-card-stat shadow-sm h-100\">
\t\t\t\t\t\t    <div class=\"app-card-body p-3 p-lg-4\">
\t\t\t\t\t\t\t    <h4 class=\"stats-type mb-1\">Invoices</h4>
\t\t\t\t\t\t\t    <div class=\"stats-figure\">6</div>
\t\t\t\t\t\t\t    <div class=\"stats-meta\">New</div>
\t\t\t\t\t\t    </div><!--//app-card-body-->
\t\t\t\t\t\t    <a class=\"app-card-link-mask\" href=\"#\"></a>
\t\t\t\t\t    </div><!--//app-card-->
\t\t\t\t    </div><!--//col-->
\t\t\t    </div><!--//row-->
\t\t\t    <div class=\"row g-4 mb-4\">
\t\t\t        <div class=\"col-12 col-lg-6\">
\t\t\t\t        <div class=\"app-card app-card-chart h-100 shadow-sm\">
\t\t\t\t\t        <div class=\"app-card-header p-3\">
\t\t\t\t\t\t        <div class=\"row justify-content-between align-items-center\">
\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t                <h4 class=\"app-card-title\">Line Chart Example</h4>
\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t\t\t        <div class=\"card-header-action\">
\t\t\t\t\t\t\t\t\t        <a href=\"charts.html\">More charts</a>
\t\t\t\t\t\t\t\t        </div><!--//card-header-actions-->
\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t        </div><!--//row-->
\t\t\t\t\t        </div><!--//app-card-header-->
\t\t\t\t\t        <div class=\"app-card-body p-3 p-lg-4\">
\t\t\t\t\t\t\t    <div class=\"mb-3 d-flex\">   
\t\t\t\t\t\t\t        <select class=\"form-select form-select-sm ms-auto d-inline-flex w-auto\">
\t\t\t\t\t\t\t\t\t    <option value=\"1\" selected>This week</option>
\t\t\t\t\t\t\t\t\t    <option value=\"2\">Today</option>
\t\t\t\t\t\t\t\t\t    <option value=\"3\">This Month</option>
\t\t\t\t\t\t\t\t\t    <option value=\"3\">This Year</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t        <div class=\"chart-container\">
\t\t\t\t                    <canvas id=\"canvas-linechart\" ></canvas>
\t\t\t\t\t\t        </div>
\t\t\t\t\t        </div><!--//app-card-body-->
\t\t\t\t        </div><!--//app-card-->
\t\t\t        </div><!--//col-->
\t\t\t        <div class=\"col-12 col-lg-6\">
\t\t\t\t        <div class=\"app-card app-card-chart h-100 shadow-sm\">
\t\t\t\t\t        <div class=\"app-card-header p-3\">
\t\t\t\t\t\t        <div class=\"row justify-content-between align-items-center\">
\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t                <h4 class=\"app-card-title\">Bar Chart Example</h4>
\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t\t\t        <div class=\"card-header-action\">
\t\t\t\t\t\t\t\t\t        <a href=\"charts.html\">More charts</a>
\t\t\t\t\t\t\t\t        </div><!--//card-header-actions-->
\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t        </div><!--//row-->
\t\t\t\t\t        </div><!--//app-card-header-->
\t\t\t\t\t        <div class=\"app-card-body p-3 p-lg-4\">
\t\t\t\t\t\t\t    <div class=\"mb-3 d-flex\">   
\t\t\t\t\t\t\t        <select class=\"form-select form-select-sm ms-auto d-inline-flex w-auto\">
\t\t\t\t\t\t\t\t\t    <option value=\"1\" selected>This week</option>
\t\t\t\t\t\t\t\t\t    <option value=\"2\">Today</option>
\t\t\t\t\t\t\t\t\t    <option value=\"3\">This Month</option>
\t\t\t\t\t\t\t\t\t    <option value=\"3\">This Year</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t        <div class=\"chart-container\">
\t\t\t\t                    <canvas id=\"canvas-barchart\" ></canvas>
\t\t\t\t\t\t        </div>
\t\t\t\t\t        </div><!--//app-card-body-->
\t\t\t\t        </div><!--//app-card-->
\t\t\t        </div><!--//col-->
\t\t\t        
\t\t\t    </div><!--//row-->
\t\t\t    <div class=\"row g-4 mb-4\">
\t\t\t\t    <div class=\"col-12 col-lg-6\">
\t\t\t\t        <div class=\"app-card app-card-progress-list h-100 shadow-sm\">
\t\t\t\t\t        <div class=\"app-card-header p-3\">
\t\t\t\t\t\t        <div class=\"row justify-content-between align-items-center\">
\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t                <h4 class=\"app-card-title\">Progress</h4>
\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t\t\t        <div class=\"card-header-action\">
\t\t\t\t\t\t\t\t\t        <a href=\"#\">All projects</a>
\t\t\t\t\t\t\t\t        </div><!--//card-header-actions-->
\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t        </div><!--//row-->
\t\t\t\t\t        </div><!--//app-card-header-->
\t\t\t\t\t        <div class=\"app-card-body\">
\t\t\t\t\t\t\t    <div class=\"item p-3\">
\t\t\t\t\t\t\t\t    <div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t    <div class=\"col\">
\t\t\t\t\t\t\t\t\t\t    <div class=\"title mb-1 \">Project lorem ipsum dolor sit amet</div>
\t\t\t\t\t\t\t\t\t\t    <div class=\"progress\">
  <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 25%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
</div>
\t\t\t\t\t\t\t\t\t    </div><!--//col-->
\t\t\t\t\t\t\t\t\t    <div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t    <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-chevron-right\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path fill-rule=\"evenodd\" d=\"M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z\"/>
</svg>
\t\t\t\t\t\t\t\t\t    </div><!--//col-->
\t\t\t\t\t\t\t\t    </div><!--//row-->
\t\t\t\t\t\t\t\t    <a class=\"item-link-mask\" href=\"#\"></a>
\t\t\t\t\t\t\t    </div><!--//item-->
\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t     <div class=\"item p-3\">
\t\t\t\t\t\t\t\t    <div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t    <div class=\"col\">
\t\t\t\t\t\t\t\t\t\t    <div class=\"title mb-1 \">Project duis aliquam et lacus quis ornare</div>
\t\t\t\t\t\t\t\t\t\t    <div class=\"progress\">
  <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 34%;\" aria-valuenow=\"34\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
</div>
\t\t\t\t\t\t\t\t\t    </div><!--//col-->
\t\t\t\t\t\t\t\t\t    <div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t    <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-chevron-right\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path fill-rule=\"evenodd\" d=\"M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z\"/>
</svg>
\t\t\t\t\t\t\t\t\t    </div><!--//col-->
\t\t\t\t\t\t\t\t    </div><!--//row-->
\t\t\t\t\t\t\t\t    <a class=\"item-link-mask\" href=\"#\"></a>
\t\t\t\t\t\t\t    </div><!--//item-->
\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t    <div class=\"item p-3\">
\t\t\t\t\t\t\t\t    <div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t    <div class=\"col\">
\t\t\t\t\t\t\t\t\t\t    <div class=\"title mb-1 \">Project sed tempus felis id lacus pulvinar</div>
\t\t\t\t\t\t\t\t\t\t    <div class=\"progress\">
  <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 68%;\" aria-valuenow=\"68\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
</div>
\t\t\t\t\t\t\t\t\t    </div><!--//col-->
\t\t\t\t\t\t\t\t\t    <div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t    <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-chevron-right\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path fill-rule=\"evenodd\" d=\"M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z\"/>
</svg>
\t\t\t\t\t\t\t\t\t    </div><!--//col-->
\t\t\t\t\t\t\t\t    </div><!--//row-->
\t\t\t\t\t\t\t\t    <a class=\"item-link-mask\" href=\"#\"></a>
\t\t\t\t\t\t\t    </div><!--//item-->
\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t    <div class=\"item p-3\">
\t\t\t\t\t\t\t\t    <div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t    <div class=\"col\">
\t\t\t\t\t\t\t\t\t\t    <div class=\"title mb-1 \">Project sed tempus felis id lacus pulvinar</div>
\t\t\t\t\t\t\t\t\t\t    <div class=\"progress\">
  <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 52%;\" aria-valuenow=\"52\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
</div>
\t\t\t\t\t\t\t\t\t    </div><!--//col-->
\t\t\t\t\t\t\t\t\t    <div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t    <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-chevron-right\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path fill-rule=\"evenodd\" d=\"M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z\"/>
</svg>
\t\t\t\t\t\t\t\t\t    </div><!--//col-->
\t\t\t\t\t\t\t\t    </div><!--//row-->
\t\t\t\t\t\t\t\t    <a class=\"item-link-mask\" href=\"#\"></a>
\t\t\t\t\t\t\t    </div><!--//item-->
\t\t
\t\t\t\t\t        </div><!--//app-card-body-->
\t\t\t\t        </div><!--//app-card-->
\t\t\t        </div><!--//col-->
\t\t\t        <div class=\"col-12 col-lg-6\">
\t\t\t\t        <div class=\"app-card app-card-stats-table h-100 shadow-sm\">
\t\t\t\t\t        <div class=\"app-card-header p-3\">
\t\t\t\t\t\t        <div class=\"row justify-content-between align-items-center\">
\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t                <h4 class=\"app-card-title\">Stats List</h4>
\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t\t\t        <div class=\"card-header-action\">
\t\t\t\t\t\t\t\t\t        <a href=\"#\">View report</a>
\t\t\t\t\t\t\t\t        </div><!--//card-header-actions-->
\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t        </div><!--//row-->
\t\t\t\t\t        </div><!--//app-card-header-->
\t\t\t\t\t        <div class=\"app-card-body p-3 p-lg-4\">
\t\t\t\t\t\t        <div class=\"table-responsive\">
\t\t\t\t\t\t\t        <table class=\"table table-borderless mb-0\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"meta\">Source</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"meta stat-cell\">Views</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"meta stat-cell\">Today</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td><a href=\"#\">google.com</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"stat-cell\">110</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"stat-cell\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-arrow-up text-success\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t  <path fill-rule=\"evenodd\" d=\"M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z\"/>
\t\t\t\t\t\t\t\t\t</svg> 
\t\t\t\t\t\t\t\t\t                30%
\t\t\t\t\t\t\t\t\t            </td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td><a href=\"#\">getbootstrap.com</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"stat-cell\">67</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"stat-cell\">23%</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td><a href=\"#\">w3schools.com</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"stat-cell\">56</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"stat-cell\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-arrow-down text-danger\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t  <path fill-rule=\"evenodd\" d=\"M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t    20%
\t\t\t\t\t\t\t\t\t\t\t    </td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td><a href=\"#\">javascript.com </a></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"stat-cell\">24</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"stat-cell\">-</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td><a href=\"#\">github.com </a></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"stat-cell\">17</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"stat-cell\">15%</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t        </div><!--//table-responsive-->
\t\t\t\t\t        </div><!--//app-card-body-->
\t\t\t\t        </div><!--//app-card-->
\t\t\t        </div><!--//col-->
\t\t\t    </div><!--//row-->
\t\t\t    <div class=\"row g-4 mb-4\">
\t\t\t\t    <div class=\"col-12 col-lg-4\">
\t\t\t\t\t    <div class=\"app-card app-card-basic d-flex flex-column align-items-start shadow-sm\">
\t\t\t\t\t\t    <div class=\"app-card-header p-3 border-bottom-0\">
\t\t\t\t\t\t        <div class=\"row align-items-center gx-3\">
\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t\t\t        <div class=\"app-icon-holder\">
\t\t\t\t\t\t\t\t\t\t    <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-receipt\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path fill-rule=\"evenodd\" d=\"M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z\"/>
  <path fill-rule=\"evenodd\" d=\"M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z\"/>
</svg>
\t\t\t\t\t\t\t\t\t    </div><!--//icon-holder-->
\t\t\t\t\t\t                
\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t\t\t        <h4 class=\"app-card-title\">Invoices</h4>
\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t        </div><!--//row-->
\t\t\t\t\t\t    </div><!--//app-card-header-->
\t\t\t\t\t\t    <div class=\"app-card-body px-4\">
\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t    <div class=\"intro\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquet eros vel diam semper mollis.</div>
\t\t\t\t\t\t    </div><!--//app-card-body-->
\t\t\t\t\t\t    <div class=\"app-card-footer p-4 mt-auto\">
\t\t\t\t\t\t\t   <a class=\"btn app-btn-secondary\" href=\"#\">Create New</a>
\t\t\t\t\t\t    </div><!--//app-card-footer-->
\t\t\t\t\t\t</div><!--//app-card-->
\t\t\t\t    </div><!--//col-->
\t\t\t\t    <div class=\"col-12 col-lg-4\">
\t\t\t\t\t    <div class=\"app-card app-card-basic d-flex flex-column align-items-start shadow-sm\">
\t\t\t\t\t\t    <div class=\"app-card-header p-3 border-bottom-0\">
\t\t\t\t\t\t        <div class=\"row align-items-center gx-3\">
\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t\t\t        <div class=\"app-icon-holder\">
\t\t\t\t\t\t\t\t\t\t    <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-code-square\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path fill-rule=\"evenodd\" d=\"M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z\"/>
  <path fill-rule=\"evenodd\" d=\"M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z\"/>
</svg>
\t\t\t\t\t\t\t\t\t    </div><!--//icon-holder-->
\t\t\t\t\t\t                
\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t\t\t        <h4 class=\"app-card-title\">Apps</h4>
\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t        </div><!--//row-->
\t\t\t\t\t\t    </div><!--//app-card-header-->
\t\t\t\t\t\t    <div class=\"app-card-body px-4\">
\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t    <div class=\"intro\">Pellentesque varius, elit vel volutpat sollicitudin, lacus quam efficitur augue</div>
\t\t\t\t\t\t    </div><!--//app-card-body-->
\t\t\t\t\t\t    <div class=\"app-card-footer p-4 mt-auto\">
\t\t\t\t\t\t\t   <a class=\"btn app-btn-secondary\" href=\"#\">Create New</a>
\t\t\t\t\t\t    </div><!--//app-card-footer-->
\t\t\t\t\t\t</div><!--//app-card-->
\t\t\t\t    </div><!--//col-->
\t\t\t\t    <div class=\"col-12 col-lg-4\">
\t\t\t\t\t    <div class=\"app-card app-card-basic d-flex flex-column align-items-start shadow-sm\">
\t\t\t\t\t\t    <div class=\"app-card-header p-3 border-bottom-0\">
\t\t\t\t\t\t        <div class=\"row align-items-center gx-3\">
\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t\t\t        <div class=\"app-icon-holder\">
\t\t\t\t\t\t\t\t\t\t    <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-tools\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path fill-rule=\"evenodd\" d=\"M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z\"/>
  <path fill-rule=\"evenodd\" d=\"M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z\"/>
</svg>
\t\t\t\t\t\t\t\t\t    </div><!--//icon-holder-->
\t\t\t\t\t\t                
\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t\t\t        <h4 class=\"app-card-title\">Tools</h4>
\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t        </div><!--//row-->
\t\t\t\t\t\t    </div><!--//app-card-header-->
\t\t\t\t\t\t    <div class=\"app-card-body px-4\">
\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t    <div class=\"intro\">Sed maximus, libero ac pharetra elementum, turpis nisi molestie neque, et tincidunt velit turpis non enim.</div>
\t\t\t\t\t\t    </div><!--//app-card-body-->
\t\t\t\t\t\t    <div class=\"app-card-footer p-4 mt-auto\">
\t\t\t\t\t\t\t   <a class=\"btn app-btn-secondary\" href=\"#\">Create New</a>
\t\t\t\t\t\t    </div><!--//app-card-footer-->
\t\t\t\t\t\t</div><!--//app-card-->
\t\t\t\t    </div><!--//col-->
\t\t\t    </div><!--//row-->
\t\t\t    
\t\t    </div><!--//container-fluid-->
\t    </div><!--//app-content-->
\t    
\t    <footer class=\"app-footer\">
\t\t    <div class=\"container text-center py-3\">
\t\t         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class=\"copyright\">Designed with <span class=\"sr-only\">love</span><i class=\"fas fa-heart\" style=\"color: #fb866a;\"></i> by <a class=\"app-link\" href=\"http://themes.3rdwavemedia.com\" target=\"_blank\">Xiaoying Riley</a> for developers</small>
\t\t       
\t\t    </div>
\t    </footer><!--//app-footer-->
\t    
    </div><!--//app-wrapper-->    \t\t\t\t\t

 
    <!-- Javascript -->    
    ";
        // line 805
        $this->displayBlock('javascripts', $context, $blocks);
        // line 816
        echo "</body>
</html> ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Portal - Bootstrap 5 Admin Dashboard Template For Developers ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 18
        echo "    <link id=\"theme-style\" rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/css/portal.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "   \t
    <header class=\"app-header fixed-top\">\t   \t            
        <div class=\"app-header-inner\">  
\t        <div class=\"container-fluid py-2\">
\t\t        <div class=\"app-header-content\"> 
\t\t            <div class=\"row justify-content-between align-items-center\">
\t\t\t        
\t\t\t\t    <div class=\"col-auto\">
\t\t\t\t\t    <a id=\"sidepanel-toggler\" class=\"sidepanel-toggler d-inline-block d-xl-none\" href=\"#\">
\t\t\t\t\t\t    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" role=\"img\"><title>Menu</title><path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-miterlimit=\"10\" stroke-width=\"2\" d=\"M4 7h22M4 15h22M4 23h22\"></path></svg>
\t\t\t\t\t    </a>
\t\t\t\t    </div><!--//col-->
\t\t            <div class=\"search-mobile-trigger d-sm-none col\">
\t\t\t            <i class=\"search-mobile-trigger-icon fa-solid fa-magnifying-glass\"></i>
\t\t\t        </div><!--//col-->
\t\t            <div class=\"app-search-box col\">
\t\t                <form class=\"app-search-form\">   
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search...\" name=\"search\" class=\"form-control search-input\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn search-btn btn-primary\" value=\"Search\"><i class=\"fa-solid fa-magnifying-glass\"></i></button> 
\t\t\t\t        </form>
\t\t            </div><!--//app-search-box-->
\t\t            
\t\t            <div class=\"app-utilities col-auto\">
\t\t\t            <div class=\"app-utility-item app-notifications-dropdown dropdown\">    
\t\t\t\t            <a class=\"dropdown-toggle no-toggle-arrow\" id=\"notifications-dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\" title=\"Notifications\">
\t\t\t\t\t            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t            <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-bell icon\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path d=\"M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z\"/>
  <path fill-rule=\"evenodd\" d=\"M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z\"/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 805
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo "      
    <script src=\"";
        // line 806
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/plugins/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 807
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>  

    <!-- Charts JS -->
    <script src=\"";
        // line 810
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/plugins/chart.js/chart.min.js"), "html", null, true);
        echo "\"></script> 
    <script src=\"";
        // line 811
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/js/index-charts.js"), "html", null, true);
        echo "\"></script> 
    
    <!-- Page Specific JS -->
    <script src=\"";
        // line 814
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/js/app.js"), "html", null, true);
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
        return "baseBack.html.twig";
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
        return array (  981 => 814,  975 => 811,  971 => 810,  965 => 807,  961 => 806,  949 => 805,  901 => 22,  888 => 18,  878 => 17,  859 => 4,  848 => 816,  846 => 805,  201 => 163,  180 => 145,  147 => 115,  93 => 64,  79 => 52,  77 => 22,  73 => 20,  71 => 17,  67 => 16,  52 => 4,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\"> 
<head>
    <title> {% block title %} Portal - Bootstrap 5 Admin Dashboard Template For Developers {% endblock %} </title>
    
    <!-- Meta -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    
    <meta name=\"description\" content=\"Portal - Bootstrap 5 Admin Dashboard Template For Developers\">
    <meta name=\"author\" content=\"Xiaoying Riley at 3rd Wave Media\">    
    <link rel=\"shortcut icon\" href=\"favicon.ico\"> 
    
    <!-- FontAwesome JS-->
    <script defer src=\"{{asset('Back/assets/plugins/fontawesome/js/all.min.js')}}\"></script>    
    <!-- App CSS -->  {% block css %}
    <link id=\"theme-style\" rel=\"stylesheet\" href=\"{{asset('Back/assets/css/portal.css')}}\">
{% endblock %}
</head> 

<body class=\"app\">{% block body %}   \t
    <header class=\"app-header fixed-top\">\t   \t            
        <div class=\"app-header-inner\">  
\t        <div class=\"container-fluid py-2\">
\t\t        <div class=\"app-header-content\"> 
\t\t            <div class=\"row justify-content-between align-items-center\">
\t\t\t        
\t\t\t\t    <div class=\"col-auto\">
\t\t\t\t\t    <a id=\"sidepanel-toggler\" class=\"sidepanel-toggler d-inline-block d-xl-none\" href=\"#\">
\t\t\t\t\t\t    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" role=\"img\"><title>Menu</title><path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-miterlimit=\"10\" stroke-width=\"2\" d=\"M4 7h22M4 15h22M4 23h22\"></path></svg>
\t\t\t\t\t    </a>
\t\t\t\t    </div><!--//col-->
\t\t            <div class=\"search-mobile-trigger d-sm-none col\">
\t\t\t            <i class=\"search-mobile-trigger-icon fa-solid fa-magnifying-glass\"></i>
\t\t\t        </div><!--//col-->
\t\t            <div class=\"app-search-box col\">
\t\t                <form class=\"app-search-form\">   
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search...\" name=\"search\" class=\"form-control search-input\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn search-btn btn-primary\" value=\"Search\"><i class=\"fa-solid fa-magnifying-glass\"></i></button> 
\t\t\t\t        </form>
\t\t            </div><!--//app-search-box-->
\t\t            
\t\t            <div class=\"app-utilities col-auto\">
\t\t\t            <div class=\"app-utility-item app-notifications-dropdown dropdown\">    
\t\t\t\t            <a class=\"dropdown-toggle no-toggle-arrow\" id=\"notifications-dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\" title=\"Notifications\">
\t\t\t\t\t            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t            <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-bell icon\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path d=\"M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z\"/>
  <path fill-rule=\"evenodd\" d=\"M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z\"/>
{% endblock %}
</svg>
\t\t\t\t\t            <span class=\"icon-badge\">3</span>
\t\t\t\t\t        </a><!--//dropdown-toggle-->
\t\t\t\t\t        
\t\t\t\t\t        <div class=\"dropdown-menu p-0\" aria-labelledby=\"notifications-dropdown-toggle\">
\t\t\t\t\t            <div class=\"dropdown-menu-header p-3\">
\t\t\t\t\t\t            <h5 class=\"dropdown-menu-title mb-0\">Notifications</h5>
\t\t\t\t\t\t        </div><!--//dropdown-menu-title-->
\t\t\t\t\t\t        <div class=\"dropdown-menu-content\">
\t\t\t\t\t\t\t       <div class=\"item p-3\">
\t\t\t\t\t\t\t\t        <div class=\"row gx-2 justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t       <img class=\"profile-image\" src=\"{{asset('Back/assets/images/profiles/profile-1.png')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t\t\t\t        <div class=\"col\">
\t\t\t\t\t\t\t\t\t\t        <div class=\"info\"> 
\t\t\t\t\t\t\t\t\t\t\t        <div class=\"desc\">Amy shared a file with you. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
\t\t\t\t\t\t\t\t\t\t\t        <div class=\"meta\"> 2 hrs ago</div>
\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t        </div><!--//col--> 
\t\t\t\t\t\t\t\t        </div><!--//row-->
\t\t\t\t\t\t\t\t        <a class=\"link-mask\" href=\"notifications.html\"></a>
\t\t\t\t\t\t\t       </div><!--//item-->
\t\t\t\t\t\t\t       <div class=\"item p-3\">
\t\t\t\t\t\t\t\t        <div class=\"row gx-2 justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t        <div class=\"app-icon-holder\">
\t\t\t\t\t\t\t\t\t\t\t        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-receipt\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t  <path fill-rule=\"evenodd\" d=\"M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z\"/>
\t  <path fill-rule=\"evenodd\" d=\"M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z\"/>
\t</svg>
\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t\t\t\t        <div class=\"col\">
\t\t\t\t\t\t\t\t\t\t        <div class=\"info\"> 
\t\t\t\t\t\t\t\t\t\t\t        <div class=\"desc\">You have a new invoice. Proin venenatis interdum est.</div>
\t\t\t\t\t\t\t\t\t\t\t        <div class=\"meta\"> 1 day ago</div>
\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t\t\t        </div><!--//row-->
\t\t\t\t\t\t\t\t        <a class=\"link-mask\" href=\"notifications.html\"></a>
\t\t\t\t\t\t\t       </div><!--//item-->
\t\t\t\t\t\t\t       <div class=\"item p-3\">
\t\t\t\t\t\t\t\t        <div class=\"row gx-2 justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t        <div class=\"app-icon-holder icon-holder-mono\">
\t\t\t\t\t\t\t\t\t\t\t        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-bar-chart-line\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path fill-rule=\"evenodd\" d=\"M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z\"/>
</svg>
\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t\t\t\t        <div class=\"col\">
\t\t\t\t\t\t\t\t\t\t        <div class=\"info\"> 
\t\t\t\t\t\t\t\t\t\t\t        <div class=\"desc\">Your report is ready. Proin venenatis interdum est.</div>
\t\t\t\t\t\t\t\t\t\t\t        <div class=\"meta\"> 3 days ago</div>
\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t\t\t        </div><!--//row-->
\t\t\t\t\t\t\t\t        <a class=\"link-mask\" href=\"notifications.html\"></a>
\t\t\t\t\t\t\t       </div><!--//item-->
\t\t\t\t\t\t\t       <div class=\"item p-3\">
\t\t\t\t\t\t\t\t        <div class=\"row gx-2 justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t       <img class=\"profile-image\" src=\"{{asset('Back/assets/images/profiles/profile-2.png')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t\t\t\t        <div class=\"col\">
\t\t\t\t\t\t\t\t\t\t        <div class=\"info\"> 
\t\t\t\t\t\t\t\t\t\t\t        <div class=\"desc\">James sent you a new message.</div>
\t\t\t\t\t\t\t\t\t\t\t        <div class=\"meta\"> 7 days ago</div>
\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t        </div><!--//col--> 
\t\t\t\t\t\t\t\t        </div><!--//row-->
\t\t\t\t\t\t\t\t        <a class=\"link-mask\" href=\"notifications.html\"></a>
\t\t\t\t\t\t\t       </div><!--//item-->
\t\t\t\t\t\t        </div><!--//dropdown-menu-content-->
\t\t\t\t\t\t        
\t\t\t\t\t\t        <div class=\"dropdown-menu-footer p-2 text-center\">
\t\t\t\t\t\t\t        <a href=\"notifications.html\">View all</a>
\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div><!--//dropdown-menu-->\t\t\t\t\t        
\t\t\t\t        </div><!--//app-utility-item-->
\t\t\t            <div class=\"app-utility-item\">
\t\t\t\t            <a href=\"settings.html\" title=\"Settings\">
\t\t\t\t\t            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t            <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-gear icon\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path fill-rule=\"evenodd\" d=\"M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z\"/>
  <path fill-rule=\"evenodd\" d=\"M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z\"/>
</svg>
\t\t\t\t\t        </a>
\t\t\t\t\t    </div><!--//app-utility-item-->
\t\t\t            
\t\t\t            <div class=\"app-utility-item app-user-dropdown dropdown\">
\t\t\t\t            <a class=\"dropdown-toggle\" id=\"user-dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\"><img src=\"{{asset('Back/assets/images/user.png')}}\" alt=\"user profile\"></a>
\t\t\t\t            <ul class=\"dropdown-menu\" aria-labelledby=\"user-dropdown-toggle\">
\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"account.html\">Account</a></li>
\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"settings.html\">Settings</a></li>
\t\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"login.html\">Log Out</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t            </div><!--//app-user-dropdown--> 
\t\t            </div><!--//app-utilities-->
\t\t        </div><!--//row-->
\t            </div><!--//app-header-content-->
\t        </div><!--//container-fluid-->
        </div><!--//app-header-inner-->
        <div id=\"app-sidepanel\" class=\"app-sidepanel\"> 
\t        <div id=\"sidepanel-drop\" class=\"sidepanel-drop\"></div>
\t        <div class=\"sidepanel-inner d-flex flex-column\">
\t\t        <a href=\"#\" id=\"sidepanel-close\" class=\"sidepanel-close d-xl-none\">&times;</a>
\t\t        <div class=\"app-branding\">
\t\t            <a class=\"app-logo\" href=\"index.html\"><img class=\"logo-icon me-2\" src=\"{{asset('Back/assets/images/logoW.png')}}\" alt=\"logo\"><span class=\"logo-text\" style=\"color:#563d2d\" >WasteWise</span></a>
\t
\t\t        </div><!--//app-branding-->  
\t\t        
\t\t\t    <nav id=\"app-nav-main\" class=\"app-nav app-nav-main flex-grow-1\">
\t\t\t\t    <ul class=\"app-menu list-unstyled accordion\" id=\"menu-accordion\">
\t\t\t\t\t    <li class=\"nav-item\">
\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t        <a class=\"nav-link active\" href=\"index.html\">
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-house-door\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t  <path fill-rule=\"evenodd\" d=\"M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z\"/>
\t\t  <path fill-rule=\"evenodd\" d=\"M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z\"/>
\t\t</svg>
\t\t\t\t\t\t         </span>
\t\t                         <span class=\"nav-link-text\">Overview</span>
\t\t\t\t\t\t\t
\t\t\t\t\t        </a><!--//nav-link-->

\t\t\t\t\t    </li><!--//nav-item-->
<li class=\"nav-item has-submenu\">
\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t        <a class=\"nav-link submenu-toggle\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#submenu-1\" aria-expanded=\"false\" aria-controls=\"submenu-1\">
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t\t        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-people\" viewBox=\"0 0 16 16\">
  <path d=\"M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4\"/>
</svg>
\t\t\t\t\t\t         </span>
\t\t                         <span class=\"nav-link-text\">Users</span>
\t\t                         <span class=\"submenu-arrow\">
\t\t                             <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-chevron-down\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t  <path fill-rule=\"evenodd\" d=\"M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z\"/>
\t</svg>
\t                             </span><!--//submenu-arrow-->
\t\t\t\t\t        </a><!--//nav-link-->
\t\t\t\t\t        <div id=\"submenu-1\" class=\"collapse submenu submenu-1\" data-bs-parent=\"#menu-accordion\">
\t\t\t\t\t\t        <ul class=\"submenu-list list-unstyled\">
\t\t\t\t\t\t\t\t\t<li class=\"submenu-item\"><a class=\"submenu-link\" href=\"notifications.html\">Admin</a></li>
\t\t\t\t\t\t\t        <li class=\"submenu-item\"><a class=\"submenu-link\" href=\"notifications.html\">Suppliers</a></li>
\t\t\t\t\t\t\t        <li class=\"submenu-item\"><a class=\"submenu-link\" href=\"account.html\">Drivers</a></li>
\t\t\t\t\t\t\t        <li class=\"submenu-item\"><a class=\"submenu-link\" href=\"settings.html\">Clients</a></li>

\t\t\t\t\t\t        </ul>
\t\t\t\t\t        </div>
\t\t\t\t\t    </li><!--//nav-item-->

<li class=\"nav-item\">
\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t        <a class=\"nav-link\" href=\"docs.html\">
\t\t\t\t\t\t        
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->

\t\t\t\t\t\t        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-check2-square\" viewBox=\"0 0 16 16\">
  <path d=\"M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5z\"/>
  <path d=\"m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0\"/>
</svg>
\t\t\t\t\t\t         </span>


</span>
\t\t                         <span class=\"nav-link-text\">Mission</span>
\t\t\t\t\t        </a><!--//nav-link-->
\t\t\t\t\t    </li><!--//nav-item-->

<li class=\"nav-item\">
\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t        <a class=\"nav-link\" href=\"docs.html\">
\t\t\t\t\t\t        
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->

\t\t\t\t\t\t        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-calendar-event\" viewBox=\"0 0 16 16\">
  <path d=\"M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z\"/>
  <path d=\"M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z\"/>
</svg>
\t\t\t\t\t\t         </span>


</span>
\t\t                         <span class=\"nav-link-text\">Planning</span>
\t\t\t\t\t        </a><!--//nav-link-->
\t\t\t\t\t    </li><!--//nav-item-->

<li class=\"nav-item\">
\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t        <a class=\"nav-link\" href=\"docs.html\">
\t\t\t\t\t\t        
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->

\t\t\t\t\t\t        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-truck\" viewBox=\"0 0 16 16\">
  <path d=\"M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2\"/>
</svg>
\t\t\t\t\t\t         </span>


</span>
\t\t                         <span class=\"nav-link-text\">Truck</span>
\t\t\t\t\t        </a><!--//nav-link-->
\t\t\t\t\t    </li><!--//nav-item-->

<li class=\"nav-item has-submenu\">
\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t        <a class=\"nav-link submenu-toggle\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#submenu-1\" aria-expanded=\"false\" aria-controls=\"submenu-1\">
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->

\t\t\t\t\t\t        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\">
  <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z\"/>
  <path d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z\"/>
</svg>
\t\t\t\t\t\t         </span>


</span>

\t\t                         <span class=\"nav-link-text\">Waste</span>
\t\t\t\t\t        </a><!--//nav-link-->
\t\t\t\t\t    </li><!--//nav-item-->

<li class=\"nav-item\">
\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t        <a class=\"nav-link\" href=\"docs.html\">
\t\t\t\t\t\t        
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->

\t\t\t\t\t\t        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-box\" viewBox=\"0 0 16 16\">
  <path d=\"M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z\"/>
</svg>
\t\t\t\t\t\t         </span>


</span>
\t\t                         <span class=\"nav-link-text\">Stock</span>
\t\t\t\t\t        </a><!--//nav-link-->
\t\t\t\t\t    </li><!--//nav-item-->

<li class=\"nav-item\">
\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t        <a class=\"nav-link\" href=\"docs.html\">
\t\t\t\t\t\t        
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->

\t\t\t\t\t\t        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-house-door\" viewBox=\"0 0 16 16\">
  <path d=\"M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z\"/>
</svg>
\t\t\t\t\t\t         </span>


</span>
\t\t                         <span class=\"nav-link-text\">storehouse</span>
\t\t\t\t\t        </a><!--//nav-link-->
\t\t\t\t\t    </li><!--//nav-item-->
\t\t\t\t\t    <li class=\"nav-item\">
\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t        <a class=\"nav-link\" href=\"docs.html\">
\t\t\t\t\t\t        
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->

\t\t\t\t\t\t        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-house-heart\" viewBox=\"0 0 16 16\">
  <path d=\"M8 6.982C9.664 5.309 13.825 8.236 8 12 2.175 8.236 6.336 5.309 8 6.982\"/>
  <path d=\"M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.707L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.646a.5.5 0 0 0 .708-.707L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z\"/>
</svg>
\t\t\t\t\t\t         </span>


</span>
\t\t                         <span class=\"nav-link-text\">Association</span>
\t\t\t\t\t        </a><!--//nav-link-->
\t\t\t\t\t    </li><!--//nav-item-->
\t\t\t\t\t    <li class=\"nav-item has-submenu\">
\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t        <a class=\"nav-link submenu-toggle\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#submenu-1\" aria-expanded=\"false\" aria-controls=\"submenu-1\">
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->

\t\t\t\t\t\t        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-box2-heart\" viewBox=\"0 0 16 16\">
  <path d=\"M8 7.982C9.664 6.309 13.825 9.236 8 13 2.175 9.236 6.336 6.31 8 7.982\"/>
  <path d=\"M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4zm0 1H7.5v3h-6zM8.5 4V1h3.75l2.25 3zM15 5v10H1V5z\"/>
</svg>
\t\t\t\t\t\t         </span>


</span>

\t\t                         <span class=\"nav-link-text\">Donation</span>
\t\t\t\t\t        </a><!--//nav-link-->
\t\t\t\t\t    </li><!--//nav-item-->

<li class=\"nav-item has-submenu\">
\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t        <a class=\"nav-link submenu-toggle\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#submenu-1\" aria-expanded=\"false\" aria-controls=\"submenu-1\">
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-emoji-smile-upside-down\" viewBox=\"0 0 16 16\">
  <path d=\"M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1m0-1a8 8 0 1 1 0 16A8 8 0 0 1 8 0\"/>
  <path d=\"M4.285 6.433a.5.5 0 0 0 .683-.183A3.5 3.5 0 0 1 8 4.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.5 4.5 0 0 0 8 3.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683M7 9.5C7 8.672 6.552 8 6 8s-1 .672-1 1.5.448 1.5 1 1.5 1-.672 1-1.5m4 0c0-.828-.448-1.5-1-1.5s-1 .672-1 1.5.448 1.5 1 1.5 1-.672 1-1.5\"/>
</svg>
\t\t\t\t\t\t        
\t\t\t\t\t\t         </span>


</span>

\t\t                         <span class=\"nav-link-text\">Feedback</span>
\t\t\t\t\t        </a><!--//nav-link-->
\t\t\t\t\t    </li><!--//nav-item-->

<li class=\"nav-item has-submenu\">
\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
\t\t\t\t\t        <a class=\"nav-link submenu-toggle\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#submenu-1\" aria-expanded=\"false\" aria-controls=\"submenu-1\">
\t\t\t\t\t\t        <span class=\"nav-icon\">
\t\t\t\t\t\t        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->

\t\t\t\t\t\t        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-chat-square-heart\" viewBox=\"0 0 16 16\">
  <path d=\"M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z\"/>
  <path d=\"M8 3.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132\"/>
</svg>
\t\t\t\t\t\t         </span>


</span>

\t\t                         <span class=\"nav-link-text\">reclamation</span>
\t\t\t\t\t        </a><!--//nav-link-->
\t\t\t\t\t    </li><!--//nav-item-->


\t\t\t\t\t    </ul><!--//footer-menu-->
\t\t\t\t    </nav>
\t\t\t    </div><!--//app-sidepanel-footer-->
\t\t       
\t        </div><!--//sidepanel-inner-->
\t    </div><!--//app-sidepanel-->
    </header><!--//app-header-->
    
    <div class=\"app-wrapper\">
\t    
\t    <div class=\"app-content pt-3 p-md-3 p-lg-4\">
\t\t    <div class=\"container-xl\">
\t\t\t    
\t\t\t    <h1 class=\"app-page-title\">Overview</h1>
\t\t\t    
\t\t\t    <div class=\"app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration\" role=\"alert\">
\t\t\t\t    <div class=\"inner\">
\t\t\t\t\t    <div class=\"app-card-body p-3 p-lg-4\">
\t\t\t\t\t\t    <h3 class=\"mb-3\">Welcome, developer!</h3>
\t\t\t\t\t\t    <div class=\"row gx-5 gy-3\">
\t\t\t\t\t\t        <div class=\"col-12 col-lg-9\">
\t\t\t\t\t\t\t        
\t\t\t\t\t\t\t        <div>Portal is a free Bootstrap 5 admin dashboard template. The design is simple, clean and modular so it's a great base for building any modern web app.</div>
\t\t\t\t\t\t\t    </div><!--//col-->
\t\t\t\t\t\t\t    <div class=\"col-12 col-lg-3\">
\t\t\t\t\t\t\t\t    <a class=\"btn app-btn-primary\" href=\"https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/\"><svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-file-earmark-arrow-down me-2\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path d=\"M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z\"/>
  <path d=\"M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z\"/>
  <path fill-rule=\"evenodd\" d=\"M8 6a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 10.293V6.5A.5.5 0 0 1 8 6z\"/>
</svg>Free Download</a>
\t\t\t\t\t\t\t    </div><!--//col-->
\t\t\t\t\t\t    </div><!--//row-->
\t\t\t\t\t\t    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t\t\t\t    </div><!--//app-card-body-->
\t\t\t\t\t    
\t\t\t\t    </div><!--//inner-->
\t\t\t    </div><!--//app-card-->
\t\t\t\t    
\t\t\t    <div class=\"row g-4 mb-4\">
\t\t\t\t    <div class=\"col-6 col-lg-3\">
\t\t\t\t\t    <div class=\"app-card app-card-stat shadow-sm h-100\">
\t\t\t\t\t\t    <div class=\"app-card-body p-3 p-lg-4\">
\t\t\t\t\t\t\t    <h4 class=\"stats-type mb-1\">Total Sales</h4>
\t\t\t\t\t\t\t    <div class=\"stats-figure\">\$12,628</div>
\t\t\t\t\t\t\t    <div class=\"stats-meta text-success\">
\t\t\t\t\t\t\t\t    <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-arrow-up\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path fill-rule=\"evenodd\" d=\"M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z\"/>
</svg> 20%</div>
\t\t\t\t\t\t    </div><!--//app-card-body-->
\t\t\t\t\t\t    <a class=\"app-card-link-mask\" href=\"#\"></a>
\t\t\t\t\t    </div><!--//app-card-->
\t\t\t\t    </div><!--//col-->
\t\t\t\t    
\t\t\t\t    <div class=\"col-6 col-lg-3\">
\t\t\t\t\t    <div class=\"app-card app-card-stat shadow-sm h-100\">
\t\t\t\t\t\t    <div class=\"app-card-body p-3 p-lg-4\">
\t\t\t\t\t\t\t    <h4 class=\"stats-type mb-1\">Expenses</h4>
\t\t\t\t\t\t\t    <div class=\"stats-figure\">\$2,250</div>
\t\t\t\t\t\t\t    <div class=\"stats-meta text-success\">
\t\t\t\t\t\t\t\t    <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-arrow-down\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path fill-rule=\"evenodd\" d=\"M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z\"/>
</svg> 5% </div>
\t\t\t\t\t\t    </div><!--//app-card-body-->
\t\t\t\t\t\t    <a class=\"app-card-link-mask\" href=\"#\"></a>
\t\t\t\t\t    </div><!--//app-card-->
\t\t\t\t    </div><!--//col-->
\t\t\t\t    <div class=\"col-6 col-lg-3\">
\t\t\t\t\t    <div class=\"app-card app-card-stat shadow-sm h-100\">
\t\t\t\t\t\t    <div class=\"app-card-body p-3 p-lg-4\">
\t\t\t\t\t\t\t    <h4 class=\"stats-type mb-1\">Projects</h4>
\t\t\t\t\t\t\t    <div class=\"stats-figure\">23</div>
\t\t\t\t\t\t\t    <div class=\"stats-meta\">
\t\t\t\t\t\t\t\t    Open</div>
\t\t\t\t\t\t    </div><!--//app-card-body-->
\t\t\t\t\t\t    <a class=\"app-card-link-mask\" href=\"#\"></a>
\t\t\t\t\t    </div><!--//app-card-->
\t\t\t\t    </div><!--//col-->
\t\t\t\t    <div class=\"col-6 col-lg-3\">
\t\t\t\t\t    <div class=\"app-card app-card-stat shadow-sm h-100\">
\t\t\t\t\t\t    <div class=\"app-card-body p-3 p-lg-4\">
\t\t\t\t\t\t\t    <h4 class=\"stats-type mb-1\">Invoices</h4>
\t\t\t\t\t\t\t    <div class=\"stats-figure\">6</div>
\t\t\t\t\t\t\t    <div class=\"stats-meta\">New</div>
\t\t\t\t\t\t    </div><!--//app-card-body-->
\t\t\t\t\t\t    <a class=\"app-card-link-mask\" href=\"#\"></a>
\t\t\t\t\t    </div><!--//app-card-->
\t\t\t\t    </div><!--//col-->
\t\t\t    </div><!--//row-->
\t\t\t    <div class=\"row g-4 mb-4\">
\t\t\t        <div class=\"col-12 col-lg-6\">
\t\t\t\t        <div class=\"app-card app-card-chart h-100 shadow-sm\">
\t\t\t\t\t        <div class=\"app-card-header p-3\">
\t\t\t\t\t\t        <div class=\"row justify-content-between align-items-center\">
\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t                <h4 class=\"app-card-title\">Line Chart Example</h4>
\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t\t\t        <div class=\"card-header-action\">
\t\t\t\t\t\t\t\t\t        <a href=\"charts.html\">More charts</a>
\t\t\t\t\t\t\t\t        </div><!--//card-header-actions-->
\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t        </div><!--//row-->
\t\t\t\t\t        </div><!--//app-card-header-->
\t\t\t\t\t        <div class=\"app-card-body p-3 p-lg-4\">
\t\t\t\t\t\t\t    <div class=\"mb-3 d-flex\">   
\t\t\t\t\t\t\t        <select class=\"form-select form-select-sm ms-auto d-inline-flex w-auto\">
\t\t\t\t\t\t\t\t\t    <option value=\"1\" selected>This week</option>
\t\t\t\t\t\t\t\t\t    <option value=\"2\">Today</option>
\t\t\t\t\t\t\t\t\t    <option value=\"3\">This Month</option>
\t\t\t\t\t\t\t\t\t    <option value=\"3\">This Year</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t        <div class=\"chart-container\">
\t\t\t\t                    <canvas id=\"canvas-linechart\" ></canvas>
\t\t\t\t\t\t        </div>
\t\t\t\t\t        </div><!--//app-card-body-->
\t\t\t\t        </div><!--//app-card-->
\t\t\t        </div><!--//col-->
\t\t\t        <div class=\"col-12 col-lg-6\">
\t\t\t\t        <div class=\"app-card app-card-chart h-100 shadow-sm\">
\t\t\t\t\t        <div class=\"app-card-header p-3\">
\t\t\t\t\t\t        <div class=\"row justify-content-between align-items-center\">
\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t                <h4 class=\"app-card-title\">Bar Chart Example</h4>
\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t\t\t        <div class=\"card-header-action\">
\t\t\t\t\t\t\t\t\t        <a href=\"charts.html\">More charts</a>
\t\t\t\t\t\t\t\t        </div><!--//card-header-actions-->
\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t        </div><!--//row-->
\t\t\t\t\t        </div><!--//app-card-header-->
\t\t\t\t\t        <div class=\"app-card-body p-3 p-lg-4\">
\t\t\t\t\t\t\t    <div class=\"mb-3 d-flex\">   
\t\t\t\t\t\t\t        <select class=\"form-select form-select-sm ms-auto d-inline-flex w-auto\">
\t\t\t\t\t\t\t\t\t    <option value=\"1\" selected>This week</option>
\t\t\t\t\t\t\t\t\t    <option value=\"2\">Today</option>
\t\t\t\t\t\t\t\t\t    <option value=\"3\">This Month</option>
\t\t\t\t\t\t\t\t\t    <option value=\"3\">This Year</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t        <div class=\"chart-container\">
\t\t\t\t                    <canvas id=\"canvas-barchart\" ></canvas>
\t\t\t\t\t\t        </div>
\t\t\t\t\t        </div><!--//app-card-body-->
\t\t\t\t        </div><!--//app-card-->
\t\t\t        </div><!--//col-->
\t\t\t        
\t\t\t    </div><!--//row-->
\t\t\t    <div class=\"row g-4 mb-4\">
\t\t\t\t    <div class=\"col-12 col-lg-6\">
\t\t\t\t        <div class=\"app-card app-card-progress-list h-100 shadow-sm\">
\t\t\t\t\t        <div class=\"app-card-header p-3\">
\t\t\t\t\t\t        <div class=\"row justify-content-between align-items-center\">
\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t                <h4 class=\"app-card-title\">Progress</h4>
\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t\t\t        <div class=\"card-header-action\">
\t\t\t\t\t\t\t\t\t        <a href=\"#\">All projects</a>
\t\t\t\t\t\t\t\t        </div><!--//card-header-actions-->
\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t        </div><!--//row-->
\t\t\t\t\t        </div><!--//app-card-header-->
\t\t\t\t\t        <div class=\"app-card-body\">
\t\t\t\t\t\t\t    <div class=\"item p-3\">
\t\t\t\t\t\t\t\t    <div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t    <div class=\"col\">
\t\t\t\t\t\t\t\t\t\t    <div class=\"title mb-1 \">Project lorem ipsum dolor sit amet</div>
\t\t\t\t\t\t\t\t\t\t    <div class=\"progress\">
  <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 25%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
</div>
\t\t\t\t\t\t\t\t\t    </div><!--//col-->
\t\t\t\t\t\t\t\t\t    <div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t    <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-chevron-right\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path fill-rule=\"evenodd\" d=\"M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z\"/>
</svg>
\t\t\t\t\t\t\t\t\t    </div><!--//col-->
\t\t\t\t\t\t\t\t    </div><!--//row-->
\t\t\t\t\t\t\t\t    <a class=\"item-link-mask\" href=\"#\"></a>
\t\t\t\t\t\t\t    </div><!--//item-->
\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t     <div class=\"item p-3\">
\t\t\t\t\t\t\t\t    <div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t    <div class=\"col\">
\t\t\t\t\t\t\t\t\t\t    <div class=\"title mb-1 \">Project duis aliquam et lacus quis ornare</div>
\t\t\t\t\t\t\t\t\t\t    <div class=\"progress\">
  <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 34%;\" aria-valuenow=\"34\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
</div>
\t\t\t\t\t\t\t\t\t    </div><!--//col-->
\t\t\t\t\t\t\t\t\t    <div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t    <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-chevron-right\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path fill-rule=\"evenodd\" d=\"M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z\"/>
</svg>
\t\t\t\t\t\t\t\t\t    </div><!--//col-->
\t\t\t\t\t\t\t\t    </div><!--//row-->
\t\t\t\t\t\t\t\t    <a class=\"item-link-mask\" href=\"#\"></a>
\t\t\t\t\t\t\t    </div><!--//item-->
\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t    <div class=\"item p-3\">
\t\t\t\t\t\t\t\t    <div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t    <div class=\"col\">
\t\t\t\t\t\t\t\t\t\t    <div class=\"title mb-1 \">Project sed tempus felis id lacus pulvinar</div>
\t\t\t\t\t\t\t\t\t\t    <div class=\"progress\">
  <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 68%;\" aria-valuenow=\"68\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
</div>
\t\t\t\t\t\t\t\t\t    </div><!--//col-->
\t\t\t\t\t\t\t\t\t    <div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t    <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-chevron-right\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path fill-rule=\"evenodd\" d=\"M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z\"/>
</svg>
\t\t\t\t\t\t\t\t\t    </div><!--//col-->
\t\t\t\t\t\t\t\t    </div><!--//row-->
\t\t\t\t\t\t\t\t    <a class=\"item-link-mask\" href=\"#\"></a>
\t\t\t\t\t\t\t    </div><!--//item-->
\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t    <div class=\"item p-3\">
\t\t\t\t\t\t\t\t    <div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t    <div class=\"col\">
\t\t\t\t\t\t\t\t\t\t    <div class=\"title mb-1 \">Project sed tempus felis id lacus pulvinar</div>
\t\t\t\t\t\t\t\t\t\t    <div class=\"progress\">
  <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 52%;\" aria-valuenow=\"52\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
</div>
\t\t\t\t\t\t\t\t\t    </div><!--//col-->
\t\t\t\t\t\t\t\t\t    <div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t    <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-chevron-right\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path fill-rule=\"evenodd\" d=\"M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z\"/>
</svg>
\t\t\t\t\t\t\t\t\t    </div><!--//col-->
\t\t\t\t\t\t\t\t    </div><!--//row-->
\t\t\t\t\t\t\t\t    <a class=\"item-link-mask\" href=\"#\"></a>
\t\t\t\t\t\t\t    </div><!--//item-->
\t\t
\t\t\t\t\t        </div><!--//app-card-body-->
\t\t\t\t        </div><!--//app-card-->
\t\t\t        </div><!--//col-->
\t\t\t        <div class=\"col-12 col-lg-6\">
\t\t\t\t        <div class=\"app-card app-card-stats-table h-100 shadow-sm\">
\t\t\t\t\t        <div class=\"app-card-header p-3\">
\t\t\t\t\t\t        <div class=\"row justify-content-between align-items-center\">
\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t                <h4 class=\"app-card-title\">Stats List</h4>
\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t\t\t        <div class=\"card-header-action\">
\t\t\t\t\t\t\t\t\t        <a href=\"#\">View report</a>
\t\t\t\t\t\t\t\t        </div><!--//card-header-actions-->
\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t        </div><!--//row-->
\t\t\t\t\t        </div><!--//app-card-header-->
\t\t\t\t\t        <div class=\"app-card-body p-3 p-lg-4\">
\t\t\t\t\t\t        <div class=\"table-responsive\">
\t\t\t\t\t\t\t        <table class=\"table table-borderless mb-0\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"meta\">Source</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"meta stat-cell\">Views</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"meta stat-cell\">Today</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td><a href=\"#\">google.com</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"stat-cell\">110</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"stat-cell\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-arrow-up text-success\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t  <path fill-rule=\"evenodd\" d=\"M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z\"/>
\t\t\t\t\t\t\t\t\t</svg> 
\t\t\t\t\t\t\t\t\t                30%
\t\t\t\t\t\t\t\t\t            </td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td><a href=\"#\">getbootstrap.com</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"stat-cell\">67</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"stat-cell\">23%</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td><a href=\"#\">w3schools.com</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"stat-cell\">56</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"stat-cell\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-arrow-down text-danger\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t  <path fill-rule=\"evenodd\" d=\"M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t    20%
\t\t\t\t\t\t\t\t\t\t\t    </td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td><a href=\"#\">javascript.com </a></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"stat-cell\">24</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"stat-cell\">-</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td><a href=\"#\">github.com </a></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"stat-cell\">17</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"stat-cell\">15%</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t        </div><!--//table-responsive-->
\t\t\t\t\t        </div><!--//app-card-body-->
\t\t\t\t        </div><!--//app-card-->
\t\t\t        </div><!--//col-->
\t\t\t    </div><!--//row-->
\t\t\t    <div class=\"row g-4 mb-4\">
\t\t\t\t    <div class=\"col-12 col-lg-4\">
\t\t\t\t\t    <div class=\"app-card app-card-basic d-flex flex-column align-items-start shadow-sm\">
\t\t\t\t\t\t    <div class=\"app-card-header p-3 border-bottom-0\">
\t\t\t\t\t\t        <div class=\"row align-items-center gx-3\">
\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t\t\t        <div class=\"app-icon-holder\">
\t\t\t\t\t\t\t\t\t\t    <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-receipt\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path fill-rule=\"evenodd\" d=\"M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z\"/>
  <path fill-rule=\"evenodd\" d=\"M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z\"/>
</svg>
\t\t\t\t\t\t\t\t\t    </div><!--//icon-holder-->
\t\t\t\t\t\t                
\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t\t\t        <h4 class=\"app-card-title\">Invoices</h4>
\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t        </div><!--//row-->
\t\t\t\t\t\t    </div><!--//app-card-header-->
\t\t\t\t\t\t    <div class=\"app-card-body px-4\">
\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t    <div class=\"intro\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquet eros vel diam semper mollis.</div>
\t\t\t\t\t\t    </div><!--//app-card-body-->
\t\t\t\t\t\t    <div class=\"app-card-footer p-4 mt-auto\">
\t\t\t\t\t\t\t   <a class=\"btn app-btn-secondary\" href=\"#\">Create New</a>
\t\t\t\t\t\t    </div><!--//app-card-footer-->
\t\t\t\t\t\t</div><!--//app-card-->
\t\t\t\t    </div><!--//col-->
\t\t\t\t    <div class=\"col-12 col-lg-4\">
\t\t\t\t\t    <div class=\"app-card app-card-basic d-flex flex-column align-items-start shadow-sm\">
\t\t\t\t\t\t    <div class=\"app-card-header p-3 border-bottom-0\">
\t\t\t\t\t\t        <div class=\"row align-items-center gx-3\">
\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t\t\t        <div class=\"app-icon-holder\">
\t\t\t\t\t\t\t\t\t\t    <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-code-square\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path fill-rule=\"evenodd\" d=\"M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z\"/>
  <path fill-rule=\"evenodd\" d=\"M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z\"/>
</svg>
\t\t\t\t\t\t\t\t\t    </div><!--//icon-holder-->
\t\t\t\t\t\t                
\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t\t\t        <h4 class=\"app-card-title\">Apps</h4>
\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t        </div><!--//row-->
\t\t\t\t\t\t    </div><!--//app-card-header-->
\t\t\t\t\t\t    <div class=\"app-card-body px-4\">
\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t    <div class=\"intro\">Pellentesque varius, elit vel volutpat sollicitudin, lacus quam efficitur augue</div>
\t\t\t\t\t\t    </div><!--//app-card-body-->
\t\t\t\t\t\t    <div class=\"app-card-footer p-4 mt-auto\">
\t\t\t\t\t\t\t   <a class=\"btn app-btn-secondary\" href=\"#\">Create New</a>
\t\t\t\t\t\t    </div><!--//app-card-footer-->
\t\t\t\t\t\t</div><!--//app-card-->
\t\t\t\t    </div><!--//col-->
\t\t\t\t    <div class=\"col-12 col-lg-4\">
\t\t\t\t\t    <div class=\"app-card app-card-basic d-flex flex-column align-items-start shadow-sm\">
\t\t\t\t\t\t    <div class=\"app-card-header p-3 border-bottom-0\">
\t\t\t\t\t\t        <div class=\"row align-items-center gx-3\">
\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t\t\t        <div class=\"app-icon-holder\">
\t\t\t\t\t\t\t\t\t\t    <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-tools\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path fill-rule=\"evenodd\" d=\"M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z\"/>
  <path fill-rule=\"evenodd\" d=\"M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z\"/>
</svg>
\t\t\t\t\t\t\t\t\t    </div><!--//icon-holder-->
\t\t\t\t\t\t                
\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t\t        <div class=\"col-auto\">
\t\t\t\t\t\t\t\t        <h4 class=\"app-card-title\">Tools</h4>
\t\t\t\t\t\t\t        </div><!--//col-->
\t\t\t\t\t\t        </div><!--//row-->
\t\t\t\t\t\t    </div><!--//app-card-header-->
\t\t\t\t\t\t    <div class=\"app-card-body px-4\">
\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t    <div class=\"intro\">Sed maximus, libero ac pharetra elementum, turpis nisi molestie neque, et tincidunt velit turpis non enim.</div>
\t\t\t\t\t\t    </div><!--//app-card-body-->
\t\t\t\t\t\t    <div class=\"app-card-footer p-4 mt-auto\">
\t\t\t\t\t\t\t   <a class=\"btn app-btn-secondary\" href=\"#\">Create New</a>
\t\t\t\t\t\t    </div><!--//app-card-footer-->
\t\t\t\t\t\t</div><!--//app-card-->
\t\t\t\t    </div><!--//col-->
\t\t\t    </div><!--//row-->
\t\t\t    
\t\t    </div><!--//container-fluid-->
\t    </div><!--//app-content-->
\t    
\t    <footer class=\"app-footer\">
\t\t    <div class=\"container text-center py-3\">
\t\t         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class=\"copyright\">Designed with <span class=\"sr-only\">love</span><i class=\"fas fa-heart\" style=\"color: #fb866a;\"></i> by <a class=\"app-link\" href=\"http://themes.3rdwavemedia.com\" target=\"_blank\">Xiaoying Riley</a> for developers</small>
\t\t       
\t\t    </div>
\t    </footer><!--//app-footer-->
\t    
    </div><!--//app-wrapper-->    \t\t\t\t\t

 
    <!-- Javascript -->    
    {% block javascripts %}      
    <script src=\"{{asset('Back/assets/plugins/popper.min.js')}}\"></script>
    <script src=\"{{asset('Back/assets/plugins/bootstrap/js/bootstrap.min.js')}}\"></script>  

    <!-- Charts JS -->
    <script src=\"{{asset('Back/assets/plugins/chart.js/chart.min.js')}}\"></script> 
    <script src=\"{{asset('Back/assets/js/index-charts.js')}}\"></script> 
    
    <!-- Page Specific JS -->
    <script src=\"{{asset('Back/assets/js/app.js')}}\"></script> 
    {% endblock %}
</body>
</html> ", "baseBack.html.twig", "C:\\Users\\mabro\\WasteWise\\templates\\baseBack.html.twig");
    }
}
