<?php

/* TrainCoreBundle:Default:main-layout.html.twig */
class __TwigTemplate_bee50e08081c0fa8447068320dc9a82861031d8ba08a95b1af925f983b985cbd extends Twig_Template
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
        $__internal_9c621437edd2f6f59ae8d070fd973503571fd9a58102fa309795535c01f42141 = $this->env->getExtension("native_profiler");
        $__internal_9c621437edd2f6f59ae8d070fd973503571fd9a58102fa309795535c01f42141->enter($__internal_9c621437edd2f6f59ae8d070fd973503571fd9a58102fa309795535c01f42141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrainCoreBundle:Default:main-layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/train/pics/favicon.png"), "html", null, true);
        echo "\" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"favicon.ico\">
\t
\t";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        // line 16
        echo "\t
    <!-- Bootstrap core CSS -->
    <link  rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/train/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">

    <!-- Custom styles for this template -->
    <link  rel=\"stylesheet\" href=\"";
        // line 21
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
        // line 37
        echo $this->env->getExtension('routing')->getPath("train_core_homepage");
        echo "\">Accueil</a></li>
\t\t\t";
        // line 38
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 39
            echo "\t\t\t<li role=\"presentation\"><a href=\"#\">Connecté en tant que ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
            echo "</a></li>\t
\t\t\t<li role=\"presentation\"><a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Se déconnecter</a></li>\t\t
\t\t\t";
        }
        // line 42
        echo "\t\t\t<li role=\"presentation\"><a href=\"#\">Comment ça fonctionne?</a></li>
            <li role=\"presentation\"><a href=\"#\">A propos</a></li>
          </ul>
        </nav>
        <h3 class=\"text-muted\"><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("train_core_homepage");
        echo "\">
\t\t<img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/train/bootstrap/pics/path2.png"), "html", null, true);
        echo "\" alt=\"Path\" /></a></h3>
      </div>
\t";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "      <footer class=\"footer\">
        <p>&copy; 2015 Slim&Théo, Ecole des Mines de Nantes</p>
      </footer>

    </div> <!-- /container -->
\t
\t <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
\t<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/train/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>


  </body>
  
</html>
";
        
        $__internal_9c621437edd2f6f59ae8d070fd973503571fd9a58102fa309795535c01f42141->leave($__internal_9c621437edd2f6f59ae8d070fd973503571fd9a58102fa309795535c01f42141_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_c22ec55896acc0fbba7148ec197cdd2a30719f9de3263746d2b8794805e42e0a = $this->env->getExtension("native_profiler");
        $__internal_c22ec55896acc0fbba7148ec197cdd2a30719f9de3263746d2b8794805e42e0a->enter($__internal_c22ec55896acc0fbba7148ec197cdd2a30719f9de3263746d2b8794805e42e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 14
        echo "
\t";
        
        $__internal_c22ec55896acc0fbba7148ec197cdd2a30719f9de3263746d2b8794805e42e0a->leave($__internal_c22ec55896acc0fbba7148ec197cdd2a30719f9de3263746d2b8794805e42e0a_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a03c71ad94e92dfe1cb0d9afaaaae3ef2a3d0e8278137cb354c2dccaa6aeea4 = $this->env->getExtension("native_profiler");
        $__internal_5a03c71ad94e92dfe1cb0d9afaaaae3ef2a3d0e8278137cb354c2dccaa6aeea4->enter($__internal_5a03c71ad94e92dfe1cb0d9afaaaae3ef2a3d0e8278137cb354c2dccaa6aeea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "
";
        
        $__internal_5a03c71ad94e92dfe1cb0d9afaaaae3ef2a3d0e8278137cb354c2dccaa6aeea4->leave($__internal_5a03c71ad94e92dfe1cb0d9afaaaae3ef2a3d0e8278137cb354c2dccaa6aeea4_prof);

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
        return array (  148 => 50,  142 => 49,  134 => 14,  128 => 13,  114 => 59,  105 => 52,  103 => 49,  98 => 47,  94 => 46,  88 => 42,  83 => 40,  78 => 39,  76 => 38,  72 => 37,  53 => 21,  47 => 18,  43 => 16,  41 => 13,  32 => 7,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* 	<link rel="icon" type="image/png" href="{{asset('bundles/train/pics/favicon.png')}}" />*/
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
