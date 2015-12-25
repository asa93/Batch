<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_f9ec80815ab144ef316911fc821d5be2d923ffca5234e4151833860805c685c2 extends Twig_Template
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
        $__internal_5be8bde036bee509d438454aae9c7af376fe8880575c7069c4675f1acc9c4ba2 = $this->env->getExtension("native_profiler");
        $__internal_5be8bde036bee509d438454aae9c7af376fe8880575c7069c4675f1acc9c4ba2->enter($__internal_5be8bde036bee509d438454aae9c7af376fe8880575c7069c4675f1acc9c4ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => $this->getContext($context, "exception"))));
        // line 3
        echo "*/
";
        
        $__internal_5be8bde036bee509d438454aae9c7af376fe8880575c7069c4675f1acc9c4ba2->leave($__internal_5be8bde036bee509d438454aae9c7af376fe8880575c7069c4675f1acc9c4ba2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
