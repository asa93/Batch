<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_1252307064f769399d991c72b755de510df5bcc74fd4591f1cb2c11f80c7d4a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3ab26a7374fea1d8c433841b5b54e7adec06269e98e72d68de0a37926cc1983 = $this->env->getExtension("native_profiler");
        $__internal_a3ab26a7374fea1d8c433841b5b54e7adec06269e98e72d68de0a37926cc1983->enter($__internal_a3ab26a7374fea1d8c433841b5b54e7adec06269e98e72d68de0a37926cc1983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3ab26a7374fea1d8c433841b5b54e7adec06269e98e72d68de0a37926cc1983->leave($__internal_a3ab26a7374fea1d8c433841b5b54e7adec06269e98e72d68de0a37926cc1983_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f98794b35c08b4bd370d53f038212f4661e4b857daa9a8498d819baf149950a9 = $this->env->getExtension("native_profiler");
        $__internal_f98794b35c08b4bd370d53f038212f4661e4b857daa9a8498d819baf149950a9->enter($__internal_f98794b35c08b4bd370d53f038212f4661e4b857daa9a8498d819baf149950a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_f98794b35c08b4bd370d53f038212f4661e4b857daa9a8498d819baf149950a9->leave($__internal_f98794b35c08b4bd370d53f038212f4661e4b857daa9a8498d819baf149950a9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_087a88f80503415cd4157c8f6ac12d0854ce8fb949b59dc3ff2ab80e0c46ba22 = $this->env->getExtension("native_profiler");
        $__internal_087a88f80503415cd4157c8f6ac12d0854ce8fb949b59dc3ff2ab80e0c46ba22->enter($__internal_087a88f80503415cd4157c8f6ac12d0854ce8fb949b59dc3ff2ab80e0c46ba22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_087a88f80503415cd4157c8f6ac12d0854ce8fb949b59dc3ff2ab80e0c46ba22->leave($__internal_087a88f80503415cd4157c8f6ac12d0854ce8fb949b59dc3ff2ab80e0c46ba22_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_da5947a45336b0dba6bf7122fbfc221d5129827e9478497a4bdc7de0a9ff0dc9 = $this->env->getExtension("native_profiler");
        $__internal_da5947a45336b0dba6bf7122fbfc221d5129827e9478497a4bdc7de0a9ff0dc9->enter($__internal_da5947a45336b0dba6bf7122fbfc221d5129827e9478497a4bdc7de0a9ff0dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "</div>
";
        
        $__internal_da5947a45336b0dba6bf7122fbfc221d5129827e9478497a4bdc7de0a9ff0dc9->leave($__internal_da5947a45336b0dba6bf7122fbfc221d5129827e9478497a4bdc7de0a9ff0dc9_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_9a8512737db2c2da40083791e13fe5a0e32e7070e1e442a98545b86746496347 = $this->env->getExtension("native_profiler");
        $__internal_9a8512737db2c2da40083791e13fe5a0e32e7070e1e442a98545b86746496347->enter($__internal_9a8512737db2c2da40083791e13fe5a0e32e7070e1e442a98545b86746496347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_9a8512737db2c2da40083791e13fe5a0e32e7070e1e442a98545b86746496347->leave($__internal_9a8512737db2c2da40083791e13fe5a0e32e7070e1e442a98545b86746496347_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
