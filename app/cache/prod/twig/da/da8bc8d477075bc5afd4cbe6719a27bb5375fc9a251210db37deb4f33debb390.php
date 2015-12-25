<?php

/* TrainCoreBundle:Default:admin.html.twig */
class __TwigTemplate_e51b87b0a615b798853358ae38215c7ad6b427e6aed9bb7da6ce745c047b8e56 extends Twig_Template
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
        $__internal_fecc1c9ccc0e66b6c969884b8cc711624281d3315ed80dac1681365f2ebf75e4 = $this->env->getExtension("native_profiler");
        $__internal_fecc1c9ccc0e66b6c969884b8cc711624281d3315ed80dac1681365f2ebf75e4->enter($__internal_fecc1c9ccc0e66b6c969884b8cc711624281d3315ed80dac1681365f2ebf75e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrainCoreBundle:Default:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fecc1c9ccc0e66b6c969884b8cc711624281d3315ed80dac1681365f2ebf75e4->leave($__internal_fecc1c9ccc0e66b6c969884b8cc711624281d3315ed80dac1681365f2ebf75e4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b07f16bc1579e49016ddfd811272e30873ff929ec0734e7cb52f520d6690d2aa = $this->env->getExtension("native_profiler");
        $__internal_b07f16bc1579e49016ddfd811272e30873ff929ec0734e7cb52f520d6690d2aa->enter($__internal_b07f16bc1579e49016ddfd811272e30873ff929ec0734e7cb52f520d6690d2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t";
        $context["title"] = "iZi Train - Accueil";
        // line 4
        echo "    <title>";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</title>
";
        
        $__internal_b07f16bc1579e49016ddfd811272e30873ff929ec0734e7cb52f520d6690d2aa->leave($__internal_b07f16bc1579e49016ddfd811272e30873ff929ec0734e7cb52f520d6690d2aa_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0c55b45b8bef9ad26c5e554628825b3f375787b2ec276b9fc416b5547c7a539 = $this->env->getExtension("native_profiler");
        $__internal_a0c55b45b8bef9ad26c5e554628825b3f375787b2ec276b9fc416b5547c7a539->enter($__internal_a0c55b45b8bef9ad26c5e554628825b3f375787b2ec276b9fc416b5547c7a539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a0c55b45b8bef9ad26c5e554628825b3f375787b2ec276b9fc416b5547c7a539->leave($__internal_a0c55b45b8bef9ad26c5e554628825b3f375787b2ec276b9fc416b5547c7a539_prof);

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
