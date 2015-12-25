<?php

/* TrainCoreBundle:Default:main-layout.html.twig */
class __TwigTemplate_06d7e52ded5dac778815268b7a6e163d357678a0d41723930ff7eada47db22f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82874e7afe42948e780d39fb627b18b8ec37d1def18fb926cd1328740f4c518b = $this->env->getExtension("native_profiler");
        $__internal_82874e7afe42948e780d39fb627b18b8ec37d1def18fb926cd1328740f4c518b->enter($__internal_82874e7afe42948e780d39fb627b18b8ec37d1def18fb926cd1328740f4c518b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrainCoreBundle:Default:main-layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"favicon.ico\">
\t
\t";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        // line 15
        echo "\t
    <!-- Bootstrap core CSS -->
    <link  rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/train/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">

    <!-- Custom styles for this template -->
    <link  rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/train/bootstrap/less/jumbotron-narrow.less"), "html", null, true);
        echo "\">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>

  <body style=\"background-color:white;\">
    <div class=\"container\">
      <div class=\"header clearfix\">
        <nav>
          <ul class=\"nav nav-pills pull-right\">

            <li role=\"presentation\" class=\"active\"><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("train_core_homepage");
        echo "\">Accueil</a></li>
\t\t\t";
        // line 37
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 38
            echo "\t\t\t<li role=\"presentation\"><a href=\"#\">Connecté en tant que ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
            echo "</a></li>\t
\t\t\t<li role=\"presentation\"><a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Se déconnecter</a></li>\t\t
\t\t\t";
        }
        // line 41
        echo "\t\t\t<li role=\"presentation\"><a href=\"#\">Comment ça fonctionne?</a></li>
            <li role=\"presentation\"><a href=\"#\">A propos</a></li>
          </ul>
        </nav>
        <h3 class=\"text-muted\"><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("train_core_homepage");
        echo "\">
\t\t<img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/train/bootstrap/pics/path2.png"), "html", null, true);
        echo "\" alt=\"Path\" /></a></h3>
      </div>
\t";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "      <footer class=\"footer\">
        <p>&copy; 2015 Slim&Théo, Ecole des Mines de Nantes</p>
      </footer>

    </div> <!-- /container -->
\t
\t <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
\t<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/train/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>


  </body>
  
</html>
";
        
        $__internal_82874e7afe42948e780d39fb627b18b8ec37d1def18fb926cd1328740f4c518b->leave($__internal_82874e7afe42948e780d39fb627b18b8ec37d1def18fb926cd1328740f4c518b_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_546fea98a34d72b37079153890a1967504a5951dc1dd42cdcd0ca64efbcc0489 = $this->env->getExtension("native_profiler");
        $__internal_546fea98a34d72b37079153890a1967504a5951dc1dd42cdcd0ca64efbcc0489->enter($__internal_546fea98a34d72b37079153890a1967504a5951dc1dd42cdcd0ca64efbcc0489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 13
        echo "
\t";
        
        $__internal_546fea98a34d72b37079153890a1967504a5951dc1dd42cdcd0ca64efbcc0489->leave($__internal_546fea98a34d72b37079153890a1967504a5951dc1dd42cdcd0ca64efbcc0489_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9d194d5a1b4b6f82661d622abebf2a231dd8ff586a0d2d6eb789cb55b132253 = $this->env->getExtension("native_profiler");
        $__internal_e9d194d5a1b4b6f82661d622abebf2a231dd8ff586a0d2d6eb789cb55b132253->enter($__internal_e9d194d5a1b4b6f82661d622abebf2a231dd8ff586a0d2d6eb789cb55b132253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "
";
        
        $__internal_e9d194d5a1b4b6f82661d622abebf2a231dd8ff586a0d2d6eb789cb55b132253->leave($__internal_e9d194d5a1b4b6f82661d622abebf2a231dd8ff586a0d2d6eb789cb55b132253_prof);

    }

    public function getTemplateName()
    {
        return "TrainCoreBundle:Default:main-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 49,  138 => 48,  130 => 13,  124 => 12,  110 => 58,  101 => 51,  99 => 48,  94 => 46,  90 => 45,  84 => 41,  79 => 39,  74 => 38,  72 => 37,  68 => 36,  49 => 20,  43 => 17,  39 => 15,  37 => 12,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <link rel="icon" href="favicon.ico">*/
/* 	*/
/* 	{% block title %}*/
/* */
/* 	{%endblock%}*/
/* 	*/
/*     <!-- Bootstrap core CSS -->*/
/*     <link  rel="stylesheet" href="{{ asset('bundles/train/bootstrap/dist/css/bootstrap.min.css') }}">*/
/* */
/*     <!-- Custom styles for this template -->*/
/*     <link  rel="stylesheet" href="{{ asset('bundles/train/bootstrap/less/jumbotron-narrow.less') }}">*/
/* */
/* */
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*       <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*   </head>*/
/* */
/*   <body style="background-color:white;">*/
/*     <div class="container">*/
/*       <div class="header clearfix">*/
/*         <nav>*/
/*           <ul class="nav nav-pills pull-right">*/
/* */
/*             <li role="presentation" class="active"><a href="{{path('train_core_homepage')}}">Accueil</a></li>*/
/* 			{% if is_granted('ROLE_USER')%}*/
/* 			<li role="presentation"><a href="#">Connecté en tant que {{app.user.username|capitalize }}</a></li>	*/
/* 			<li role="presentation"><a href="{{path('logout')}}">Se déconnecter</a></li>		*/
/* 			{% endif %}*/
/* 			<li role="presentation"><a href="#">Comment ça fonctionne?</a></li>*/
/*             <li role="presentation"><a href="#">A propos</a></li>*/
/*           </ul>*/
/*         </nav>*/
/*         <h3 class="text-muted"><a href="{{path('train_core_homepage')}}">*/
/* 		<img src="{{ asset('bundles/train/bootstrap/pics/path2.png') }}" alt="Path" /></a></h3>*/
/*       </div>*/
/* 	{% block body%}*/
/* */
/* {% endblock %}*/
/*       <footer class="footer">*/
/*         <p>&copy; 2015 Slim&Théo, Ecole des Mines de Nantes</p>*/
/*       </footer>*/
/* */
/*     </div> <!-- /container -->*/
/* 	*/
/* 	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* 	<script src="{{ asset('bundles/train/bootstrap/dist/js/bootstrap.min.js') }}"></script>*/
/* */
/* */
/*   </body>*/
/*   */
/* </html>*/
/* */
