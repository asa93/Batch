<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_d0578b7294ef0c78cd56113cf202c1de653d3e3577697a1d3c78e6d8191f3a18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "SensioDistributionBundle:Configurator/Step:doctrine.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e50f5ee59fef5ca7f48bfe6530ffbf19174958f24050fb868abe85c179fc587 = $this->env->getExtension("native_profiler");
        $__internal_0e50f5ee59fef5ca7f48bfe6530ffbf19174958f24050fb868abe85c179fc587->enter($__internal_0e50f5ee59fef5ca7f48bfe6530ffbf19174958f24050fb868abe85c179fc587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator/Step:doctrine.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e50f5ee59fef5ca7f48bfe6530ffbf19174958f24050fb868abe85c179fc587->leave($__internal_0e50f5ee59fef5ca7f48bfe6530ffbf19174958f24050fb868abe85c179fc587_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_89f5c432a0ff173c042d45218185033416bdbcf0473b6aaddc588e940d04866f = $this->env->getExtension("native_profiler");
        $__internal_89f5c432a0ff173c042d45218185033416bdbcf0473b6aaddc588e940d04866f->enter($__internal_89f5c432a0ff173c042d45218185033416bdbcf0473b6aaddc588e940d04866f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Configure database";
        
        $__internal_89f5c432a0ff173c042d45218185033416bdbcf0473b6aaddc588e940d04866f->leave($__internal_89f5c432a0ff173c042d45218185033416bdbcf0473b6aaddc588e940d04866f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_f4f88bdd4f6c0cd30e9833f1ba57582c95a1615756725faace839a3d05264f6a = $this->env->getExtension("native_profiler");
        $__internal_f4f88bdd4f6c0cd30e9833f1ba57582c95a1615756725faace839a3d05264f6a->enter($__internal_f4f88bdd4f6c0cd30e9833f1ba57582c95a1615756725faace839a3d05264f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig", "SensioDistributionBundle:Configurator/Step:doctrine.html.twig", 9)->display(array_merge($context, array("index" => $this->getContext($context, "index"), "count" => $this->getContext($context, "count"))));
        // line 10
        echo "
        <h1>Configure your Database</h1>
        <p>If your website needs a database connection, please configure it here.</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => $this->getContext($context, "index"))), "html", null, true);
        echo "\" method=\"POST\">
            <div class=\"symfony-form-column\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "driver", array()), 'row');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "host", array()), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name", array()), 'row');
        echo "
            </div>
            <div class=\"symfony-form-column\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "user", array()), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "password", array()), 'row');
        echo "
            </div>

            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>
        </form>
    </div>
";
        
        $__internal_f4f88bdd4f6c0cd30e9833f1ba57582c95a1615756725faace839a3d05264f6a->leave($__internal_f4f88bdd4f6c0cd30e9833f1ba57582c95a1615756725faace839a3d05264f6a_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:doctrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 28,  97 => 25,  93 => 24,  87 => 21,  83 => 20,  79 => 19,  74 => 17,  69 => 15,  62 => 10,  60 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "SensioDistributionBundle::Configurator/layout.html.twig" %}*/
/* */
/* {% block title %}Symfony - Configure database{% endblock %}*/
/* */
/* {% block content %}*/
/*     {% form_theme form "SensioDistributionBundle::Configurator/form.html.twig" %}*/
/* */
/*     <div class="step">*/
/*         {% include "SensioDistributionBundle::Configurator/steps.html.twig" with { "index": index, "count": count } %}*/
/* */
/*         <h1>Configure your Database</h1>*/
/*         <p>If your website needs a database connection, please configure it here.</p>*/
/* */
/*         <div class="symfony-form-errors">*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*         <form action="{{ path('_configurator_step', { 'index': index }) }}" method="POST">*/
/*             <div class="symfony-form-column">*/
/*                 {{ form_row(form.driver) }}*/
/*                 {{ form_row(form.host) }}*/
/*                 {{ form_row(form.name) }}*/
/*             </div>*/
/*             <div class="symfony-form-column">*/
/*                 {{ form_row(form.user) }}*/
/*                 {{ form_row(form.password) }}*/
/*             </div>*/
/* */
/*             {{ form_rest(form) }}*/
/* */
/*             <div class="symfony-form-footer">*/
/*                 <p>*/
/*                     <button type="submit" class="sf-button">*/
/*                         <span class="border-l">*/
/*                             <span class="border-r">*/
/*                                 <span class="btn-bg">NEXT STEP</span>*/
/*                             </span>*/
/*                         </span>*/
/*                     </button>*/
/*                 </p>*/
/*                 <p>* mandatory fields</p>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
/* */
