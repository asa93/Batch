<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_fdb2119c650a38f46cc57fd1ec8e094f83e7acda011532aee6e7740bc5e0eaa7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_4512c722f07d12c9785800f7dbd1b1ff5d6000f546f5cecec541254fed73ed1b = $this->env->getExtension("native_profiler");
        $__internal_4512c722f07d12c9785800f7dbd1b1ff5d6000f546f5cecec541254fed73ed1b->enter($__internal_4512c722f07d12c9785800f7dbd1b1ff5d6000f546f5cecec541254fed73ed1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4512c722f07d12c9785800f7dbd1b1ff5d6000f546f5cecec541254fed73ed1b->leave($__internal_4512c722f07d12c9785800f7dbd1b1ff5d6000f546f5cecec541254fed73ed1b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbbb9491f4660f60edf6f27f385e45d90fb71e499abde93bb72d810fa0a03c17 = $this->env->getExtension("native_profiler");
        $__internal_cbbb9491f4660f60edf6f27f385e45d90fb71e499abde93bb72d810fa0a03c17->enter($__internal_cbbb9491f4660f60edf6f27f385e45d90fb71e499abde93bb72d810fa0a03c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cbbb9491f4660f60edf6f27f385e45d90fb71e499abde93bb72d810fa0a03c17->leave($__internal_cbbb9491f4660f60edf6f27f385e45d90fb71e499abde93bb72d810fa0a03c17_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb416a5c9b405cd2abcc7a4a431285f907aa958fec8b8793c68bceafb928ff0d = $this->env->getExtension("native_profiler");
        $__internal_eb416a5c9b405cd2abcc7a4a431285f907aa958fec8b8793c68bceafb928ff0d->enter($__internal_eb416a5c9b405cd2abcc7a4a431285f907aa958fec8b8793c68bceafb928ff0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, "location"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getContext($context, "location"), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_eb416a5c9b405cd2abcc7a4a431285f907aa958fec8b8793c68bceafb928ff0d->leave($__internal_eb416a5c9b405cd2abcc7a4a431285f907aa958fec8b8793c68bceafb928ff0d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
