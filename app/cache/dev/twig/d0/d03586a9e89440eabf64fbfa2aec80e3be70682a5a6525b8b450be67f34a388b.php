<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_06aeb5ed53990de0acf7bdcc8e60f27f7db703d69e658eab18e818160aa71792 extends Twig_Template
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
        $__internal_2f73dedc8a900eb964ae70f60cc4fccd902b4c1693f78ad9d272e924cb1f50f4 = $this->env->getExtension("native_profiler");
        $__internal_2f73dedc8a900eb964ae70f60cc4fccd902b4c1693f78ad9d272e924cb1f50f4->enter($__internal_2f73dedc8a900eb964ae70f60cc4fccd902b4c1693f78ad9d272e924cb1f50f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo $this->getContext($context, "status_code");
        echo " ";
        echo $this->getContext($context, "status_text");
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_2f73dedc8a900eb964ae70f60cc4fccd902b4c1693f78ad9d272e924cb1f50f4->leave($__internal_2f73dedc8a900eb964ae70f60cc4fccd902b4c1693f78ad9d272e924cb1f50f4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
