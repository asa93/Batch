<?php

/* TrainCoreBundle:Default:admin_connexion.html.twig */
class __TwigTemplate_9870d0342e4260dbb37a6ecc917effaff52600f1281402dffd6b31ee9cf3cf79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8461036f37c12ea6c05508ebd9ceb38015be027e30ed29a6935edacec208fdba = $this->env->getExtension("native_profiler");
        $__internal_8461036f37c12ea6c05508ebd9ceb38015be027e30ed29a6935edacec208fdba->enter($__internal_8461036f37c12ea6c05508ebd9ceb38015be027e30ed29a6935edacec208fdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrainCoreBundle:Default:admin_connexion.html.twig"));

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
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/train/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


    <!-- Custom styles for this template -->
    <link href=\"signin.css\" rel=\"stylesheet\">



  </head>

  <body>
\t<div class=\"row\">
    <div class=\"container col-md-offset-4 col-md-4\">
\t\t
      <form class=\"form-signin\" action=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("train_core_adminpanel");
        echo "\" method=\"post\">
        <h2 class=\"form-signin-heading\">Connexion Admin Panel</h2>
        <label for=\"inputPseudo\" class=\"sr-only\">Pseudo</label>
        <input type=\"text\" id=\"inputPseudo\" name=\"inputPseudo\" class=\"form-control\" placeholder=\"Pseudo\" required autofocus>
        <label for=\"inputPassword\" class=\"sr-only\">Password</label>
        <input type=\"password\" name=\"inputPassword\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
        <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\" value=\"remember-me\"> Remember me
          </label>
        </div>
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Connexion</button>
      </form>

    </div> <!-- /container -->
\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-4\">
\t\t";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["label"] => $context["flashes"]) {
            // line 49
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 50
                echo "\t\t";
                if (($context["label"] == "alert")) {
                    // line 51
                    echo "       <div class=\"alert alert-danger col-md-9\" role=\"alert\">";
                    echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                    echo " <br /></div>
\t   ";
                } elseif ((                // line 52
$context["label"] == "notice")) {
                    // line 53
                    echo "\t   <div class=\"alert alert-success col-md-9\" role=\"alert\">";
                    echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                    echo " <br /></div>
            ";
                }
                // line 55
                echo "     
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t
\t</div>
\t</div>

  </body>
</html>
";
        
        $__internal_8461036f37c12ea6c05508ebd9ceb38015be027e30ed29a6935edacec208fdba->leave($__internal_8461036f37c12ea6c05508ebd9ceb38015be027e30ed29a6935edacec208fdba_prof);

    }

    public function getTemplateName()
    {
        return "TrainCoreBundle:Default:admin_connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 58,  109 => 57,  102 => 55,  96 => 53,  94 => 52,  89 => 51,  86 => 50,  81 => 49,  77 => 48,  55 => 29,  38 => 15,  22 => 1,);
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
/*     <link rel="icon" href="../../favicon.ico">*/
/* */
/*     <title>Signin Template for Bootstrap</title>*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="{{ asset('bundles/train/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">*/
/* */
/* */
/*     <!-- Custom styles for this template -->*/
/*     <link href="signin.css" rel="stylesheet">*/
/* */
/* */
/* */
/*   </head>*/
/* */
/*   <body>*/
/* 	<div class="row">*/
/*     <div class="container col-md-offset-4 col-md-4">*/
/* 		*/
/*       <form class="form-signin" action="{{path('train_core_adminpanel')}}" method="post">*/
/*         <h2 class="form-signin-heading">Connexion Admin Panel</h2>*/
/*         <label for="inputPseudo" class="sr-only">Pseudo</label>*/
/*         <input type="text" id="inputPseudo" name="inputPseudo" class="form-control" placeholder="Pseudo" required autofocus>*/
/*         <label for="inputPassword" class="sr-only">Password</label>*/
/*         <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required>*/
/*         <div class="checkbox">*/
/*           <label>*/
/*             <input type="checkbox" value="remember-me"> Remember me*/
/*           </label>*/
/*         </div>*/
/*         <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>*/
/*       </form>*/
/* */
/*     </div> <!-- /container -->*/
/* 	</div>*/
/* */
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-4">*/
/* 		{% for label, flashes in app.session.flashbag.all %}*/
/*     {% for flash in flashes %}*/
/* 		{% if label =="alert"%}*/
/*        <div class="alert alert-danger col-md-9" role="alert">{{ flash }} <br /></div>*/
/* 	   {% elseif label =="notice"%}*/
/* 	   <div class="alert alert-success col-md-9" role="alert">{{ flash }} <br /></div>*/
/*             {% endif %}*/
/*      */
/*     {% endfor %}*/
/* 	{% endfor %}*/
/* 		*/
/* 	</div>*/
/* 	</div>*/
/* */
/*   </body>*/
/* </html>*/
/* */
