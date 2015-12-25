<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c54a2898da45aac2790a776b82458374ec5375d42b7501429014391f3635c6d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1d300db17c155f48280f889e81153d285afb6b2c2239e7a5648649711860c31 = $this->env->getExtension("native_profiler");
        $__internal_b1d300db17c155f48280f889e81153d285afb6b2c2239e7a5648649711860c31->enter($__internal_b1d300db17c155f48280f889e81153d285afb6b2c2239e7a5648649711860c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1d300db17c155f48280f889e81153d285afb6b2c2239e7a5648649711860c31->leave($__internal_b1d300db17c155f48280f889e81153d285afb6b2c2239e7a5648649711860c31_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b3b7fbaf00477345ddc6f6d3a88b4450094f10f75523afebbeb7eb48dc60139e = $this->env->getExtension("native_profiler");
        $__internal_b3b7fbaf00477345ddc6f6d3a88b4450094f10f75523afebbeb7eb48dc60139e->enter($__internal_b3b7fbaf00477345ddc6f6d3a88b4450094f10f75523afebbeb7eb48dc60139e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b3b7fbaf00477345ddc6f6d3a88b4450094f10f75523afebbeb7eb48dc60139e->leave($__internal_b3b7fbaf00477345ddc6f6d3a88b4450094f10f75523afebbeb7eb48dc60139e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_71bab5535525c04f3896b4655422cb3380dcb492af92e26cdbfb582532fe1405 = $this->env->getExtension("native_profiler");
        $__internal_71bab5535525c04f3896b4655422cb3380dcb492af92e26cdbfb582532fe1405->enter($__internal_71bab5535525c04f3896b4655422cb3380dcb492af92e26cdbfb582532fe1405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_71bab5535525c04f3896b4655422cb3380dcb492af92e26cdbfb582532fe1405->leave($__internal_71bab5535525c04f3896b4655422cb3380dcb492af92e26cdbfb582532fe1405_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b1d5f620663d206e270be1b284e89000a605944a2e5a3c075e6304d214f08d9 = $this->env->getExtension("native_profiler");
        $__internal_7b1d5f620663d206e270be1b284e89000a605944a2e5a3c075e6304d214f08d9->enter($__internal_7b1d5f620663d206e270be1b284e89000a605944a2e5a3c075e6304d214f08d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7b1d5f620663d206e270be1b284e89000a605944a2e5a3c075e6304d214f08d9->leave($__internal_7b1d5f620663d206e270be1b284e89000a605944a2e5a3c075e6304d214f08d9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
