<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_dd4f109e90e2d4477e1eb11ded7fb103b7f58bc9cd9920bc57debfed97d2c85a extends Twig_Template
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
        $__internal_3580682e713ceefb96444d1d6079b8239560f94794eb8c8f87b0d08642119965 = $this->env->getExtension("native_profiler");
        $__internal_3580682e713ceefb96444d1d6079b8239560f94794eb8c8f87b0d08642119965->enter($__internal_3580682e713ceefb96444d1d6079b8239560f94794eb8c8f87b0d08642119965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3580682e713ceefb96444d1d6079b8239560f94794eb8c8f87b0d08642119965->leave($__internal_3580682e713ceefb96444d1d6079b8239560f94794eb8c8f87b0d08642119965_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
