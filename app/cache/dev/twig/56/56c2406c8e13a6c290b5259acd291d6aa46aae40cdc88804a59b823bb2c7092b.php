<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_ce16a70c5dc517bf58c58f1279beb75d701c89a65d7e6000bd3f3f6d687fcf4c extends Twig_Template
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
        $__internal_564dd207bb51dbbae42d6240f39b190d5882065fed74c3167efb1fd1435d2829 = $this->env->getExtension("native_profiler");
        $__internal_564dd207bb51dbbae42d6240f39b190d5882065fed74c3167efb1fd1435d2829->enter($__internal_564dd207bb51dbbae42d6240f39b190d5882065fed74c3167efb1fd1435d2829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => $this->getContext($context, "status_code"), "message" => $this->getContext($context, "status_text"))));
        echo "
";
        
        $__internal_564dd207bb51dbbae42d6240f39b190d5882065fed74c3167efb1fd1435d2829->leave($__internal_564dd207bb51dbbae42d6240f39b190d5882065fed74c3167efb1fd1435d2829_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
