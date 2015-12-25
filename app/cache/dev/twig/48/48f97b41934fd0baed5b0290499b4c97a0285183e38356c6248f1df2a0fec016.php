<?php

/* BDEShowcaseBundle:Default:layout-body.html.twig */
class __TwigTemplate_9272f22ef370309225b64ce4226e2eeed907ddc7cee3ede5cd11204a8fed9ced extends Twig_Template
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
        $__internal_00fac6772d0e39c29ca1cb6b50a7f12efe8630c36d5b832f8ccbc7ce30d591f4 = $this->env->getExtension("native_profiler");
        $__internal_00fac6772d0e39c29ca1cb6b50a7f12efe8630c36d5b832f8ccbc7ce30d591f4->enter($__internal_00fac6772d0e39c29ca1cb6b50a7f12efe8630c36d5b832f8ccbc7ce30d591f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDEShowcaseBundle:Default:layout-body.html.twig"));

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
        $this->loadTemplate("BDEShowcaseBundle:Default:header.html.twig", "BDEShowcaseBundle:Default:layout-body.html.twig", 18)->display($context);
        // line 19
        echo "\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "
    
    </body>
</html>";
        
        $__internal_00fac6772d0e39c29ca1cb6b50a7f12efe8630c36d5b832f8ccbc7ce30d591f4->leave($__internal_00fac6772d0e39c29ca1cb6b50a7f12efe8630c36d5b832f8ccbc7ce30d591f4_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_50e7c214f6f590a8907d811ea4d3995ab92fada74d29f701c3e66dc5c4fe6f95 = $this->env->getExtension("native_profiler");
        $__internal_50e7c214f6f590a8907d811ea4d3995ab92fada74d29f701c3e66dc5c4fe6f95->enter($__internal_50e7c214f6f590a8907d811ea4d3995ab92fada74d29f701c3e66dc5c4fe6f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "\t\t
\t\t";
        
        $__internal_50e7c214f6f590a8907d811ea4d3995ab92fada74d29f701c3e66dc5c4fe6f95->leave($__internal_50e7c214f6f590a8907d811ea4d3995ab92fada74d29f701c3e66dc5c4fe6f95_prof);

    }

    public function getTemplateName()
    {
        return "BDEShowcaseBundle:Default:layout-body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  69 => 19,  59 => 22,  56 => 19,  54 => 18,  45 => 12,  40 => 10,  36 => 9,  32 => 8,  23 => 1,);
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
/*     */
/*     </body>*/
/* </html>*/
