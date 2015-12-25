<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_0b5ebc564d3f3d5bc2cc2e7ab5da097bd678d3bcebee06842415409a4cd30df6 extends Twig_Template
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
        $__internal_a744503e205fee65e07e0ff2453e04fe5c8c114957bd4290e4e2e4e477594202 = $this->env->getExtension("native_profiler");
        $__internal_a744503e205fee65e07e0ff2453e04fe5c8c114957bd4290e4e2e4e477594202->enter($__internal_a744503e205fee65e07e0ff2453e04fe5c8c114957bd4290e4e2e4e477594202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => $this->getContext($context, "exception"))));
        
        $__internal_a744503e205fee65e07e0ff2453e04fe5c8c114957bd4290e4e2e4e477594202->leave($__internal_a744503e205fee65e07e0ff2453e04fe5c8c114957bd4290e4e2e4e477594202_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
