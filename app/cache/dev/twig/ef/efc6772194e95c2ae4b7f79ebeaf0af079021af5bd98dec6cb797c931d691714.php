<?php

/* TrainCoreBundle:Default:search.html.twig */
class __TwigTemplate_9b8f75bcc154ab6aee0f5ec402796a9dae18193de7975a20698d795a8899144b extends Twig_Template
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
        $__internal_62303574cb6d7d61a864d29c5e6abcc9164d590cfdd0b99105bf842f18c5926e = $this->env->getExtension("native_profiler");
        $__internal_62303574cb6d7d61a864d29c5e6abcc9164d590cfdd0b99105bf842f18c5926e->enter($__internal_62303574cb6d7d61a864d29c5e6abcc9164d590cfdd0b99105bf842f18c5926e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrainCoreBundle:Default:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62303574cb6d7d61a864d29c5e6abcc9164d590cfdd0b99105bf842f18c5926e->leave($__internal_62303574cb6d7d61a864d29c5e6abcc9164d590cfdd0b99105bf842f18c5926e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd62b4d91362c010cc07b3e1b3eeae3f8be866c5542dca5b67167e9c95a959ec = $this->env->getExtension("native_profiler");
        $__internal_fd62b4d91362c010cc07b3e1b3eeae3f8be866c5542dca5b67167e9c95a959ec->enter($__internal_fd62b4d91362c010cc07b3e1b3eeae3f8be866c5542dca5b67167e9c95a959ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fd62b4d91362c010cc07b3e1b3eeae3f8be866c5542dca5b67167e9c95a959ec->leave($__internal_fd62b4d91362c010cc07b3e1b3eeae3f8be866c5542dca5b67167e9c95a959ec_prof);

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
