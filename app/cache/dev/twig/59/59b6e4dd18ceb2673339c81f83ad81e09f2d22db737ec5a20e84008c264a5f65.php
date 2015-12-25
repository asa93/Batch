<?php

/* TrainCoreBundle:Default:index.html.twig */
class __TwigTemplate_fa5a28912acb65666e2b3e662295f3d8e20c93c4fda98a633f1db11a56c3bb9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TrainCoreBundle:Default:main-layout.html.twig", "TrainCoreBundle:Default:index.html.twig", 1);
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
        $__internal_fff8dbda6acacdf0fd52f0162b1ea840e891305b70b9304f2e34216a447532c0 = $this->env->getExtension("native_profiler");
        $__internal_fff8dbda6acacdf0fd52f0162b1ea840e891305b70b9304f2e34216a447532c0->enter($__internal_fff8dbda6acacdf0fd52f0162b1ea840e891305b70b9304f2e34216a447532c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrainCoreBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fff8dbda6acacdf0fd52f0162b1ea840e891305b70b9304f2e34216a447532c0->leave($__internal_fff8dbda6acacdf0fd52f0162b1ea840e891305b70b9304f2e34216a447532c0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9cd29c09e64058ef36900e1c6d1ec8e30d432eac430f6df33ee12b3ac9c15e8 = $this->env->getExtension("native_profiler");
        $__internal_c9cd29c09e64058ef36900e1c6d1ec8e30d432eac430f6df33ee12b3ac9c15e8->enter($__internal_c9cd29c09e64058ef36900e1c6d1ec8e30d432eac430f6df33ee12b3ac9c15e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t";
        $context["title"] = "iZi Train - Accueil";
        // line 4
        echo "    <title>";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</title>
\t
\t";
        // line 6
        $context["active_1"] = "active";
        // line 7
        echo "\t";
        $context["active_2"] = "inactive";
        // line 8
        echo "\t";
        $context["active_3"] = "inactive";
        echo "\t
";
        
        $__internal_c9cd29c09e64058ef36900e1c6d1ec8e30d432eac430f6df33ee12b3ac9c15e8->leave($__internal_c9cd29c09e64058ef36900e1c6d1ec8e30d432eac430f6df33ee12b3ac9c15e8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc8e9b05b6b8aa9aced5c496133722c49b39c1417ad47b5113a6294adea5a444 = $this->env->getExtension("native_profiler");
        $__internal_dc8e9b05b6b8aa9aced5c496133722c49b39c1417ad47b5113a6294adea5a444->enter($__internal_dc8e9b05b6b8aa9aced5c496133722c49b39c1417ad47b5113a6294adea5a444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "      <div class=\"jumbotron \" style=\"background:#337ab7;color:white\">
        <h1>Des trains à bas prix, tout les jours!</h1>
        <p class=\"lead\"> Trouvez votre destination et réservez dès maintenant une place à tarif réduit.</p>

\t\t
\t\t<form class=\"navbar-form navbar-left\" role=\"search\" method=\"POST\" action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("train_core_search");
        echo "\">
  <div class=\"form-group\" >
     <input type=\"text\" id=\"depart\" name=\"depart\" class=\"form-control\" placeholder=\"Depart\" >
    <input type=\"text\" id=\"destination\" name=\"destination\" class=\"form-control\" placeholder=\"Arrivée\" >

  <button type=\"submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span></button>
    </div>
</form>

      </div>
     <hr class=\"featurette-divider\">

      <div class=\"row featurette\">
        <div class=\"col-md-7\">
          <h2 class=\"featurette-heading\"> Plus rapide et moins cher qu'un covoiturage!  <span class=\"text-muted\"> Vous attendez quoi?</span></h2>
          <p class=\"lead\">La SNCF propose des tarifs réduits pour les personnes voyageant en groupe. Grâce à iZi Train,
\t\t  profitez de réductions exceptionnelles en quelques clics!</p>
        </div>
        <div class=\"col-md-5\">
          <img class=\"featurette-image img-responsive center-block\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/train/bootstrap/pics/card-money.jpg"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
        </div>
      </div>

      <hr class=\"featurette-divider\">

      <div class=\"row featurette\">
        <div class=\"col-md-7 col-md-push-5\">
          <h2 class=\"featurette-heading\"> Détendez-vous.<span class=\"text-muted\"> On s'occupe de tout.</span></h2>
          <p class=\"lead\">iZi Train s'occupe de former des groupes
\t\t  avec les gens de votre campus qui vont vers la même destination. Inscrivez-vous simplement sur le site, et on vous
\t\t  recontacte pour profiter de la réduction. Elle est pas belle la vie?</p>
        </div>
        <div class=\"col-md-5 col-md-pull-7\">
          <img class=\"featurette-image img-responsive center-block\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/train/bootstrap/pics/card-lazy.jpg"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
        </div>
      </div>

      <hr class=\"featurette-divider\">

      <div class=\"row featurette\">
        <div class=\"col-md-7\">
          <h2 class=\"featurette-heading\">Voyagez loin pour peu cher. Des facilités possibles pour les BDE.
\t\t  <span class=\"text-muted\">Contactez-nous ;)</span></h2>
          <p class=\"lead\"> Avec iZi Train, organisez facilement un voyage au top! On s'occupe du placement des voyageurs, des réductions (type carte-jeune etc..)
\t\t  et vous, vous concentrez sur votre voyage.</p>
        </div>
        <div class=\"col-md-5\">
          <img class=\"featurette-image img-responsive center-block\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/train/bootstrap/pics/card-vacation.png"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
        </div>
      </div>

      <hr class=\"featurette-divider\">
\t\t
\t\t";
        
        $__internal_dc8e9b05b6b8aa9aced5c496133722c49b39c1417ad47b5113a6294adea5a444->leave($__internal_dc8e9b05b6b8aa9aced5c496133722c49b39c1417ad47b5113a6294adea5a444_prof);

    }

    public function getTemplateName()
    {
        return "TrainCoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 64,  117 => 50,  100 => 36,  78 => 17,  71 => 12,  65 => 11,  55 => 8,  52 => 7,  50 => 6,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'TrainCoreBundle:Default:main-layout.html.twig' %}*/
/* 	{% block title %}*/
/* 	{% set title='iZi Train - Accueil' %}*/
/*     <title>{{title}}</title>*/
/* 	*/
/* 	{% set active_1='active'%}*/
/* 	{% set active_2='inactive'%}*/
/* 	{% set active_3='inactive'%}	*/
/* {%endblock%}*/
/* 	*/
/* {% block body%}*/
/*       <div class="jumbotron " style="background:#337ab7;color:white">*/
/*         <h1>Des trains à bas prix, tout les jours!</h1>*/
/*         <p class="lead"> Trouvez votre destination et réservez dès maintenant une place à tarif réduit.</p>*/
/* */
/* 		*/
/* 		<form class="navbar-form navbar-left" role="search" method="POST" action="{{ path('train_core_search')}}">*/
/*   <div class="form-group" >*/
/*      <input type="text" id="depart" name="depart" class="form-control" placeholder="Depart" >*/
/*     <input type="text" id="destination" name="destination" class="form-control" placeholder="Arrivée" >*/
/* */
/*   <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>*/
/*     </div>*/
/* </form>*/
/* */
/*       </div>*/
/*      <hr class="featurette-divider">*/
/* */
/*       <div class="row featurette">*/
/*         <div class="col-md-7">*/
/*           <h2 class="featurette-heading"> Plus rapide et moins cher qu'un covoiturage!  <span class="text-muted"> Vous attendez quoi?</span></h2>*/
/*           <p class="lead">La SNCF propose des tarifs réduits pour les personnes voyageant en groupe. Grâce à iZi Train,*/
/* 		  profitez de réductions exceptionnelles en quelques clics!</p>*/
/*         </div>*/
/*         <div class="col-md-5">*/
/*           <img class="featurette-image img-responsive center-block" src="{{ asset('bundles/train/bootstrap/pics/card-money.jpg') }}" alt="Generic placeholder image">*/
/*         </div>*/
/*       </div>*/
/* */
/*       <hr class="featurette-divider">*/
/* */
/*       <div class="row featurette">*/
/*         <div class="col-md-7 col-md-push-5">*/
/*           <h2 class="featurette-heading"> Détendez-vous.<span class="text-muted"> On s'occupe de tout.</span></h2>*/
/*           <p class="lead">iZi Train s'occupe de former des groupes*/
/* 		  avec les gens de votre campus qui vont vers la même destination. Inscrivez-vous simplement sur le site, et on vous*/
/* 		  recontacte pour profiter de la réduction. Elle est pas belle la vie?</p>*/
/*         </div>*/
/*         <div class="col-md-5 col-md-pull-7">*/
/*           <img class="featurette-image img-responsive center-block" src="{{ asset('bundles/train/bootstrap/pics/card-lazy.jpg') }}" alt="Generic placeholder image">*/
/*         </div>*/
/*       </div>*/
/* */
/*       <hr class="featurette-divider">*/
/* */
/*       <div class="row featurette">*/
/*         <div class="col-md-7">*/
/*           <h2 class="featurette-heading">Voyagez loin pour peu cher. Des facilités possibles pour les BDE.*/
/* 		  <span class="text-muted">Contactez-nous ;)</span></h2>*/
/*           <p class="lead"> Avec iZi Train, organisez facilement un voyage au top! On s'occupe du placement des voyageurs, des réductions (type carte-jeune etc..)*/
/* 		  et vous, vous concentrez sur votre voyage.</p>*/
/*         </div>*/
/*         <div class="col-md-5">*/
/*           <img class="featurette-image img-responsive center-block" src="{{ asset('bundles/train/bootstrap/pics/card-vacation.png') }}" alt="Generic placeholder image">*/
/*         </div>*/
/*       </div>*/
/* */
/*       <hr class="featurette-divider">*/
/* 		*/
/* 		{% endblock %}*/
/* */
/* */
