<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_efc2da534107b690461fa448791e30b84880eb403b40661aa1fc7e7f2847475d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:memory.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97a5c2efd4c65b6859b20f5edc45551a285c60b80255f6a6567dc015e9778260 = $this->env->getExtension("native_profiler");
        $__internal_97a5c2efd4c65b6859b20f5edc45551a285c60b80255f6a6567dc015e9778260->enter($__internal_97a5c2efd4c65b6859b20f5edc45551a285c60b80255f6a6567dc015e9778260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:memory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97a5c2efd4c65b6859b20f5edc45551a285c60b80255f6a6567dc015e9778260->leave($__internal_97a5c2efd4c65b6859b20f5edc45551a285c60b80255f6a6567dc015e9778260_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_49bc40df63adbc91273f1b8d69d6517bc35f1b4f745f8a1596c9cbe401a48cae = $this->env->getExtension("native_profiler");
        $__internal_49bc40df63adbc91273f1b8d69d6517bc35f1b4f745f8a1596c9cbe401a48cae->enter($__internal_49bc40df63adbc91273f1b8d69d6517bc35f1b4f745f8a1596c9cbe401a48cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <svg width=\"13\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 13 28\" enable-background=\"new 0 0 13 28\" xml:space=\"preserve\"><g><rect x=\"3\" y=\"11\" fill=\"#BCBCBB\" width=\"7\" height=\"9\"/></g><g><path fill=\"#3F3F3F\" d=\"M11 6V21H2V6H0V22c0 0.6 0.4 1 1 1h11c0.6 0 1-0.4 1-1V6H11z\"/></g></svg>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo " / ";
        echo ((($this->getAttribute($this->getContext($context, "collector"), "memoryLimit", array()) ==  -1)) ? ("&infin;") : (twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memoryLimit", array()) / 1024) / 1024)))));
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "WebProfilerBundle:Collector:memory.html.twig", 16)->display(array_merge($context, array("link" => false)));
        
        $__internal_49bc40df63adbc91273f1b8d69d6517bc35f1b4f745f8a1596c9cbe401a48cae->leave($__internal_49bc40df63adbc91273f1b8d69d6517bc35f1b4f745f8a1596c9cbe401a48cae_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  60 => 13,  56 => 11,  53 => 10,  47 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*         <span>*/
/*             <svg width="13" height="28" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 13 28" enable-background="new 0 0 13 28" xml:space="preserve"><g><rect x="3" y="11" fill="#BCBCBB" width="7" height="9"/></g><g><path fill="#3F3F3F" d="M11 6V21H2V6H0V22c0 0.6 0.4 1 1 1h11c0.6 0 1-0.4 1-1V6H11z"/></g></svg>*/
/*             <span>{{ '%.1f'|format(collector.memory / 1024 / 1024) }} MB</span>*/
/*         </span>*/
/*     {% endset %}*/
/*     {% set text %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Memory usage</b>*/
/*             <span>{{ '%.1f'|format(collector.memory / 1024 / 1024) }} / {{ collector.memoryLimit == -1 ? '&infin;' : '%.1f'|format(collector.memoryLimit / 1024 / 1024)|escape }} MB</span>*/
/*         </div>*/
/*     {% endset %}*/
/*     {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': false } %}*/
/* {% endblock %}*/
/* */
