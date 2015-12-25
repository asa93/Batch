<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_9ef186005fa91a66bcfdf220a198e24b8cec99a58a23733082a674ece4045786 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SensioDistributionBundle:Configurator:form.html.twig", 1);
        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96a2306eba6d589e13f1126b7dd3bec8886d94f42af62b533f7aeeb063e6e185 = $this->env->getExtension("native_profiler");
        $__internal_96a2306eba6d589e13f1126b7dd3bec8886d94f42af62b533f7aeeb063e6e185->enter($__internal_96a2306eba6d589e13f1126b7dd3bec8886d94f42af62b533f7aeeb063e6e185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96a2306eba6d589e13f1126b7dd3bec8886d94f42af62b533f7aeeb063e6e185->leave($__internal_96a2306eba6d589e13f1126b7dd3bec8886d94f42af62b533f7aeeb063e6e185_prof);

    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_2dcf2d6a16ca749e805e9c66c3cb92f7a4a11589b0aefecad67dde745439e053 = $this->env->getExtension("native_profiler");
        $__internal_2dcf2d6a16ca749e805e9c66c3cb92f7a4a11589b0aefecad67dde745439e053->enter($__internal_2dcf2d6a16ca749e805e9c66c3cb92f7a4a11589b0aefecad67dde745439e053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_2dcf2d6a16ca749e805e9c66c3cb92f7a4a11589b0aefecad67dde745439e053->leave($__internal_2dcf2d6a16ca749e805e9c66c3cb92f7a4a11589b0aefecad67dde745439e053_prof);

    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d9198bdef51a69b2746f9e807b12b1f2f9d5430ace9984f06f4905c2cf714846 = $this->env->getExtension("native_profiler");
        $__internal_d9198bdef51a69b2746f9e807b12b1f2f9d5430ace9984f06f4905c2cf714846->enter($__internal_d9198bdef51a69b2746f9e807b12b1f2f9d5430ace9984f06f4905c2cf714846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_d9198bdef51a69b2746f9e807b12b1f2f9d5430ace9984f06f4905c2cf714846->leave($__internal_d9198bdef51a69b2746f9e807b12b1f2f9d5430ace9984f06f4905c2cf714846_prof);

    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_075d5307095fc481bae4754946c579bed1769c32764fcd6e9b2202261b888c1c = $this->env->getExtension("native_profiler");
        $__internal_075d5307095fc481bae4754946c579bed1769c32764fcd6e9b2202261b888c1c->enter($__internal_075d5307095fc481bae4754946c579bed1769c32764fcd6e9b2202261b888c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 25
        echo "    ";
        if (twig_test_empty($this->getContext($context, "label"))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->humanize($this->getContext($context, "name"));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label")), "html", null, true);
        echo "
        ";
        // line 30
        if ($this->getContext($context, "required")) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
        
        $__internal_075d5307095fc481bae4754946c579bed1769c32764fcd6e9b2202261b888c1c->leave($__internal_075d5307095fc481bae4754946c579bed1769c32764fcd6e9b2202261b888c1c_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 33,  125 => 31,  123 => 30,  119 => 29,  114 => 28,  111 => 27,  108 => 26,  105 => 25,  99 => 24,  87 => 18,  82 => 16,  77 => 14,  74 => 13,  68 => 12,  54 => 8,  50 => 7,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "form_div_layout.html.twig" %}*/
/* */
/* {% block form_rows %}*/
/*     <div class="symfony-form-errors">*/
/*         {{ form_errors(form) }}*/
/*     </div>*/
/*     {% for child in form %}*/
/*         {{ form_row(child) }}*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
/* {% block form_row %}*/
/*     <div class="symfony-form-row">*/
/*         {{ form_label(form) }}*/
/*         <div class="symfony-form-field">*/
/*             {{ form_widget(form) }}*/
/*             <div class="symfony-form-errors">*/
/*                 {{ form_errors(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block form_label %}*/
/*     {% if label is empty %}*/
/*         {% set label = name|humanize %}*/
/*     {% endif %}*/
/*     <label for="{{ id }}">*/
/*         {{ label|trans }}*/
/*         {% if required %}*/
/*             <span class="symfony-form-required" title="This field is required">*</span>*/
/*         {% endif %}*/
/*     </label>*/
/* {% endblock %}*/
/* */
