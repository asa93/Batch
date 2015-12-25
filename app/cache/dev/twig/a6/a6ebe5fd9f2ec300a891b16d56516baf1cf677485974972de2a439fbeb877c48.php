<?php

/* BDEShowcaseBundle:Default:header.html.twig */
class __TwigTemplate_74bfffea9b17417c34dce02e6185f5938c64f384dbf1ce1f7529eda4b7be2688 extends Twig_Template
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
        $__internal_5eab58c451145f998dac310ad645e85c87ece5766f4a81e378b201e96a1fc27e = $this->env->getExtension("native_profiler");
        $__internal_5eab58c451145f998dac310ad645e85c87ece5766f4a81e378b201e96a1fc27e->enter($__internal_5eab58c451145f998dac310ad645e85c87ece5766f4a81e378b201e96a1fc27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDEShowcaseBundle:Default:header.html.twig"));

        // line 1
        echo "


<header> <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("bde_showcase_home");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/showcase/logo-bde.png"), "html", null, true);
        echo "\" /></a> </header>
\t

\t\t
\t<nav id=\"mainMenu\">
\t\t<ul>
\t\t\t
\t\t\t<li id=\"home\">
\t\t\t\t<a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("bde_showcase_home");
        echo "\">
\t\t\t\t\t<p>  <img src=\"pics/icons/home.png\" alt=\"Accueil\"/>  </p>
\t\t\t\t</a>
\t\t\t</li>
\t\t
\t\t\t
\t\t\t
\t\t\t<li  id =\"team\">
\t\t\t\t<a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("bde_showcase_equipe");
        echo "\"> <p> L'équipe BDE </p> </a>
\t\t\t
\t\t\t</li>
\t\t\t
\t\t\t
\t\t\t<li id=\"associations\">
\t\t\t
\t\t\t<a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("bde_showcase_associations");
        echo "\"> <p> Vie Associative </p> </a>
\t\t\t
\t\t\t</li>
\t\t\t
\t\t\t</li>
\t\t\t
\t\t\t
\t\t\t<li id=\"ecole\" >
\t\t\t<a href=\"campus.php\"> <p> L'école des Mines</p> </a>
\t\t\t</li>
\t\t\t
\t\t\t<li id=\"vie\">
\t\t\t\t<a href=\"vie-etudiante.php\"> <p> Vie étudiante </p> </a>
\t\t\t\t</li>
\t\t\t<li id=\"campus\">
\t\t\t<a href=\"campus.php\"> <p> Le Campus </p> </a>
\t\t\t</li>
\t\t\t
\t\t\t
\t\t\t
\t\t\t<li id=\"liens\">

\t\t\t<a href=\"liens.php\"> <p> Partenaires et Offres </p> </a>
\t\t\t
\t\t\t</li>
\t\t\t
\t\t
\t\t\t<li id=\"contact\">
\t\t\t
\t\t\t<a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("bde_showcase_contact");
        echo "\"> <p> Contact </p> </a>
\t\t\t
\t\t\t</li>
\t\t\t
\t\t</ul>
\t</nav>
\t

";
        
        $__internal_5eab58c451145f998dac310ad645e85c87ece5766f4a81e378b201e96a1fc27e->leave($__internal_5eab58c451145f998dac310ad645e85c87ece5766f4a81e378b201e96a1fc27e_prof);

    }

    public function getTemplateName()
    {
        return "BDEShowcaseBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 56,  61 => 27,  51 => 20,  40 => 12,  27 => 4,  22 => 1,);
    }
}
/* */
/* */
/* */
/* <header> <a href="{{path('bde_showcase_home')}}"> <img src="{{asset('bundles/showcase/logo-bde.png')}}" /></a> </header>*/
/* 	*/
/* */
/* 		*/
/* 	<nav id="mainMenu">*/
/* 		<ul>*/
/* 			*/
/* 			<li id="home">*/
/* 				<a href="{{path('bde_showcase_home')}}">*/
/* 					<p>  <img src="pics/icons/home.png" alt="Accueil"/>  </p>*/
/* 				</a>*/
/* 			</li>*/
/* 		*/
/* 			*/
/* 			*/
/* 			<li  id ="team">*/
/* 				<a href="{{path('bde_showcase_equipe')}}"> <p> L'équipe BDE </p> </a>*/
/* 			*/
/* 			</li>*/
/* 			*/
/* 			*/
/* 			<li id="associations">*/
/* 			*/
/* 			<a href="{{path('bde_showcase_associations')}}"> <p> Vie Associative </p> </a>*/
/* 			*/
/* 			</li>*/
/* 			*/
/* 			</li>*/
/* 			*/
/* 			*/
/* 			<li id="ecole" >*/
/* 			<a href="campus.php"> <p> L'école des Mines</p> </a>*/
/* 			</li>*/
/* 			*/
/* 			<li id="vie">*/
/* 				<a href="vie-etudiante.php"> <p> Vie étudiante </p> </a>*/
/* 				</li>*/
/* 			<li id="campus">*/
/* 			<a href="campus.php"> <p> Le Campus </p> </a>*/
/* 			</li>*/
/* 			*/
/* 			*/
/* 			*/
/* 			<li id="liens">*/
/* */
/* 			<a href="liens.php"> <p> Partenaires et Offres </p> </a>*/
/* 			*/
/* 			</li>*/
/* 			*/
/* 		*/
/* 			<li id="contact">*/
/* 			*/
/* 			<a href="{{path('bde_showcase_contact')}}"> <p> Contact </p> </a>*/
/* 			*/
/* 			</li>*/
/* 			*/
/* 		</ul>*/
/* 	</nav>*/
/* 	*/
/* */
/* */
