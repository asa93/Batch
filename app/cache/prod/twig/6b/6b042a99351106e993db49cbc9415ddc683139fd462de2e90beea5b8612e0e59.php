<?php

/* TrainCoreBundle:Default:inscription.html.twig */
class __TwigTemplate_9241155bcd01507422a78fd7a7845b12cc5ef44ca63677578efa173ac44ca30e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TrainCoreBundle:Default:main-layout.html.twig", "TrainCoreBundle:Default:inscription.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TrainCoreBundle:Default:main-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9ed7994829e82881bdcb2202e3dd3aceb70b7c92c664921a42b02ed3cb5ec1d = $this->env->getExtension("native_profiler");
        $__internal_f9ed7994829e82881bdcb2202e3dd3aceb70b7c92c664921a42b02ed3cb5ec1d->enter($__internal_f9ed7994829e82881bdcb2202e3dd3aceb70b7c92c664921a42b02ed3cb5ec1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrainCoreBundle:Default:inscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9ed7994829e82881bdcb2202e3dd3aceb70b7c92c664921a42b02ed3cb5ec1d->leave($__internal_f9ed7994829e82881bdcb2202e3dd3aceb70b7c92c664921a42b02ed3cb5ec1d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4333b22d24a683d6a440c5bc5d4ec5c8cc8f3667f9917d29206f44656e8c747 = $this->env->getExtension("native_profiler");
        $__internal_d4333b22d24a683d6a440c5bc5d4ec5c8cc8f3667f9917d29206f44656e8c747->enter($__internal_d4333b22d24a683d6a440c5bc5d4ec5c8cc8f3667f9917d29206f44656e8c747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t

\t<h3> Voyage de ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["voyage"]) ? $context["voyage"] : $this->getContext($context, "voyage")), "depart", array()), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["voyage"]) ? $context["voyage"] : $this->getContext($context, "voyage")), "destination", array()), "html", null, true);
        echo " le ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["voyage"]) ? $context["voyage"] : $this->getContext($context, "voyage")), "date", array()), "format", array(0 => "d-m-Y"), "method"), "html", null, true);
        echo " . Voyageurs: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["voyage"]) ? $context["voyage"] : $this->getContext($context, "voyage")), "nbBillets", array(), "method"), "html", null, true);
        echo " </h3>
\t
\t<div>
\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["label"] => $context["flashes"]) {
            // line 10
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 11
                echo "\t\t";
                if (($context["label"] == "alert")) {
                    // line 12
                    echo "       <div class=\"alert alert-danger col-md-9\" role=\"alert\">";
                    echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                    echo " <br /></div>
\t   ";
                } elseif ((                // line 13
$context["label"] == "notice")) {
                    // line 14
                    echo "\t   <div class=\"alert alert-success col-md-9\" role=\"alert\">";
                    echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                    echo " <br /></div>
            ";
                }
                // line 16
                echo "     
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t<br /> <br /> <br />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t
\t</div>
\t
\t<h2> <span class=\"glyphicon glyphicon-pencil\"></span> Inscription </h2>

\t<div class=\"well\">
\t\t\t\t<div class=\"row featurette\">\t
\t\t<div class=\"col-md-5\">\t\t
\t\t";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t

\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\" id=\"basic-addon1\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label');
        echo "  </span>
\t\t
\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t\t
\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\" id=\"basic-addon1\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label');
        echo "</span>
\t\t
\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control md-col-3")));
        echo "
\t\t</div>


\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\" id=\"basic-addon1\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo " </span>
\t\t
\t\t";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>


\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\" id=\"basic-addon1\">";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'label');
        echo "   </span>
\t\t
\t\t";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>


\t\t



";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
\t\t</div>
\t\t</div>
\t
\t
";
        
        $__internal_d4333b22d24a683d6a440c5bc5d4ec5c8cc8f3667f9917d29206f44656e8c747->leave($__internal_d4333b22d24a683d6a440c5bc5d4ec5c8cc8f3667f9917d29206f44656e8c747_prof);

    }

    public function getTemplateName()
    {
        return "TrainCoreBundle:Default:inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 63,  159 => 55,  154 => 53,  146 => 48,  141 => 46,  133 => 41,  128 => 39,  121 => 35,  116 => 33,  109 => 29,  105 => 28,  95 => 20,  88 => 18,  81 => 16,  75 => 14,  73 => 13,  68 => 12,  65 => 11,  60 => 10,  56 => 9,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'TrainCoreBundle:Default:main-layout.html.twig' %}*/
/* */
/* {% block body%}*/
/* 	*/
/* */
/* 	<h3> Voyage de {{voyage.depart}} à {{voyage.destination}} le {{voyage.date.format('d-m-Y')}} . Voyageurs: {{voyage.nbBillets()}} </h3>*/
/* 	*/
/* 	<div>*/
/* 		{% for label, flashes in app.session.flashbag.all %}*/
/*     {% for flash in flashes %}*/
/* 		{% if label =="alert"%}*/
/*        <div class="alert alert-danger col-md-9" role="alert">{{ flash }} <br /></div>*/
/* 	   {% elseif label =="notice"%}*/
/* 	   <div class="alert alert-success col-md-9" role="alert">{{ flash }} <br /></div>*/
/*             {% endif %}*/
/*      */
/*     {% endfor %}*/
/* 	<br /> <br /> <br />*/
/* 	{% endfor %}*/
/* 		*/
/* 	</div>*/
/* 	*/
/* 	<h2> <span class="glyphicon glyphicon-pencil"></span> Inscription </h2>*/
/* */
/* 	<div class="well">*/
/* 				<div class="row featurette">	*/
/* 		<div class="col-md-5">		*/
/* 		{{ form_start(form) }}*/
/*     {{ form_errors(form) }}*/
/* 		*/
/* */
/* 		<div class="input-group">*/
/* 			<span class="input-group-addon" id="basic-addon1">{{form_label(form.nom)}}  </span>*/
/* 		*/
/* 					{{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}*/
/* 		</div>*/
/* 		*/
/* 		<div class="input-group">*/
/* 			<span class="input-group-addon" id="basic-addon1">{{form_label(form.prenom)}}</span>*/
/* 		*/
/* 			{{ form_widget(form.prenom, {'attr': {'class': 'form-control md-col-3'}}) }}*/
/* 		</div>*/
/* */
/* */
/* 		<div class="input-group">*/
/* 			<span class="input-group-addon" id="basic-addon1">{{form_label(form.email)}} </span>*/
/* 		*/
/* 		{{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}*/
/* 		</div>*/
/* */
/* */
/* 		<div class="input-group">*/
/* 			<span class="input-group-addon" id="basic-addon1">{{form_label(form.age)}}   </span>*/
/* 		*/
/* 		{{ form_widget(form.age, {'attr': {'class': 'form-control'}}) }}*/
/* 		</div>*/
/* */
/* */
/* 		*/
/* */
/* */
/* */
/* {{ form_end(form) }}*/
/* 		</div>*/
/* 		</div>*/
/* 		</div>*/
/* 	*/
/* 	*/
/* {% endblock %}*/
