<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f170d074cd38c3b82cb71cdd3d7120738e32a3b866de8b38b649ecd6eb7a5293 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e025701c5181a09927b4ef60d666e3bda78fa86f2301973616e3df72e148e20 = $this->env->getExtension("native_profiler");
        $__internal_1e025701c5181a09927b4ef60d666e3bda78fa86f2301973616e3df72e148e20->enter($__internal_1e025701c5181a09927b4ef60d666e3bda78fa86f2301973616e3df72e148e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1e025701c5181a09927b4ef60d666e3bda78fa86f2301973616e3df72e148e20->leave($__internal_1e025701c5181a09927b4ef60d666e3bda78fa86f2301973616e3df72e148e20_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_22b297ab5785a1d4b60f8b02102a4e502f04808adaf4445d43a31f4be57703f6 = $this->env->getExtension("native_profiler");
        $__internal_22b297ab5785a1d4b60f8b02102a4e502f04808adaf4445d43a31f4be57703f6->enter($__internal_22b297ab5785a1d4b60f8b02102a4e502f04808adaf4445d43a31f4be57703f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_22b297ab5785a1d4b60f8b02102a4e502f04808adaf4445d43a31f4be57703f6->leave($__internal_22b297ab5785a1d4b60f8b02102a4e502f04808adaf4445d43a31f4be57703f6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
