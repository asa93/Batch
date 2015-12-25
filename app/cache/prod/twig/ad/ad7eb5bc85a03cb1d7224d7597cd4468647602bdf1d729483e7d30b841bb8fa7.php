<?php

/* TrainCoreBundle:Default:index.html.twig */
class __TwigTemplate_8d0d6e3233b54b0d16e2c4e540eb0e76e2130469adfc855f7605d69f5d720d87 extends Twig_Template
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
        $__internal_d01f933035ba8380f841267fe34bc73ee65442c689df7219ea4be2c92db88b4c = $this->env->getExtension("native_profiler");
        $__internal_d01f933035ba8380f841267fe34bc73ee65442c689df7219ea4be2c92db88b4c->enter($__internal_d01f933035ba8380f841267fe34bc73ee65442c689df7219ea4be2c92db88b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrainCoreBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d01f933035ba8380f841267fe34bc73ee65442c689df7219ea4be2c92db88b4c->leave($__internal_d01f933035ba8380f841267fe34bc73ee65442c689df7219ea4be2c92db88b4c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_720877d609445043e4b2f94e067019cf68155ad37611b3b2746be4b6082a78af = $this->env->getExtension("native_profiler");
        $__internal_720877d609445043e4b2f94e067019cf68155ad37611b3b2746be4b6082a78af->enter($__internal_720877d609445043e4b2f94e067019cf68155ad37611b3b2746be4b6082a78af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_720877d609445043e4b2f94e067019cf68155ad37611b3b2746be4b6082a78af->leave($__internal_720877d609445043e4b2f94e067019cf68155ad37611b3b2746be4b6082a78af_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f1fcf8b267ed53d1ba1a4205ce07c449a38fb83268192e8b0ccb4164bf2563a = $this->env->getExtension("native_profiler");
        $__internal_5f1fcf8b267ed53d1ba1a4205ce07c449a38fb83268192e8b0ccb4164bf2563a->enter($__internal_5f1fcf8b267ed53d1ba1a4205ce07c449a38fb83268192e8b0ccb4164bf2563a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "      <div class=\"jumbotron \" style=\"background:#337ab7;color:white\">
        <h1>Des trains à bas prix, tous les jours!</h1>
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
          <h2 class=\"featurette-heading\">Voyagez loin, moins cher. Des facilités possibles pour les BDE.
\t\t  <span class=\"text-muted\">Contactez-nous ;)</span></h2>
          <p class=\"lead\"> Avec iZi Train, organisez facilement un voyage au top! On s'occupe du placement des voyageurs, des réductions (type carte-jeune etc..)
\t\t  et vous, vous vous concentrez sur votre voyage.</p>
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
        
        $__internal_5f1fcf8b267ed53d1ba1a4205ce07c449a38fb83268192e8b0ccb4164bf2563a->leave($__internal_5f1fcf8b267ed53d1ba1a4205ce07c449a38fb83268192e8b0ccb4164bf2563a_prof);

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
/*         <h1>Des trains à bas prix, tous les jours!</h1>*/
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
/*           <h2 class="featurette-heading">Voyagez loin, moins cher. Des facilités possibles pour les BDE.*/
/* 		  <span class="text-muted">Contactez-nous ;)</span></h2>*/
/*           <p class="lead"> Avec iZi Train, organisez facilement un voyage au top! On s'occupe du placement des voyageurs, des réductions (type carte-jeune etc..)*/
/* 		  et vous, vous vous concentrez sur votre voyage.</p>*/
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
