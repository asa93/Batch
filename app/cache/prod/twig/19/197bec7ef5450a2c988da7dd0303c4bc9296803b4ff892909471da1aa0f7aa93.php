<?php

/* TrainCoreBundle:Default:admin_view.html.twig */
class __TwigTemplate_3a0a8c0ed6fb9bdd879c9a939b35b89f8cdc8147569cb2de208b35543d4a7a7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TrainCoreBundle:Default:main-layout.html.twig", "TrainCoreBundle:Default:admin_view.html.twig", 1);
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
        $__internal_e4a4b8407c853c230b915688a2767fea26fb3a80e87818af88027d11eb590e72 = $this->env->getExtension("native_profiler");
        $__internal_e4a4b8407c853c230b915688a2767fea26fb3a80e87818af88027d11eb590e72->enter($__internal_e4a4b8407c853c230b915688a2767fea26fb3a80e87818af88027d11eb590e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrainCoreBundle:Default:admin_view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4a4b8407c853c230b915688a2767fea26fb3a80e87818af88027d11eb590e72->leave($__internal_e4a4b8407c853c230b915688a2767fea26fb3a80e87818af88027d11eb590e72_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5423af6e3725884bc0648b05737d42ce3497f4c79019f68c9442a24a29ffcca9 = $this->env->getExtension("native_profiler");
        $__internal_5423af6e3725884bc0648b05737d42ce3497f4c79019f68c9442a24a29ffcca9->enter($__internal_5423af6e3725884bc0648b05737d42ce3497f4c79019f68c9442a24a29ffcca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"page-header\">
\t<h2> Admin Panel</h2>
\t</div>
";
        // line 7
        if (((isset($context["voyage"]) ? $context["voyage"] : $this->getContext($context, "voyage")) != null)) {
            // line 8
            echo "<div class=\"panel panel-primary\">
  <!-- Default panel contents -->
  <div class=\"panel-heading\"><strong>Voyage de ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["voyage"]) ? $context["voyage"] : $this->getContext($context, "voyage")), "depart", array()), "html", null, true);
            echo " vers ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["voyage"]) ? $context["voyage"] : $this->getContext($context, "voyage")), "destination", array()), "html", null, true);
            echo " le ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["voyage"]) ? $context["voyage"] : $this->getContext($context, "voyage")), "date", array()), "format", array(0 => "Y-m-d"), "method"), "html", null, true);
            echo "</strong></div>

  <!-- Table -->
  <table class=\"table\">
\t<tr style=\"font-weight:bold;\">
\t<td>#Nom</td>
\t <td>#Prenom</td>
\t <td>#Age </td>
\t <td>#email</td>
\t <td>#réglement</td>
</tr>\t 

\t ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["billets"]) ? $context["billets"] : $this->getContext($context, "billets")));
            foreach ($context['_seq'] as $context["_key"] => $context["billet"]) {
                // line 23
                echo "\t\t ";
                $context["voyageur"] = $this->getAttribute($context["billet"], "getVoyageur", array(), "method");
                // line 24
                echo "\t\t <tr>
\t\t\t<td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["voyageur"]) ? $context["voyageur"] : $this->getContext($context, "voyageur")), "nom", array()), "html", null, true);
                echo "</td>
\t\t\t <td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["voyageur"]) ? $context["voyageur"] : $this->getContext($context, "voyageur")), "prenom", array()), "html", null, true);
                echo "</td>
\t\t\t <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["voyageur"]) ? $context["voyageur"] : $this->getContext($context, "voyageur")), "age", array()), "html", null, true);
                echo "</td>
\t\t\t <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["voyageur"]) ? $context["voyageur"] : $this->getContext($context, "voyageur")), "email", array()), "html", null, true);
                echo "</td>
\t\t\t <td> ";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["billet"], "getPrix", array(), "method"), "html", null, true);
                echo "€ 
\t\t\t <em>";
                // line 30
                if ( !$this->getAttribute($context["billet"], "getPaye", array(), "method")) {
                    // line 31
                    echo "\t\t\t\t- impayé
\t\t\t ";
                }
                // line 33
                echo "\t\t\t </em>
\t\t\t </td>
\t\t </tr>
\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['billet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t
 



</table>
</div>
";
        } else {
            // line 45
            echo "<p> désolé il n'y a pas de résultat..</p>
";
        }
        // line 47
        echo "\t
\t
\t
";
        
        $__internal_5423af6e3725884bc0648b05737d42ce3497f4c79019f68c9442a24a29ffcca9->leave($__internal_5423af6e3725884bc0648b05737d42ce3497f4c79019f68c9442a24a29ffcca9_prof);

    }

    public function getTemplateName()
    {
        return "TrainCoreBundle:Default:admin_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 47,  125 => 45,  115 => 37,  106 => 33,  102 => 31,  100 => 30,  96 => 29,  92 => 28,  88 => 27,  84 => 26,  80 => 25,  77 => 24,  74 => 23,  70 => 22,  51 => 10,  47 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'TrainCoreBundle:Default:main-layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<div class="page-header">*/
/* 	<h2> Admin Panel</h2>*/
/* 	</div>*/
/* {%if  voyage!=null %}*/
/* <div class="panel panel-primary">*/
/*   <!-- Default panel contents -->*/
/*   <div class="panel-heading"><strong>Voyage de {{voyage.depart}} vers {{voyage.destination}} le {{voyage.date.format('Y-m-d')}}</strong></div>*/
/* */
/*   <!-- Table -->*/
/*   <table class="table">*/
/* 	<tr style="font-weight:bold;">*/
/* 	<td>#Nom</td>*/
/* 	 <td>#Prenom</td>*/
/* 	 <td>#Age </td>*/
/* 	 <td>#email</td>*/
/* 	 <td>#réglement</td>*/
/* </tr>	 */
/* */
/* 	 {% for billet in billets%}*/
/* 		 {% set voyageur=billet.getVoyageur() %}*/
/* 		 <tr>*/
/* 			<td>{{voyageur.nom}}</td>*/
/* 			 <td>{{voyageur.prenom}}</td>*/
/* 			 <td>{{voyageur.age}}</td>*/
/* 			 <td>{{voyageur.email}}</td>*/
/* 			 <td> {{billet.getPrix()}}€ */
/* 			 <em>{% if not billet.getPaye()%}*/
/* 				- impayé*/
/* 			 {%endif%}*/
/* 			 </em>*/
/* 			 </td>*/
/* 		 </tr>*/
/* 	 {% endfor%}*/
/* 	*/
/*  */
/* */
/* */
/* */
/* </table>*/
/* </div>*/
/* {% else %}*/
/* <p> désolé il n'y a pas de résultat..</p>*/
/* {%endif%}*/
/* 	*/
/* 	*/
/* 	*/
/* {%endblock%}*/
