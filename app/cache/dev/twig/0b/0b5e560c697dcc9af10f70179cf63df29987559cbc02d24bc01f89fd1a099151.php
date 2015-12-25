<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_56dfff651874c6778777152ef03db025f30cd413a7644ce10d45d63734105d81 extends Twig_Template
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
        $__internal_743d292cc9d4e9310e6021b58911d8dea6cbac5052dc7b5b74d328ce2c109030 = $this->env->getExtension("native_profiler");
        $__internal_743d292cc9d4e9310e6021b58911d8dea6cbac5052dc7b5b74d328ce2c109030->enter($__internal_743d292cc9d4e9310e6021b58911d8dea6cbac5052dc7b5b74d328ce2c109030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "js", null, true);
        echo "

*/
";
        
        $__internal_743d292cc9d4e9310e6021b58911d8dea6cbac5052dc7b5b74d328ce2c109030->leave($__internal_743d292cc9d4e9310e6021b58911d8dea6cbac5052dc7b5b74d328ce2c109030_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
