<?php

/* SensioDistributionBundle:Configurator:final.html.twig */
class __TwigTemplate_b70fb750ac4d139702e0091cda703fd44cae758d618c725725401dfc307e2382 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "SensioDistributionBundle:Configurator:final.html.twig", 1);
        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1566bc802b9794f6e4532b7425656e827414c0ca3490aa538d0ad1e2157c884 = $this->env->getExtension("native_profiler");
        $__internal_d1566bc802b9794f6e4532b7425656e827414c0ca3490aa538d0ad1e2157c884->enter($__internal_d1566bc802b9794f6e4532b7425656e827414c0ca3490aa538d0ad1e2157c884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:final.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1566bc802b9794f6e4532b7425656e827414c0ca3490aa538d0ad1e2157c884->leave($__internal_d1566bc802b9794f6e4532b7425656e827414c0ca3490aa538d0ad1e2157c884_prof);

    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        $__internal_7cbc2221fe054f430b3d3cf88b27035230a70ca1504b4d1acd1ebdd6a00d1291 = $this->env->getExtension("native_profiler");
        $__internal_7cbc2221fe054f430b3d3cf88b27035230a70ca1504b4d1acd1ebdd6a00d1291->enter($__internal_7cbc2221fe054f430b3d3cf88b27035230a70ca1504b4d1acd1ebdd6a00d1291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_class"));

        echo "config_done";
        
        $__internal_7cbc2221fe054f430b3d3cf88b27035230a70ca1504b4d1acd1ebdd6a00d1291->leave($__internal_7cbc2221fe054f430b3d3cf88b27035230a70ca1504b4d1acd1ebdd6a00d1291_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_a6a9fd9dc28e8cbaa67504bf4861cd9a9afd10b88372017ccc4d8896fd3ed883 = $this->env->getExtension("native_profiler");
        $__internal_a6a9fd9dc28e8cbaa67504bf4861cd9a9afd10b88372017ccc4d8896fd3ed883->enter($__internal_a6a9fd9dc28e8cbaa67504bf4861cd9a9afd10b88372017ccc4d8896fd3ed883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if ($this->getContext($context, "is_writable")) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if ($this->getContext($context, "is_writable")) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, $this->getContext($context, "yml_path"), "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, $this->getContext($context, "yml_path"), "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getContext($context, "parameters"), "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if ($this->getContext($context, "welcome_url")) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getContext($context, "welcome_url"), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";
        
        $__internal_a6a9fd9dc28e8cbaa67504bf4861cd9a9afd10b88372017ccc4d8896fd3ed883->leave($__internal_a6a9fd9dc28e8cbaa67504bf4861cd9a9afd10b88372017ccc4d8896fd3ed883_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  100 => 26,  97 => 25,  95 => 24,  90 => 22,  85 => 19,  79 => 17,  73 => 15,  71 => 14,  67 => 12,  63 => 10,  59 => 8,  57 => 7,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "SensioDistributionBundle::Configurator/layout.html.twig" %}*/
/* */
/* {% block content_class %}config_done{% endblock %}*/
/* {% block content %}*/
/*     <div class="step">*/
/*         <h1>Well done!</h1>*/
/*         {% if is_writable %}*/
/*         <h2>Your distribution is configured!</h2>*/
/*         {% else %}*/
/*         <h2 class="configure-error">Your distribution is almost configured but...</h2>*/
/*         {% endif %}*/
/*         <h3>*/
/*             <span>*/
/*                 {% if is_writable %}*/
/*                     Your parameters.yml file has been overwritten with these parameters (in <em>{{ yml_path }}</em>):*/
/*                 {% else %}*/
/*                     Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>{{ yml_path }}</em>:*/
/*                 {% endif %}*/
/*             </span>*/
/*         </h3>*/
/* */
/*         <textarea class="symfony-configuration">{{ parameters }}</textarea>*/
/* */
/*         {% if welcome_url %}*/
/*             <ul>*/
/*                 <li><a href="{{ welcome_url }}">Go to the Welcome page</a></li>*/
/*             </ul>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
