<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_89ec37deef16c49242b44481bf38b36d99fe71e4cf7172cfda919837ef4cae22 extends Twig_Template
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
        $__internal_a22e1a7577f3ca254f862b52b98493d2541e83b5cfc6b1cb9f3d9b2af734c09c = $this->env->getExtension("native_profiler");
        $__internal_a22e1a7577f3ca254f862b52b98493d2541e83b5cfc6b1cb9f3d9b2af734c09c->enter($__internal_a22e1a7577f3ca254f862b52b98493d2541e83b5cfc6b1cb9f3d9b2af734c09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo "\" />
";
        
        $__internal_a22e1a7577f3ca254f862b52b98493d2541e83b5cfc6b1cb9f3d9b2af734c09c->leave($__internal_a22e1a7577f3ca254f862b52b98493d2541e83b5cfc6b1cb9f3d9b2af734c09c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
