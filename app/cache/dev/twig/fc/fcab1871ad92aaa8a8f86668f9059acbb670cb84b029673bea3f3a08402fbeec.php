<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_650cb44c4613285cd3cef966245b5705e16a3c1365b54e243ed0ca0c6bee98ce extends Twig_Template
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
        $__internal_b49f97610d391aae9394846e64122bcf8dd34a4e0441af3588fec9febbe6d951 = $this->env->getExtension("native_profiler");
        $__internal_b49f97610d391aae9394846e64122bcf8dd34a4e0441af3588fec9febbe6d951->enter($__internal_b49f97610d391aae9394846e64122bcf8dd34a4e0441af3588fec9febbe6d951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "css", null, true);
        echo "

*/
";
        
        $__internal_b49f97610d391aae9394846e64122bcf8dd34a4e0441af3588fec9febbe6d951->leave($__internal_b49f97610d391aae9394846e64122bcf8dd34a4e0441af3588fec9febbe6d951_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
