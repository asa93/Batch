<?php

/* ::base.html.twig */
class __TwigTemplate_b172903af3a171ffea691a0a2984dbc0861d3128c3eb70a94fcd5f27cd631bd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1630237943fbe46d41f45537bf56f88a6dd2be7201dc3262f3b0ca19467a8765 = $this->env->getExtension("native_profiler");
        $__internal_1630237943fbe46d41f45537bf56f88a6dd2be7201dc3262f3b0ca19467a8765->enter($__internal_1630237943fbe46d41f45537bf56f88a6dd2be7201dc3262f3b0ca19467a8765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1630237943fbe46d41f45537bf56f88a6dd2be7201dc3262f3b0ca19467a8765->leave($__internal_1630237943fbe46d41f45537bf56f88a6dd2be7201dc3262f3b0ca19467a8765_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_641eef8a66a0698110ed1ff41646dcae4ffce10165f5359ae446ccecad74e51e = $this->env->getExtension("native_profiler");
        $__internal_641eef8a66a0698110ed1ff41646dcae4ffce10165f5359ae446ccecad74e51e->enter($__internal_641eef8a66a0698110ed1ff41646dcae4ffce10165f5359ae446ccecad74e51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_641eef8a66a0698110ed1ff41646dcae4ffce10165f5359ae446ccecad74e51e->leave($__internal_641eef8a66a0698110ed1ff41646dcae4ffce10165f5359ae446ccecad74e51e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1fd0c17d887a04e169b1eeac5287509d3d10062bc3b3985b672f4d551346da59 = $this->env->getExtension("native_profiler");
        $__internal_1fd0c17d887a04e169b1eeac5287509d3d10062bc3b3985b672f4d551346da59->enter($__internal_1fd0c17d887a04e169b1eeac5287509d3d10062bc3b3985b672f4d551346da59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1fd0c17d887a04e169b1eeac5287509d3d10062bc3b3985b672f4d551346da59->leave($__internal_1fd0c17d887a04e169b1eeac5287509d3d10062bc3b3985b672f4d551346da59_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_15d83f65ed24ae48f6fe67d9332ca3d0ebacba072cb7a62ac26b99ded9309651 = $this->env->getExtension("native_profiler");
        $__internal_15d83f65ed24ae48f6fe67d9332ca3d0ebacba072cb7a62ac26b99ded9309651->enter($__internal_15d83f65ed24ae48f6fe67d9332ca3d0ebacba072cb7a62ac26b99ded9309651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_15d83f65ed24ae48f6fe67d9332ca3d0ebacba072cb7a62ac26b99ded9309651->leave($__internal_15d83f65ed24ae48f6fe67d9332ca3d0ebacba072cb7a62ac26b99ded9309651_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0a6cd0ec8927228d9a9443cbf2a9566d17d23e98e6b8e6d583beda98249049e2 = $this->env->getExtension("native_profiler");
        $__internal_0a6cd0ec8927228d9a9443cbf2a9566d17d23e98e6b8e6d583beda98249049e2->enter($__internal_0a6cd0ec8927228d9a9443cbf2a9566d17d23e98e6b8e6d583beda98249049e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0a6cd0ec8927228d9a9443cbf2a9566d17d23e98e6b8e6d583beda98249049e2->leave($__internal_0a6cd0ec8927228d9a9443cbf2a9566d17d23e98e6b8e6d583beda98249049e2_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
