<?php

/* TrainCoreBundle:Default:search.html.twig */
class __TwigTemplate_dcea30b14b205caf311c8a6c8368ea335d6bdd3ff5fd65d730f3d006082458fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TrainCoreBundle:Default:main-layout.html.twig", "TrainCoreBundle:Default:search.html.twig", 1);
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
        $__internal_0e1e6e84928975e3ded689b889691fc6adf0cad83c7023ae5142b3b295618ebb = $this->env->getExtension("native_profiler");
        $__internal_0e1e6e84928975e3ded689b889691fc6adf0cad83c7023ae5142b3b295618ebb->enter($__internal_0e1e6e84928975e3ded689b889691fc6adf0cad83c7023ae5142b3b295618ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrainCoreBundle:Default:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e1e6e84928975e3ded689b889691fc6adf0cad83c7023ae5142b3b295618ebb->leave($__internal_0e1e6e84928975e3ded689b889691fc6adf0cad83c7023ae5142b3b295618ebb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e21b1e1ac6316a5ad77500b70c58cba1dc67ad7dc0e1df8e28f33625403ab4c8 = $this->env->getExtension("native_profiler");
        $__internal_e21b1e1ac6316a5ad77500b70c58cba1dc67ad7dc0e1df8e28f33625403ab4c8->enter($__internal_e21b1e1ac6316a5ad77500b70c58cba1dc67ad7dc0e1df8e28f33625403ab4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"panel panel-primary\">
  <!-- Default panel contents -->
  <div class=\"panel-heading\"><strong>Trajet ";
        // line 6
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["depart"]) ? $context["depart"] : $this->getContext($context, "depart"))), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["destination"]) ? $context["destination"] : $this->getContext($context, "destination"))), "html", null, true);
        echo "</strong></div>

  <!-- Table -->
  <table class=\"table\">
\t
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voyages"]) ? $context["voyages"] : $this->getContext($context, "voyages")));
        foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
            // line 12
            echo "
 <tr>
 


\t
\t <td>Depart de ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["voyage"], "depart", array()), "html", null, true);
            echo " </td>
\t <td>Arrivée à ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["voyage"], "destination", array()), "html", null, true);
            echo " </td>
\t <td>le ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["voyage"], "date", array()), "format", array(0 => "d-m-Y"), "method"), "html", null, true);
            echo " . </td>
\t <td>Places libres <span class=\"badge\">";
            // line 21
            echo twig_escape_filter($this->env, (10 - $this->getAttribute($context["voyage"], "nbBillets", array(), "method")), "html", null, true);
            echo "</span></td>
\t   
\t   ";
            // line 23
            if ( !$this->getAttribute($context["voyage"], "isComplet", array(), "method")) {
                // line 24
                echo "\t\t<td> <a style=\"text-decoration:none;\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("train_core_inscription", array("id" => $this->getAttribute($context["voyage"], "id", array()))), "html", null, true);
                echo "\" >
\t\t<span class=\"label label-success\">réserver</span></a></td>
\t ";
            } else {
                // line 26
                echo " 
\t\t<td><span class=\"label label-danger\">complet</span></td>
\t ";
            }
            // line 29
            echo "\t

\t  

</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
</ul>
\t  </table>
</div>
\t
";
        
        $__internal_e21b1e1ac6316a5ad77500b70c58cba1dc67ad7dc0e1df8e28f33625403ab4c8->leave($__internal_e21b1e1ac6316a5ad77500b70c58cba1dc67ad7dc0e1df8e28f33625403ab4c8_prof);

    }

    public function getTemplateName()
    {
        return "TrainCoreBundle:Default:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 35,  97 => 29,  92 => 26,  85 => 24,  83 => 23,  78 => 21,  74 => 20,  70 => 19,  66 => 18,  58 => 12,  54 => 11,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'TrainCoreBundle:Default:main-layout.html.twig' %}*/
/* */
/* {% block body%}*/
/* <div class="panel panel-primary">*/
/*   <!-- Default panel contents -->*/
/*   <div class="panel-heading"><strong>Trajet {{depart|upper}} - {{destination|upper}}</strong></div>*/
/* */
/*   <!-- Table -->*/
/*   <table class="table">*/
/* 	*/
/* {% for voyage in voyages%}*/
/* */
/*  <tr>*/
/*  */
/* */
/* */
/* 	*/
/* 	 <td>Depart de {{voyage.depart}} </td>*/
/* 	 <td>Arrivée à {{voyage.destination}} </td>*/
/* 	 <td>le {{voyage.date.format('d-m-Y')}} . </td>*/
/* 	 <td>Places libres <span class="badge">{{10-voyage.nbBillets()}}</span></td>*/
/* 	   */
/* 	   {% if not (voyage.isComplet())%}*/
/* 		<td> <a style="text-decoration:none;" href="{{path('train_core_inscription',{'id':voyage.id})}}" >*/
/* 		<span class="label label-success">réserver</span></a></td>*/
/* 	 {%else%} */
/* 		<td><span class="label label-danger">complet</span></td>*/
/* 	 {%endif%}*/
/* 	*/
/* */
/* 	  */
/* */
/* </tr>*/
/* {%endfor%}*/
/* */
/* </ul>*/
/* 	  </table>*/
/* </div>*/
/* 	*/
/* {% endblock %}*/
