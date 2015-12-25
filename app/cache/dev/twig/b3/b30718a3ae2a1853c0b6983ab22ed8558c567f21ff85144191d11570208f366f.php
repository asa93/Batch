<?php

/* BDEShowcaseBundle:Default:contact.html.twig */
class __TwigTemplate_7b303f08198a297b046554b31db7300d3fa53743c9e225aa1e41dbc5733c9fbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BDEShowcaseBundle::main-layout.html.twig", "BDEShowcaseBundle:Default:contact.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BDEShowcaseBundle::main-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ddee168f15390056f54afd09015725e0b5474ee0e7b2279ce0187e6347d577f3 = $this->env->getExtension("native_profiler");
        $__internal_ddee168f15390056f54afd09015725e0b5474ee0e7b2279ce0187e6347d577f3->enter($__internal_ddee168f15390056f54afd09015725e0b5474ee0e7b2279ce0187e6347d577f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDEShowcaseBundle:Default:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddee168f15390056f54afd09015725e0b5474ee0e7b2279ce0187e6347d577f3->leave($__internal_ddee168f15390056f54afd09015725e0b5474ee0e7b2279ce0187e6347d577f3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc8e25ad40913ccf762f1c2a7ad8bc7c87df64f51690f9f3d7cbb80ed25c6edc = $this->env->getExtension("native_profiler");
        $__internal_dc8e25ad40913ccf762f1c2a7ad8bc7c87df64f51690f9f3d7cbb80ed25c6edc->enter($__internal_dc8e25ad40913ccf762f1c2a7ad8bc7c87df64f51690f9f3d7cbb80ed25c6edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<article>\t
<h1> Contacts </h1>
<h2> Nous contacter  </h2>
<p>
 Si vous souhaitez en savoir plus n'hésitez pas à contacter le BDE.

Pour toute question concernant les hébergements, le responsable de la Maison des élèves saura probablement mieux répondre que nous, vous trouverez ses coordonnées page logements.
Vous pouvez également contacter directement les différentes associations, clubs ou projets par leur adresse email dédiée.
 
 
<br />
e-mail : bde@mines-nantes.fr<br />

Téléphone : 02 40 18 02 57<br />

Fax : 02 40 18 02 57<br />

Courrier :
Cercle des Elèves de l'Ecole des Mines de Nantes
6 avenue Augustin-Louis CAUCHY
44 300 Nantes 

</p>

<h2> Nous suivre </h2>
<p> Pour être au courant des événements il est très utile d'être dans le groupe facebook du BDE! En voici le lien: 

</article>
\t
\t
\t";
        
        $__internal_dc8e25ad40913ccf762f1c2a7ad8bc7c87df64f51690f9f3d7cbb80ed25c6edc->leave($__internal_dc8e25ad40913ccf762f1c2a7ad8bc7c87df64f51690f9f3d7cbb80ed25c6edc_prof);

    }

    public function getTemplateName()
    {
        return "BDEShowcaseBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {%extends 'BDEShowcaseBundle::main-layout.html.twig'%}*/
/* 	{%block body%}*/
/* <article>	*/
/* <h1> Contacts </h1>*/
/* <h2> Nous contacter  </h2>*/
/* <p>*/
/*  Si vous souhaitez en savoir plus n'hésitez pas à contacter le BDE.*/
/* */
/* Pour toute question concernant les hébergements, le responsable de la Maison des élèves saura probablement mieux répondre que nous, vous trouverez ses coordonnées page logements.*/
/* Vous pouvez également contacter directement les différentes associations, clubs ou projets par leur adresse email dédiée.*/
/*  */
/*  */
/* <br />*/
/* e-mail : bde@mines-nantes.fr<br />*/
/* */
/* Téléphone : 02 40 18 02 57<br />*/
/* */
/* Fax : 02 40 18 02 57<br />*/
/* */
/* Courrier :*/
/* Cercle des Elèves de l'Ecole des Mines de Nantes*/
/* 6 avenue Augustin-Louis CAUCHY*/
/* 44 300 Nantes */
/* */
/* </p>*/
/* */
/* <h2> Nous suivre </h2>*/
/* <p> Pour être au courant des événements il est très utile d'être dans le groupe facebook du BDE! En voici le lien: */
/* */
/* </article>*/
/* 	*/
/* 	*/
/* 	{%endblock%}*/
