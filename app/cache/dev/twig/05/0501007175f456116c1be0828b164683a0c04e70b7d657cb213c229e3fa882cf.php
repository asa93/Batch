<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_13b892f813177e716db5de4a31f4e8bcccc6a07230642e9c4b60b0d12bf04611 extends Twig_Template
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
        $__internal_df9de9431c9c7b21bb0539db7579e9066816ecac745102967fdd93bb9eb56ce4 = $this->env->getExtension("native_profiler");
        $__internal_df9de9431c9c7b21bb0539db7579e9066816ecac745102967fdd93bb9eb56ce4->enter($__internal_df9de9431c9c7b21bb0539db7579e9066816ecac745102967fdd93bb9eb56ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => $this->getContext($context, "exception"))));
        // line 3
        echo "*/
";
        
        $__internal_df9de9431c9c7b21bb0539db7579e9066816ecac745102967fdd93bb9eb56ce4->leave($__internal_df9de9431c9c7b21bb0539db7579e9066816ecac745102967fdd93bb9eb56ce4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
