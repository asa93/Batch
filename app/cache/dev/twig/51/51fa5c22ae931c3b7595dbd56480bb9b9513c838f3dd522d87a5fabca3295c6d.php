<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_ae3c083e7da3e8de82e7e3719b7caad1f58681e8dff4a03543decbc624a75243 extends Twig_Template
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
        $__internal_b51d6556e2f7c1b033842f29019dd6b18233b3e747465951e9b1f87d39a2338b = $this->env->getExtension("native_profiler");
        $__internal_b51d6556e2f7c1b033842f29019dd6b18233b3e747465951e9b1f87d39a2338b->enter($__internal_b51d6556e2f7c1b033842f29019dd6b18233b3e747465951e9b1f87d39a2338b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        // line 1
        echo "<html>
<body>
Hello ";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
</body>
</html>";
        
        $__internal_b51d6556e2f7c1b033842f29019dd6b18233b3e747465951e9b1f87d39a2338b->leave($__internal_b51d6556e2f7c1b033842f29019dd6b18233b3e747465951e9b1f87d39a2338b_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
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
