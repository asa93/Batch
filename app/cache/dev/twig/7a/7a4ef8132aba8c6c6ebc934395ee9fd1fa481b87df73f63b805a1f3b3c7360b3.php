<?php

/* base.html.twig */
class __TwigTemplate_54fbff78a3248e9df47b5365bf86408ef175023088b661d499de7ba527323309 extends Twig_Template
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
        $__internal_7b7ec7830d50b6d923423f0b1840fcb8e5570aa865ae36b1d3ea2cb6919589f3 = $this->env->getExtension("native_profiler");
        $__internal_7b7ec7830d50b6d923423f0b1840fcb8e5570aa865ae36b1d3ea2cb6919589f3->enter($__internal_7b7ec7830d50b6d923423f0b1840fcb8e5570aa865ae36b1d3ea2cb6919589f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7b7ec7830d50b6d923423f0b1840fcb8e5570aa865ae36b1d3ea2cb6919589f3->leave($__internal_7b7ec7830d50b6d923423f0b1840fcb8e5570aa865ae36b1d3ea2cb6919589f3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5e661a465bc4b11630e7af303c34e110b936e0349a6b79cc5ed95a0d758d05e = $this->env->getExtension("native_profiler");
        $__internal_d5e661a465bc4b11630e7af303c34e110b936e0349a6b79cc5ed95a0d758d05e->enter($__internal_d5e661a465bc4b11630e7af303c34e110b936e0349a6b79cc5ed95a0d758d05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d5e661a465bc4b11630e7af303c34e110b936e0349a6b79cc5ed95a0d758d05e->leave($__internal_d5e661a465bc4b11630e7af303c34e110b936e0349a6b79cc5ed95a0d758d05e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_109df5ab3bd160c81e9ace3097be2f236161db9c7c65af9339ac4672e6c81a57 = $this->env->getExtension("native_profiler");
        $__internal_109df5ab3bd160c81e9ace3097be2f236161db9c7c65af9339ac4672e6c81a57->enter($__internal_109df5ab3bd160c81e9ace3097be2f236161db9c7c65af9339ac4672e6c81a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_109df5ab3bd160c81e9ace3097be2f236161db9c7c65af9339ac4672e6c81a57->leave($__internal_109df5ab3bd160c81e9ace3097be2f236161db9c7c65af9339ac4672e6c81a57_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_51de6c529ddac9d9ec1d6b798d7d19eef2885c5a0ba1f7acb325b436d0232855 = $this->env->getExtension("native_profiler");
        $__internal_51de6c529ddac9d9ec1d6b798d7d19eef2885c5a0ba1f7acb325b436d0232855->enter($__internal_51de6c529ddac9d9ec1d6b798d7d19eef2885c5a0ba1f7acb325b436d0232855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_51de6c529ddac9d9ec1d6b798d7d19eef2885c5a0ba1f7acb325b436d0232855->leave($__internal_51de6c529ddac9d9ec1d6b798d7d19eef2885c5a0ba1f7acb325b436d0232855_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c3f29689ad52a881c41cbc154197d3b874ccd6b885e584405a7266ef246af9fc = $this->env->getExtension("native_profiler");
        $__internal_c3f29689ad52a881c41cbc154197d3b874ccd6b885e584405a7266ef246af9fc->enter($__internal_c3f29689ad52a881c41cbc154197d3b874ccd6b885e584405a7266ef246af9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c3f29689ad52a881c41cbc154197d3b874ccd6b885e584405a7266ef246af9fc->leave($__internal_c3f29689ad52a881c41cbc154197d3b874ccd6b885e584405a7266ef246af9fc_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
