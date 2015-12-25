<?php

/* TrainUserBundle:Default:login.html.twig */
class __TwigTemplate_649394de99a371f37c45f2df7b90c25abb94e6049befe8e344b76e75f9ca0c95 extends Twig_Template
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
        $__internal_80833d9a5e83b144600ae1862d499e426970de1bbc62d777a4108341046d6627 = $this->env->getExtension("native_profiler");
        $__internal_80833d9a5e83b144600ae1862d499e426970de1bbc62d777a4108341046d6627->enter($__internal_80833d9a5e83b144600ae1862d499e426970de1bbc62d777a4108341046d6627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrainUserBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80833d9a5e83b144600ae1862d499e426970de1bbc62d777a4108341046d6627->leave($__internal_80833d9a5e83b144600ae1862d499e426970de1bbc62d777a4108341046d6627_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c782057114c9fdac56681237053385822760bc6d2f41f32a0467ef1973cdb37e = $this->env->getExtension("native_profiler");
        $__internal_c782057114c9fdac56681237053385822760bc6d2f41f32a0467ef1973cdb37e->enter($__internal_c782057114c9fdac56681237053385822760bc6d2f41f32a0467ef1973cdb37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c782057114c9fdac56681237053385822760bc6d2f41f32a0467ef1973cdb37e->leave($__internal_c782057114c9fdac56681237053385822760bc6d2f41f32a0467ef1973cdb37e_prof);

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
