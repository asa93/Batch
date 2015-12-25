<?php

/* TwigBundle:Exception:exception.txt.twig */
class __TwigTemplate_fbbf6bc4d7488c83bc0ee58be5bb51d016588080f36f7fe3d9718f4d14d97ba8 extends Twig_Template
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
        $__internal_8d9d6d25399a2344ecb7c833a7c4796b0fa5b4d4e151ac94021942fbaac48182 = $this->env->getExtension("native_profiler");
        $__internal_8d9d6d25399a2344ecb7c833a7c4796b0fa5b4d4e151ac94021942fbaac48182->enter($__internal_8d9d6d25399a2344ecb7c833a7c4796b0fa5b4d4e151ac94021942fbaac48182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.txt.twig"));

        // line 1
        echo "[exception] ";
        echo (((($this->getContext($context, "status_code") . " | ") . $this->getContext($context, "status_text")) . " | ") . $this->getAttribute($this->getContext($context, "exception"), "class", array()));
        echo "
[message] ";
        // line 2
        echo $this->getAttribute($this->getContext($context, "exception"), "message", array());
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "exception"), "toarray", array()));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 4
            echo "[";
            echo ($context["i"] + 1);
            echo "] ";
            echo $this->getAttribute($context["e"], "class", array());
            echo ": ";
            echo $this->getAttribute($context["e"], "message", array());
            echo "
";
            // line 5
            $this->loadTemplate("TwigBundle:Exception:traces.txt.twig", "TwigBundle:Exception:exception.txt.twig", 5)->display(array("exception" => $context["e"]));
            // line 6
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8d9d6d25399a2344ecb7c833a7c4796b0fa5b4d4e151ac94021942fbaac48182->leave($__internal_8d9d6d25399a2344ecb7c833a7c4796b0fa5b4d4e151ac94021942fbaac48182_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  44 => 5,  35 => 4,  31 => 3,  27 => 2,  22 => 1,);
    }
}
/* [exception] {{ status_code ~ ' | ' ~ status_text ~ ' | ' ~ exception.class }}*/
/* [message] {{ exception.message }}*/
/* {% for i, e in exception.toarray %}*/
/* [{{ i + 1 }}] {{ e.class }}: {{ e.message }}*/
/* {% include 'TwigBundle:Exception:traces.txt.twig' with { 'exception': e } only %}*/
/* */
/* {% endfor %}*/
/* */
