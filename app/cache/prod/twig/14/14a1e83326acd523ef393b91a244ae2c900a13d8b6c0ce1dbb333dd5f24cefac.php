<?php

/* TrainCoreBundle:Default:admin.html.twig */
class __TwigTemplate_9343568d96e16657c5a008d9324a13032a81a69d5e1bd448e7f7784457933869 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TrainCoreBundle:Default:main-layout.html.twig", "TrainCoreBundle:Default:admin.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TrainCoreBundle:Default:main-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd0b3b8776e72db728707332b37a8f45ad51a597362c04f260d1ef52c7528e59 = $this->env->getExtension("native_profiler");
        $__internal_dd0b3b8776e72db728707332b37a8f45ad51a597362c04f260d1ef52c7528e59->enter($__internal_dd0b3b8776e72db728707332b37a8f45ad51a597362c04f260d1ef52c7528e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrainCoreBundle:Default:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd0b3b8776e72db728707332b37a8f45ad51a597362c04f260d1ef52c7528e59->leave($__internal_dd0b3b8776e72db728707332b37a8f45ad51a597362c04f260d1ef52c7528e59_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b7fa8c2680aa98d5147e8c24e891648c49801e57991e6a69ed55b6da8a61e26 = $this->env->getExtension("native_profiler");
        $__internal_5b7fa8c2680aa98d5147e8c24e891648c49801e57991e6a69ed55b6da8a61e26->enter($__internal_5b7fa8c2680aa98d5147e8c24e891648c49801e57991e6a69ed55b6da8a61e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t";
        $context["title"] = "iZi Train - Accueil";
        // line 4
        echo "    <title>";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</title>
";
        
        $__internal_5b7fa8c2680aa98d5147e8c24e891648c49801e57991e6a69ed55b6da8a61e26->leave($__internal_5b7fa8c2680aa98d5147e8c24e891648c49801e57991e6a69ed55b6da8a61e26_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6c1673747a899f2ef2d66b97e75d59cf2da30746705f6c10c40a9cffb3790ad = $this->env->getExtension("native_profiler");
        $__internal_e6c1673747a899f2ef2d66b97e75d59cf2da30746705f6c10c40a9cffb3790ad->enter($__internal_e6c1673747a899f2ef2d66b97e75d59cf2da30746705f6c10c40a9cffb3790ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"page-header\">
\t<h2> Main Admin Panel - Bienvenue ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " </h2>
\t</div>
\t
<div class=\"panel panel-primary\">
  <!-- Default panel contents -->
  <div class=\"panel-heading\"><strong>Gestion des voyages 
  <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("train_core_admin_create");
        echo "\" style=\"text-decoration:none;\">
  <span class=\"label label-warning \">
  <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\" ></span>
  
  Créer un voyage  </span></a>

  </strong>
  </div>

  <!-- Table -->
  <table class=\"table\">
\t<tr style=\"font-weight:bold;\">
\t<td>#Depart</td>
\t <td>#Arrivée </td>
\t <td>#Date départ </td>
\t <td>#Voyageurs</td>
\t <td>#Action</td>
\t
\t</tr>
";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voyages"]) ? $context["voyages"] : $this->getContext($context, "voyages")));
        foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
            // line 34
            echo "
 <tr>
 

\t
\t <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["voyage"], "depart", array())), "html", null, true);
            echo " </td>
\t <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["voyage"], "destination", array())), "html", null, true);
            echo " </td>
\t <td>
\t\t";
            // line 42
            if (($this->getAttribute($this->getAttribute($context["voyage"], "getDateDiff", array(), "method"), "invert", array()) == 1)) {
                // line 43
                echo "\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["voyage"], "getDateDiff", array(), "method"), "format", array(0 => "Dans %d jours, %H heures et %i minutes"), "method"), "html", null, true);
                echo " .
\t\t";
            } else {
                // line 45
                echo "\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["voyage"], "getDateDiff", array(), "method"), "format", array(0 => "Il y a %d jours, %H heures et %i minutes"), "method"), "html", null, true);
                echo "
\t\t";
            }
            // line 47
            echo "\t 
\t </td>
\t <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["voyage"], "nbBillets", array(), "method"), "html", null, true);
            echo "</td>
\t   
\t<td> 

\t\t<div class=\"btn-group\">
\t\t\t\t\t\t";
            // line 55
            echo "\t\t\t\t\t\t";
            if ( !$this->getAttribute($context["voyage"], "isComplet", array(), "method")) {
                // line 56
                echo "\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">En remplissage      </button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 58
$context["voyage"], "isComplet", array(), "method") &&  !$this->getAttribute($context["voyage"], "isPaye", array(), "method"))) {
                echo "\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning\">Attente de paiment</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
            } elseif ($this->getAttribute(            // line 62
$context["voyage"], "isPaye", array(), "method")) {
                // line 63
                echo "\t\t\t\t\t  <button type=\"button\" class=\"btn btn-danger\">A payer                  </button>
\t\t\t\t\t  <button type=\"button\" class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t<span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t  </button>
\t\t\t  <ul class=\"dropdown-menu\">
\t\t\t\t<li><a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("train_core_admin_view", array("id" => $this->getAttribute($context["voyage"], "id", array()))), "html", null, true);
            echo "\">Voir</a></li>
\t\t\t\t<li><a href=\"#\">Contacter voyageurs</a></li>
\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t  </ul>
\t\t</div>

\t\t\t\t

\t</td>
 
 
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "
</table>
</div>
\t
\t
\t
\t
";
        
        $__internal_e6c1673747a899f2ef2d66b97e75d59cf2da30746705f6c10c40a9cffb3790ad->leave($__internal_e6c1673747a899f2ef2d66b97e75d59cf2da30746705f6c10c40a9cffb3790ad_prof);

    }

    public function getTemplateName()
    {
        return "TrainCoreBundle:Default:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 86,  168 => 71,  162 => 67,  156 => 63,  154 => 62,  147 => 58,  143 => 56,  140 => 55,  132 => 49,  128 => 47,  122 => 45,  116 => 43,  114 => 42,  109 => 40,  105 => 39,  98 => 34,  94 => 33,  72 => 14,  63 => 8,  60 => 7,  54 => 6,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'TrainCoreBundle:Default:main-layout.html.twig' %}*/
/* 	{% block title %}*/
/* 	{% set title='iZi Train - Accueil' %}*/
/*     <title>{{title}}</title>*/
/* {%endblock%}*/
/* {% block body %}*/
/* 	<div class="page-header">*/
/* 	<h2> Main Admin Panel - Bienvenue {{app.user.username}} </h2>*/
/* 	</div>*/
/* 	*/
/* <div class="panel panel-primary">*/
/*   <!-- Default panel contents -->*/
/*   <div class="panel-heading"><strong>Gestion des voyages */
/*   <a href="{{path('train_core_admin_create')}}" style="text-decoration:none;">*/
/*   <span class="label label-warning ">*/
/*   <span class="glyphicon glyphicon-plus" aria-hidden="true" ></span>*/
/*   */
/*   Créer un voyage  </span></a>*/
/* */
/*   </strong>*/
/*   </div>*/
/* */
/*   <!-- Table -->*/
/*   <table class="table">*/
/* 	<tr style="font-weight:bold;">*/
/* 	<td>#Depart</td>*/
/* 	 <td>#Arrivée </td>*/
/* 	 <td>#Date départ </td>*/
/* 	 <td>#Voyageurs</td>*/
/* 	 <td>#Action</td>*/
/* 	*/
/* 	</tr>*/
/* {% for voyage in voyages%}*/
/* */
/*  <tr>*/
/*  */
/* */
/* 	*/
/* 	 <td>{{voyage.depart|capitalize}} </td>*/
/* 	 <td>{{voyage.destination|capitalize}} </td>*/
/* 	 <td>*/
/* 		{% if voyage.getDateDiff().invert==1%}*/
/* 			{{voyage.getDateDiff().format('Dans %d jours, %H heures et %i minutes')}} .*/
/* 		{% else %}*/
/* 			{{voyage.getDateDiff().format('Il y a %d jours, %H heures et %i minutes')}}*/
/* 		{%endif%}*/
/* 	 */
/* 	 </td>*/
/* 	 <td>{{voyage.nbBillets()}}</td>*/
/* 	   */
/* 	<td> */
/* */
/* 		<div class="btn-group">*/
/* 						{# On change la couleur en fonction du voyage #}*/
/* 						{% if not (voyage.isComplet())%}*/
/* 						<button type="button" class="btn btn-default">En remplissage      </button>*/
/* 						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/* 						{% elseif voyage.isComplet() and not(voyage.isPaye()) %}			*/
/* 						<button type="button" class="btn btn-warning">Attente de paiment</button>*/
/* 						<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/* 						*/
/* 						{% elseif voyage.isPaye() %}*/
/* 					  <button type="button" class="btn btn-danger">A payer                  </button>*/
/* 					  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/* 												*/
/* 						{%endif%}*/
/* 				<span class="caret"></span>*/
/* 				<span class="sr-only">Toggle Dropdown</span>*/
/* 			  </button>*/
/* 			  <ul class="dropdown-menu">*/
/* 				<li><a href="{{path('train_core_admin_view',{'id':voyage.id})}}">Voir</a></li>*/
/* 				<li><a href="#">Contacter voyageurs</a></li>*/
/* 				<li><a href="#">Something else here</a></li>*/
/* 				<li role="separator" class="divider"></li>*/
/* 				<li><a href="#">Separated link</a></li>*/
/* 			  </ul>*/
/* 		</div>*/
/* */
/* 				*/
/* */
/* 	</td>*/
/*  */
/*  */
/* </tr>*/
/* {%endfor%}*/
/* */
/* </table>*/
/* </div>*/
/* 	*/
/* 	*/
/* 	*/
/* 	*/
/* {%endblock%}*/
