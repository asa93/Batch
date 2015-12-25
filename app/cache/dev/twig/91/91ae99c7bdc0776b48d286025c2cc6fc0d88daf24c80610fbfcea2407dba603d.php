<?php

/* BDEEventBundle:Default:index.html.twig */
class __TwigTemplate_5969a1d07dd6246f047ce627e5db6e581a5402ee3d24029dd56b08a0c355c391 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bfde424f965a70b527c728980bb599c7f343acbdefaf4fe1881f4d3ce02fc741 = $this->env->getExtension("native_profiler");
        $__internal_bfde424f965a70b527c728980bb599c7f343acbdefaf4fe1881f4d3ce02fc741->enter($__internal_bfde424f965a70b527c728980bb599c7f343acbdefaf4fe1881f4d3ce02fc741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDEEventBundle:Default:index.html.twig"));

        // line 1
        echo "<html>
<body>
Hello ";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
</body>
</html>";
        
        $__internal_bfde424f965a70b527c728980bb599c7f343acbdefaf4fe1881f4d3ce02fc741->leave($__internal_bfde424f965a70b527c728980bb599c7f343acbdefaf4fe1881f4d3ce02fc741_prof);

    }

    public function getTemplateName()
    {
        return "BDEEventBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <html>*/
/* <body>*/
/* Hello {{ name }}!*/
/* </body>*/
/* </html>*/
