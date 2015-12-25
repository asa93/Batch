<?php

/* BDEShowcaseBundle:Default:index.html.twig */
class __TwigTemplate_266d1ed5be2d9ce9840c575f5dca36758891b842c0ae227a8c2cb487885656ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BDEShowcaseBundle::main-layout.html.twig", "BDEShowcaseBundle:Default:index.html.twig", 1);
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
        $__internal_b7c1ac5865eac9037d8003563459772905dfea683c3d3d7e570051c4da8d3e4e = $this->env->getExtension("native_profiler");
        $__internal_b7c1ac5865eac9037d8003563459772905dfea683c3d3d7e570051c4da8d3e4e->enter($__internal_b7c1ac5865eac9037d8003563459772905dfea683c3d3d7e570051c4da8d3e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDEShowcaseBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7c1ac5865eac9037d8003563459772905dfea683c3d3d7e570051c4da8d3e4e->leave($__internal_b7c1ac5865eac9037d8003563459772905dfea683c3d3d7e570051c4da8d3e4e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bf7887900d25a8a53090421ffac2c56582441eb6c73eacd49325812104d83e3 = $this->env->getExtension("native_profiler");
        $__internal_4bf7887900d25a8a53090421ffac2c56582441eb6c73eacd49325812104d83e3->enter($__internal_4bf7887900d25a8a53090421ffac2c56582441eb6c73eacd49325812104d83e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "




<article>\t
\t<h1> Bienvenue     sur    le    site    du    Bde    des    Mines    de    Nantes! mode: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "app"), "environment", array()), "html", null, true);
        echo " </h1>
\t

\t
\t
\t<h2> Events     a     venir - <em><a href=\"\"> cliquez    ici    pour    acheter    des    places </a></em> </h2>
\t
\t<div id=\"events\"/>
\t<iframe id=\"events\" src=\"https://www.google.com/calendar/embed?src=ot8blqjia2n8kuva310vpredbs%40group.calendar.google.com&ctz=Europe/Paris\" 
\tstyle=\"border: 0\"  height=\"300\" frameborder=\"0\" scrolling=\"yes\"></iframe>
\t</div>
\t
\t
\t
\t<h2> <div class=\"titre\">Nouvel      Entrant,      ou      juste      curieux ?</div></h2>
\t
\t<p>Passe faire un tour dans la rubrique Vie du Campus, tu y trouveras plein d'informations utiles. Pense aussi à consulter la Vie Associative : véritable ruche, l'école regorge d'activités très diverses pour que tu t'investisses à fond dans ta passion.

Futur Mineur toutes tes questions trouveront leur réponse sur notre Page Facebook Intégration 2014.</p>
\t
\t<h2>Etudiant      aux      Mines ?</h2>
\t<p>
\tConsulte fréquemment le planning des animations et les disponibilités de salles de réunion et de travail. Tu trouveras également dans la boutique, tous les produits aux couleurs des Mines. \tBDE 2013
AMI MINEUR, LANCE TOI :
Que ce soit pour une soirée farfelue, pour la création d'une association ou la mise au point d'un événement inter-écoles, ton BDE est là pour toi. Propose ton projet et le Bureau des Elèves te donnera les moyens de mener à bout tes ambitions et de faire bouger ton école. 
<br /><strong>Contacte nous</strong> : <a href=\"mailto:bde@mines-nantes.fr\">bde@mines-nantes.fr</a> <br />
 
Pour en savoir plus sur la formation et les opportunités que t'offre l'Ecole des Mines, consulte le <a href=\"http://www.mines-nantes.fr/\">site officiel</a>.
</p>
</article>

";
        
        $__internal_4bf7887900d25a8a53090421ffac2c56582441eb6c73eacd49325812104d83e3->leave($__internal_4bf7887900d25a8a53090421ffac2c56582441eb6c73eacd49325812104d83e3_prof);

    }

    public function getTemplateName()
    {
        return "BDEShowcaseBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* 	{%extends "BDEShowcaseBundle::main-layout.html.twig"%}*/
/* 	*/
/* 	*/
/* 	{%block body%}*/
/* */
/* */
/* */
/* */
/* */
/* <article>	*/
/* 	<h1> Bienvenue     sur    le    site    du    Bde    des    Mines    de    Nantes! mode: {{ app.environment}} </h1>*/
/* 	*/
/* */
/* 	*/
/* 	*/
/* 	<h2> Events     a     venir - <em><a href=""> cliquez    ici    pour    acheter    des    places </a></em> </h2>*/
/* 	*/
/* 	<div id="events"/>*/
/* 	<iframe id="events" src="https://www.google.com/calendar/embed?src=ot8blqjia2n8kuva310vpredbs%40group.calendar.google.com&ctz=Europe/Paris" */
/* 	style="border: 0"  height="300" frameborder="0" scrolling="yes"></iframe>*/
/* 	</div>*/
/* 	*/
/* 	*/
/* 	*/
/* 	<h2> <div class="titre">Nouvel      Entrant,      ou      juste      curieux ?</div></h2>*/
/* 	*/
/* 	<p>Passe faire un tour dans la rubrique Vie du Campus, tu y trouveras plein d'informations utiles. Pense aussi à consulter la Vie Associative : véritable ruche, l'école regorge d'activités très diverses pour que tu t'investisses à fond dans ta passion.*/
/* */
/* Futur Mineur toutes tes questions trouveront leur réponse sur notre Page Facebook Intégration 2014.</p>*/
/* 	*/
/* 	<h2>Etudiant      aux      Mines ?</h2>*/
/* 	<p>*/
/* 	Consulte fréquemment le planning des animations et les disponibilités de salles de réunion et de travail. Tu trouveras également dans la boutique, tous les produits aux couleurs des Mines. 	BDE 2013*/
/* AMI MINEUR, LANCE TOI :*/
/* Que ce soit pour une soirée farfelue, pour la création d'une association ou la mise au point d'un événement inter-écoles, ton BDE est là pour toi. Propose ton projet et le Bureau des Elèves te donnera les moyens de mener à bout tes ambitions et de faire bouger ton école. */
/* <br /><strong>Contacte nous</strong> : <a href="mailto:bde@mines-nantes.fr">bde@mines-nantes.fr</a> <br />*/
/*  */
/* Pour en savoir plus sur la formation et les opportunités que t'offre l'Ecole des Mines, consulte le <a href="http://www.mines-nantes.fr/">site officiel</a>.*/
/* </p>*/
/* </article>*/
/* */
/* {%endblock%}*/
/* */
