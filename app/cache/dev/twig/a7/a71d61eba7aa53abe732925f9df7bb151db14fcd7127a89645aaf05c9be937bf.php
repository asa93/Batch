<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_dadbba39017806905ea7affdcd4df34638fba55bffb0fb0649e8cb1ffcdb3417 extends Twig_Template
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
        $__internal_2b6c5368b7e84e17532aad3e5af7b8bd129aea4a2a9d57b5eef74aa13a77b570 = $this->env->getExtension("native_profiler");
        $__internal_2b6c5368b7e84e17532aad3e5af7b8bd129aea4a2a9d57b5eef74aa13a77b570->enter($__internal_2b6c5368b7e84e17532aad3e5af7b8bd129aea4a2a9d57b5eef74aa13a77b570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2b6c5368b7e84e17532aad3e5af7b8bd129aea4a2a9d57b5eef74aa13a77b570->leave($__internal_2b6c5368b7e84e17532aad3e5af7b8bd129aea4a2a9d57b5eef74aa13a77b570_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
