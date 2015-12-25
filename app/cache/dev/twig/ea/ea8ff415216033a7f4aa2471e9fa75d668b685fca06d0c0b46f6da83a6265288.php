<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_68996982390d3f8afa2fff7da8d12250cbe7c2404b0c661482f0048bf779fe51 extends Twig_Template
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
        $__internal_ac6e39ff0fad434bb2b824411d71d42f33d19b3db095e555bf56af4aebd0982b = $this->env->getExtension("native_profiler");
        $__internal_ac6e39ff0fad434bb2b824411d71d42f33d19b3db095e555bf56af4aebd0982b->enter($__internal_ac6e39ff0fad434bb2b824411d71d42f33d19b3db095e555bf56af4aebd0982b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => $this->getContext($context, "exception"))));
        
        $__internal_ac6e39ff0fad434bb2b824411d71d42f33d19b3db095e555bf56af4aebd0982b->leave($__internal_ac6e39ff0fad434bb2b824411d71d42f33d19b3db095e555bf56af4aebd0982b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
