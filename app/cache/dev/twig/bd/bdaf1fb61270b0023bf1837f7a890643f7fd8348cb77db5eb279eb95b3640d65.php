<?php

/* BDEEventBundle:Board:index.html.twig */
class __TwigTemplate_2802c3cb33dbc52c03e472950ecbb767c12c3f904ee44edcdee138518b55e09d extends Twig_Template
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
        $__internal_636efb33d9e91e9ed57ab742260ab28cab91294d7f8f346ff04664e63db8155e = $this->env->getExtension("native_profiler");
        $__internal_636efb33d9e91e9ed57ab742260ab28cab91294d7f8f346ff04664e63db8155e->enter($__internal_636efb33d9e91e9ed57ab742260ab28cab91294d7f8f346ff04664e63db8155e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDEEventBundle:Board:index.html.twig"));

        // line 1
        echo "<html>
<body>
Hello ";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
</body>
</html>";
        
        $__internal_636efb33d9e91e9ed57ab742260ab28cab91294d7f8f346ff04664e63db8155e->leave($__internal_636efb33d9e91e9ed57ab742260ab28cab91294d7f8f346ff04664e63db8155e_prof);

    }

    public function getTemplateName()
    {
        return "BDEEventBundle:Board:index.html.twig";
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
