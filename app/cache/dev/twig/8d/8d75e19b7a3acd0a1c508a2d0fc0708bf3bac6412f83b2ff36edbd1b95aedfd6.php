<?php

/* TrainUserBundle:Default:login.html.twig */
class __TwigTemplate_1020f56e51af3e151093d40c56b417b9215a45b9365f2eecc8e473ee649ab4fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TrainCoreBundle:Default:main-layout.html.twig", "TrainUserBundle:Default:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TrainCoreBundle:Default:main-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dd424a16a095cd6549aee5090a508cddc205feab72f7813b2077868b8d8b015 = $this->env->getExtension("native_profiler");
        $__internal_8dd424a16a095cd6549aee5090a508cddc205feab72f7813b2077868b8d8b015->enter($__internal_8dd424a16a095cd6549aee5090a508cddc205feab72f7813b2077868b8d8b015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrainUserBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dd424a16a095cd6549aee5090a508cddc205feab72f7813b2077868b8d8b015->leave($__internal_8dd424a16a095cd6549aee5090a508cddc205feab72f7813b2077868b8d8b015_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc3ebd510dcba9fdd0d74d1f01fd6846b038fb7e37035b344997b505b9827d48 = $this->env->getExtension("native_profiler");
        $__internal_bc3ebd510dcba9fdd0d74d1f01fd6846b038fb7e37035b344997b505b9827d48->enter($__internal_bc3ebd510dcba9fdd0d74d1f01fd6846b038fb7e37035b344997b505b9827d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 9
        echo "
  ";
        // line 11
        echo "  
 \t<div class=\"row\">
    <div class=\"container col-md-offset-4 col-md-4\">
\t\t 
  
  <form class=\"form-signin\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
          <h2 class=\"form-signin-heading\">Connexion Admin Panel</h2>
        <label for=\"username\" class=\"sr-only\">Login</label>
    <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" placeholder=\"login\" />

\t<br />
        <label for=\"password\" class=\"sr-only\">Password</label>
    <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"password\"/>
<br />
        
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Connexion</button>
\t
\t</div>
\t</div>
  </form>

";
        
        $__internal_bc3ebd510dcba9fdd0d74d1f01fd6846b038fb7e37035b344997b505b9827d48->leave($__internal_bc3ebd510dcba9fdd0d74d1f01fd6846b038fb7e37035b344997b505b9827d48_prof);

    }

    public function getTemplateName()
    {
        return "TrainUserBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  55 => 11,  52 => 9,  46 => 7,  43 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "TrainCoreBundle:Default:main-layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*   {# S'il y a une erreur, on l'affiche dans un joli cadre #}*/
/*   {% if error %}*/
/*     <div class="alert alert-danger">{{ error.message }}</div>*/
/*   {% endif %}*/
/* */
/*   {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}*/
/*   */
/*  	<div class="row">*/
/*     <div class="container col-md-offset-4 col-md-4">*/
/* 		 */
/*   */
/*   <form class="form-signin" action="{{ path('login_check') }}" method="post">*/
/*           <h2 class="form-signin-heading">Connexion Admin Panel</h2>*/
/*         <label for="username" class="sr-only">Login</label>*/
/*     <input type="text" id="username" name="_username" class="form-control" placeholder="login" />*/
/* */
/* 	<br />*/
/*         <label for="password" class="sr-only">Password</label>*/
/*     <input type="password" id="password" name="_password" class="form-control" placeholder="password"/>*/
/* <br />*/
/*         */
/*         <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>*/
/* 	*/
/* 	</div>*/
/* 	</div>*/
/*   </form>*/
/* */
/* {% endblock %}*/
