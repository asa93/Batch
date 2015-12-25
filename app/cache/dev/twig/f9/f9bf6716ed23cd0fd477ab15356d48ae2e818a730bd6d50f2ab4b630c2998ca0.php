<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_a3e565a3228f8028df1204355f44439c9f7a27809053565562d3425695e9156f extends Twig_Template
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
        $__internal_93e64d949478d135cd2529e4a9046a222fe32837a32ec27174729ccf994ebcbc = $this->env->getExtension("native_profiler");
        $__internal_93e64d949478d135cd2529e4a9046a222fe32837a32ec27174729ccf994ebcbc->enter($__internal_93e64d949478d135cd2529e4a9046a222fe32837a32ec27174729ccf994ebcbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => $this->getContext($context, "status_code"), "message" => $this->getContext($context, "status_text"), "exception" => $this->getAttribute($this->getContext($context, "exception"), "toarray", array()))));
        echo "
";
        
        $__internal_93e64d949478d135cd2529e4a9046a222fe32837a32ec27174729ccf994ebcbc->leave($__internal_93e64d949478d135cd2529e4a9046a222fe32837a32ec27174729ccf994ebcbc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
