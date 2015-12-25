<?php

/* TrainCoreBundle:Default:admin_create.html.twig */
class __TwigTemplate_9c968de602824e9baec271fe5908c9f5aa10c1e606070acb8cb04817c7406017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TrainCoreBundle:Default:main-layout.html.twig", "TrainCoreBundle:Default:admin_create.html.twig", 1);
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
        $__internal_fa51dcd8e4ad76c06a0945e891993fb84ef7f6f28613528d9b34b24851f05302 = $this->env->getExtension("native_profiler");
        $__internal_fa51dcd8e4ad76c06a0945e891993fb84ef7f6f28613528d9b34b24851f05302->enter($__internal_fa51dcd8e4ad76c06a0945e891993fb84ef7f6f28613528d9b34b24851f05302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrainCoreBundle:Default:admin_create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa51dcd8e4ad76c06a0945e891993fb84ef7f6f28613528d9b34b24851f05302->leave($__internal_fa51dcd8e4ad76c06a0945e891993fb84ef7f6f28613528d9b34b24851f05302_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_accc75cfac8a5ed97fea1419bdb3fe0f0836a37cb45fa29ea8fc373fd6fba7ff = $this->env->getExtension("native_profiler");
        $__internal_accc75cfac8a5ed97fea1419bdb3fe0f0836a37cb45fa29ea8fc373fd6fba7ff->enter($__internal_accc75cfac8a5ed97fea1419bdb3fe0f0836a37cb45fa29ea8fc373fd6fba7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t

\t<h3 class=\"page-header\">  Création d'un voyage </h3>
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
\t<h2> <span class=\"glyphicon glyphicon-pencil\"></span> Entrez les données du voyage </h2>

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label');
        echo "  </span>
\t\t
\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), "date", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), "time", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "\t\t\t\t\t
\t\t</div>

\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\" id=\"basic-addon1\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "depart", array()), 'label');
        echo "</span>
\t\t
\t\t\t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "depart", array()), 'widget', array("attr" => array("class" => "form-control md-col-3")));
        echo "
\t\t</div>


\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\" id=\"basic-addon1\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "destination", array()), 'label');
        echo " </span>
\t\t
\t\t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "destination", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>


\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\" id=\"basic-addon1\">";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixBambin", array()), 'label');
        echo "   </span>
\t\t
\t\t";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixBambin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>

\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\" id=\"basic-addon1\">";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixEnfant", array()), 'label');
        echo "   </span>
\t\t
\t\t";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixEnfant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t\t
\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\" id=\"basic-addon1\">";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixJeune", array()), 'label');
        echo "   </span>
\t\t
\t\t";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixJeune", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>

\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\" id=\"basic-addon1\">";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixAdulte", array()), 'label');
        echo "   </span>
\t\t
\t\t";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixAdulte", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>


";
        // line 78
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
\t\t</div>
\t\t</div>
\t
\t
";
        
        $__internal_accc75cfac8a5ed97fea1419bdb3fe0f0836a37cb45fa29ea8fc373fd6fba7ff->leave($__internal_accc75cfac8a5ed97fea1419bdb3fe0f0836a37cb45fa29ea8fc373fd6fba7ff_prof);

    }

    public function getTemplateName()
    {
        return "TrainCoreBundle:Default:admin_create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 78,  190 => 74,  185 => 72,  178 => 68,  173 => 66,  166 => 62,  161 => 60,  154 => 56,  149 => 54,  141 => 49,  136 => 47,  128 => 42,  123 => 40,  116 => 36,  112 => 35,  107 => 33,  100 => 29,  96 => 28,  86 => 20,  79 => 18,  72 => 16,  66 => 14,  64 => 13,  59 => 12,  56 => 11,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'TrainCoreBundle:Default:main-layout.html.twig' %}*/
/* */
/* {% block body%}*/
/* 	*/
/* */
/* 	<h3 class="page-header">  Création d'un voyage </h3>*/
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
/* 	<h2> <span class="glyphicon glyphicon-pencil"></span> Entrez les données du voyage </h2>*/
/* */
/* 	<div class="well">*/
/* 				<div class="row featurette">	*/
/* 		<div class="col-md-5">		*/
/* 		{{ form_start(form) }}*/
/*     {{ form_errors(form) }}*/
/* 		*/
/* */
/* 		<div class="input-group">*/
/* 			<span class="input-group-addon" id="basic-addon1">{{form_label(form.date)}}  </span>*/
/* 		*/
/* 					{{ form_widget(form.date.date, {'attr': {'class': 'form-control'}}) }}*/
/* 					{{ form_widget(form.date.time, {'attr': {'class': 'form-control'}}) }}					*/
/* 		</div>*/
/* */
/* 		<div class="input-group">*/
/* 			<span class="input-group-addon" id="basic-addon1">{{form_label(form.depart)}}</span>*/
/* 		*/
/* 			{{ form_widget(form.depart, {'attr': {'class': 'form-control md-col-3'}}) }}*/
/* 		</div>*/
/* */
/* */
/* 		<div class="input-group">*/
/* 			<span class="input-group-addon" id="basic-addon1">{{form_label(form.destination)}} </span>*/
/* 		*/
/* 		{{ form_widget(form.destination, {'attr': {'class': 'form-control'}}) }}*/
/* 		</div>*/
/* */
/* */
/* 		<div class="input-group">*/
/* 			<span class="input-group-addon" id="basic-addon1">{{form_label(form.prixBambin)}}   </span>*/
/* 		*/
/* 		{{ form_widget(form.prixBambin, {'attr': {'class': 'form-control'}}) }}*/
/* 		</div>*/
/* */
/* 		<div class="input-group">*/
/* 			<span class="input-group-addon" id="basic-addon1">{{form_label(form.prixEnfant)}}   </span>*/
/* 		*/
/* 		{{ form_widget(form.prixEnfant, {'attr': {'class': 'form-control'}}) }}*/
/* 		</div>*/
/* 		*/
/* 		<div class="input-group">*/
/* 			<span class="input-group-addon" id="basic-addon1">{{form_label(form.prixJeune)}}   </span>*/
/* 		*/
/* 		{{ form_widget(form.prixJeune, {'attr': {'class': 'form-control'}}) }}*/
/* 		</div>*/
/* */
/* 		<div class="input-group">*/
/* 			<span class="input-group-addon" id="basic-addon1">{{form_label(form.prixAdulte)}}   </span>*/
/* 		*/
/* 		{{ form_widget(form.prixAdulte, {'attr': {'class': 'form-control'}}) }}*/
/* 		</div>*/
/* */
/* */
/* {{ form_end(form) }}*/
/* 		</div>*/
/* 		</div>*/
/* 		</div>*/
/* 	*/
/* 	*/
/* {% endblock %}*/
