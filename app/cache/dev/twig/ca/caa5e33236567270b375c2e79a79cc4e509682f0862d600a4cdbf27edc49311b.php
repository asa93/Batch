<?php

/* :default:index.html.twig */
class __TwigTemplate_f3fadb391722de2c79dd235af89b5ec65225d4bd22d75cab362d166d2e220dbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8c3f9b64db8b455b214adf3614b637ef7223131f76a08d67517b88dde4829ac = $this->env->getExtension("native_profiler");
        $__internal_e8c3f9b64db8b455b214adf3614b637ef7223131f76a08d67517b88dde4829ac->enter($__internal_e8c3f9b64db8b455b214adf3614b637ef7223131f76a08d67517b88dde4829ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8c3f9b64db8b455b214adf3614b637ef7223131f76a08d67517b88dde4829ac->leave($__internal_e8c3f9b64db8b455b214adf3614b637ef7223131f76a08d67517b88dde4829ac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f79e20745b9d2eff8a34280957c81840f9c7bc45797e0c6529fdefb29e98c46b = $this->env->getExtension("native_profiler");
        $__internal_f79e20745b9d2eff8a34280957c81840f9c7bc45797e0c6529fdefb29e98c46b->enter($__internal_f79e20745b9d2eff8a34280957c81840f9c7bc45797e0c6529fdefb29e98c46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Homepage.
";
        
        $__internal_f79e20745b9d2eff8a34280957c81840f9c7bc45797e0c6529fdefb29e98c46b->leave($__internal_f79e20745b9d2eff8a34280957c81840f9c7bc45797e0c6529fdefb29e98c46b_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     Homepage.*/
/* {% endblock %}*/
/* */
