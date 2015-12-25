<?php

/* BDEShowcaseBundle::main-layout.html.twig */
class __TwigTemplate_fd284d240b9ac7cced58708f911b953cc7c45660ff5c4eca936ef7b8d7ba9f5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99be50ed933539a58616cb1adce22467e0da6dd991638d7b69c5555c88d6ce04 = $this->env->getExtension("native_profiler");
        $__internal_99be50ed933539a58616cb1adce22467e0da6dd991638d7b69c5555c88d6ce04->enter($__internal_99be50ed933539a58616cb1adce22467e0da6dd991638d7b69c5555c88d6ce04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDEShowcaseBundle::main-layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>  
<html class=\"no-js\" lang=\"fr\" >
    <head>
        <meta charset=\"utf-8\" />
\t\t<script src=\"scripts/less.min.js\" type=\"text/javascript\" ></script>
\t\t
\t\t
\t\t<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/showcase/scripts/jquery-1.11.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/showcase/scripts/script.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/showcase/scripts/less.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t
\t\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/showcase/style.css"), "html", null, true);
        echo "\" />

        <title>Accueil</title>
    </head>

    <body>
\t ";
        // line 18
        $this->loadTemplate("BDEShowcaseBundle:Default:header.html.twig", "BDEShowcaseBundle::main-layout.html.twig", 18)->display($context);
        // line 19
        echo "\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "
    ";
        // line 23
        $this->loadTemplate("BDEShowcaseBundle:Default:footer.html.twig", "BDEShowcaseBundle::main-layout.html.twig", 23)->display($context);
        // line 24
        echo "    </body>
</html>";
        
        $__internal_99be50ed933539a58616cb1adce22467e0da6dd991638d7b69c5555c88d6ce04->leave($__internal_99be50ed933539a58616cb1adce22467e0da6dd991638d7b69c5555c88d6ce04_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_c51d52062329afbd9bd7ac17c646db775e904b7ff01c651e850aa7aa5d99cc83 = $this->env->getExtension("native_profiler");
        $__internal_c51d52062329afbd9bd7ac17c646db775e904b7ff01c651e850aa7aa5d99cc83->enter($__internal_c51d52062329afbd9bd7ac17c646db775e904b7ff01c651e850aa7aa5d99cc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "\t\t
\t\t";
        
        $__internal_c51d52062329afbd9bd7ac17c646db775e904b7ff01c651e850aa7aa5d99cc83->leave($__internal_c51d52062329afbd9bd7ac17c646db775e904b7ff01c651e850aa7aa5d99cc83_prof);

    }

    public function getTemplateName()
    {
        return "BDEShowcaseBundle::main-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  72 => 19,  64 => 24,  62 => 23,  59 => 22,  56 => 19,  54 => 18,  45 => 12,  40 => 10,  36 => 9,  32 => 8,  23 => 1,);
    }
}
/* <!DOCTYPE html>  */
/* <html class="no-js" lang="fr" >*/
/*     <head>*/
/*         <meta charset="utf-8" />*/
/* 		<script src="scripts/less.min.js" type="text/javascript" ></script>*/
/* 		*/
/* 		*/
/* 		<script src="{{ asset('bundles/showcase/scripts/jquery-1.11.2.js')}}" type="text/javascript"></script>*/
/* 		<script src="{{asset('bundles/showcase/scripts/script.js')}}" type="text/javascript"></script>*/
/* 		<script src="{{asset('bundles/showcase/scripts/less.min.js')}}" type="text/javascript"></script>*/
/* 		*/
/* 		<link rel="stylesheet" href="{{ asset('bundles/showcase/style.css') }}" />*/
/* */
/*         <title>Accueil</title>*/
/*     </head>*/
/* */
/*     <body>*/
/* 	 {% include 'BDEShowcaseBundle:Default:header.html.twig'%}*/
/* 		{%block body%}*/
/* 		*/
/* 		{%endblock %}*/
/* */
/*     {% include 'BDEShowcaseBundle:Default:footer.html.twig' %}*/
/*     </body>*/
/* </html>*/
