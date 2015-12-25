<?php

/* BDEShowcaseBundle:Default:equipe.html.twig */
class __TwigTemplate_4af5ae394fa754101d1fba1809c5a392e2c1817dc9e5f8e8e924340205659b0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BDEShowcaseBundle::main-layout.html.twig", "BDEShowcaseBundle:Default:equipe.html.twig", 1);
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
        $__internal_aa7098161b612de542532bbe2e9700ec31d6e8ab4ff3e3aa1a3c90f49f7c5b7e = $this->env->getExtension("native_profiler");
        $__internal_aa7098161b612de542532bbe2e9700ec31d6e8ab4ff3e3aa1a3c90f49f7c5b7e->enter($__internal_aa7098161b612de542532bbe2e9700ec31d6e8ab4ff3e3aa1a3c90f49f7c5b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDEShowcaseBundle:Default:equipe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa7098161b612de542532bbe2e9700ec31d6e8ab4ff3e3aa1a3c90f49f7c5b7e->leave($__internal_aa7098161b612de542532bbe2e9700ec31d6e8ab4ff3e3aa1a3c90f49f7c5b7e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5406ad2268d38419eeea5f7630c456a93f7d2be311785e939b308ccd4bd06089 = $this->env->getExtension("native_profiler");
        $__internal_5406ad2268d38419eeea5f7630c456a93f7d2be311785e939b308ccd4bd06089->enter($__internal_5406ad2268d38419eeea5f7630c456a93f7d2be311785e939b308ccd4bd06089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<article>\t
\t<h1> Le     BDE</h1>
\t
\t<h3> A quoi ça sert un BDE? </h3>
\t\t<p> Un bureau d'élèves sert à bien des choses mais son rôle principal est <strong> d'écouter, aider et animer </strong>. <br />
\t\tEcouter les besoins des élèves mais aussi les aider à mener leurs projets à bout s'ils en ont et enfin animer la vie étudiante de l'école. Aussi, si vous avez besoins
\t\td'aide n'hésitez pas à nous <a href=\"contact.php\"> contacter </a> et nous nous ferons un plaisir de vous être utile.
\t\t
\t\t</p>
\t
\t<h2> Presentation </h2>
\t
\t<div id=\"gallerie\">
\t\t<div id=\"shortMenuGallerie\" />
\t\t\t<a href=\"\" id=\"previous\">   </a>
\t\t\t<p> 1/27 </p>
\t\t\t<a href=\"\" id=\"next\">   </a>
\t\t</div>
\t\t\t
\t\t<ul id=\"gallerie-liste\">
\t\t
\t\t\t
\t\t\t
\t\t
\t\t\t
\t\t\t<li id=\"img1\">
\t\t\t\t<img src=\"pics/albums2015/BDE/charles.jpg\" alt=\"Charles\" />
\t\t\t\t<p> <strong>Charles Couturier | Prez'</strong> <br />
\t\t\t\t\t<em> Rôle : </em> Il s'occupe un peu de tout,<br /> donc si vous avez une <br />question générale n'hésitez pas à <br />vous adresser à lui. <br />
\t\t\t\t\t<em> Numéro : </em> <br />
\t\t\t\t\t<em> E-mail : </em>
\t\t\t\t</p>
\t\t\t</li>
\t\t\t
\t\t\t<li id=\"img2\">
\t\t\t\t<img src=\"pics/albums2015/BDE/camille.jpg\" alt=\"Charles\" />
\t\t\t\t<p> <strong> Camille | Vice Prez'</strong> <br />
\t\t\t\t\t<em> Rôle : </em> Accompagner le président et faire vivre le BDE. Dispo et souriante elle vous aidera volontiers avec Agathe. <br />
\t\t\t\t\t<em> Numéro : </em> <br />
\t\t\t\t\t<em> E-mail : </em>
\t\t\t\t</p>
\t\t\t</li>
\t\t\t
\t\t\t<li id=\"img3\">
\t\t\t\t<img src=\"pics/albums2015/BDE/charles.jpg\" alt=\"Charles\" />
\t\t\t\t\t<p> <strong> Agathe | Vice Prez'</strong> <br />
\t\t\t\t\t<em> Rôle : </em> Accompagner le président et faire vivre le BDE. Tout comme Camille elle s'occupe de pas mal de choses au sein du BDE. <br />
\t\t\t\t\t<em> Numéro : </em> <br />
\t\t\t\t\t<em> E-mail : </em>
\t\t\t\t</p>
\t\t\t</li>
\t\t\t
\t\t\t<li id=\"img4\">
\t\t\t\t<img src=\"pics/albums2015/BDE/albane.jpg\" alt=\"Charles\" />
\t\t\t\t\t<p> <strong> Albane | Trésorière</strong> <br />
\t\t\t\t\t<em> Rôle : </em> S'occuper des finances du BDE. <br /> 
\t\t\t\t\t<em> Numéro : </em> <br />
\t\t\t\t\t<em> E-mail : </em>
\t\t\t\t</p>
\t\t\t</li>
\t\t\t<li id=\"img5\">
\t\t\t\t<img src=\"pics/albums2015/BDE/charles.jpg\" alt=\"Charles\" />
\t\t\t\t\t<p> <strong> Agathe (Villada) | Trésorière </strong> <br />
\t\t\t\t\t<em> Rôle : </em> S'occuper des finances du BDE. <br /> 
\t\t\t\t\t<em> Numéro : </em> <br />
\t\t\t\t\t<em> E-mail : </em>
\t\t\t\t</p>
\t\t\t</li>
\t\t\t
\t\t\t<li id=\"img6\">
\t\t\t\t<img src=\"pics/albums2015/BDE/charles.jpg\" alt=\"Charles\" />
\t\t\t\t\t<p> <strong>Alexandre | Trésorier</strong> <br />
\t\t\t\t\t<em> Rôle : </em> S'occuper des finances du BDE. <br /> 
\t\t\t\t\t<em> Numéro : </em> <br />
\t\t\t\t\t<em> E-mail : </em>
\t\t\t\t</p>
\t\t\t</li>
\t\t\t
\t\t\t<li id=\"img7\">
\t\t\t\t<img src=\"pics/albums2015/BDE/romain.jpg\" alt=\"Charles\" />
\t\t\t\t\t<p> <strong> Romain | Pôle Sponsors et Partenariats</strong> <br />
\t\t\t\t\t<em> Rôle : </em>Trouver des sponsors pour renforcer la trésorerie mais aussi et surtout dénicher de beaux partenariats
\t\t\t\t\t\t\tqui amènent parfois à des offres très avantageuses pour les mineurs! <br />
\t\t\t\t\t<em> Numéro : </em> <br />
\t\t\t\t\t<em> E-mail : </em>
\t\t\t\t</p>
\t\t\t</li>
\t\t\t
\t\t\t<li id=\"img8\">
\t\t\t\t<img src=\"pics/albums2015/BDE/gaultier.jpg\" alt=\"Charles\" />
\t\t\t\t\t<p> <strong> Gaultier</strong> <br />
\t\t\t\t\t<em> Rôle : </em> Trouver des sponsors pour renforcer la trésorerie mais aussi et surtout dénicher de beaux partenariats
\t\t\t\t\t\t\tqui amènent parfois à des offres très avantageuses pour les mineurs! <br />
\t\t\t\t\t<em> Numéro : </em> <br />
\t\t\t\t\t<em> E-mail : </em>
\t\t\t\t</p>
\t\t\t</li>
\t\t\t<li id=\"img9\">
\t\t\t\t<img src=\"pics/albums2015/BDE/seb.jpg\" alt=\"Charles\" />
\t\t\t\t\t<p> <strong> Sébastien | Pôle Communication</strong> <br />
\t\t\t\t\t<em> Rôle : </em> 
\t\t\t\t\t<em> Numéro : </em> <br />
\t\t\t\t\t<em> E-mail : </em>
\t\t\t\t</p>
\t\t\t</li>
\t\t\t
\t\t\t<li id=\"img10\">
\t\t\t\t<img src=\"pics/albums2015/BDE/jeanne.jpg\" alt=\"Charles\" />
\t\t\t\t\t<p> <strong> Jeanne | Pôle Approvisionnement</strong> <br />
\t\t\t\t\t<em> Rôle : </em> 
\t\t\t\t\t<em> Numéro : </em> <br />
\t\t\t\t\t<em> E-mail : </em>
\t\t\t\t</p>
\t\t\t</li>
\t\t\t
\t\t\t<li id=\"img11\">
\t\t\t\t<img src=\"pics/albums2015/BDE/madeleine.jpg\" alt=\"Charles\" />
\t\t\t\t\t<p> <strong> Madeleine | Pôle Events</strong> <br />
\t\t\t\t\t<em> Rôle : </em> 
\t\t\t\t\t<em> Numéro : </em> <br />
\t\t\t\t\t<em> E-mail : </em>
\t\t\t\t</p>
\t\t\t\t
\t\t\t</li>
\t\t\t\t\t\t
\t\t\t<li id=\"img12\">
\t\t\t\t<img src=\"pics/albums2015/BDE/mathilde.jpg\" alt=\"Charles\" />
\t\t\t\t\t<p> <strong> Mathilde | Pôle Events</strong> <br />
\t\t\t\t\t<em> Rôle : </em> 
\t\t\t\t\t<em> Numéro : </em> <br />
\t\t\t\t\t<em> E-mail : </em>
\t\t\t\t</p>
\t\t\t</li>
\t\t\t
\t\t\t<li id=\"img13\">
\t\t\t\t<img src=\"pics/albums2015/BDE/kevin.jpg\" alt=\"Charles\" />
\t\t\t\t\t<p> <strong> Kévin | Pôle Technique</strong> <br />
\t\t\t\t\t<em> Rôle : </em> 
\t\t\t\t\t<em> Numéro : </em> <br />
\t\t\t\t\t<em> E-mail : </em>
\t\t\t\t</p>
\t\t\t</li>
\t\t\t<li id=\"img14\">
\t\t\t\t<img src=\"pics/albums2015/BDE/yann.jpg\" alt=\"Slimane\" />
\t\t\t\t\t<p> <strong> Yann | Pôle Inté </strong> <br />
\t\t\t\t\t<em> Rôle : </em> 
\t\t\t\t\t<em> Numéro : </em> <br />
\t\t\t\t\t<em> E-mail : </em>
\t\t\t\t</p>
\t\t\t</li>
\t\t\t
\t\t\t<li id=\"img15\">
\t\t\t\t<img src=\"pics/albums2015/BDE/nicolas.jpg\" alt=\"Charles\" />
\t\t\t\t\t<p> <strong>Nicolas (Simon) | Pôle Inté</strong> <br />
\t\t\t\t\t<em> Rôle : </em> 
\t\t\t\t\t<em> Numéro : </em> <br />
\t\t\t\t\t<em> E-mail : </em>
\t\t\t\t</p>
\t\t\t</li>
\t\t\t
\t\t\t<li id=\"img16\">
\t\t\t\t<img src=\"pics/albums2015/BDE/charles.jpg\" alt=\"Charles\" />
\t\t\t\t\t<p> <strong> Nicolas | Designer/Pôle Communication</strong> <br />
\t\t\t\t\t<em> Rôle : </em> 
\t\t\t\t\t<em> Numéro : </em> <br />
\t\t\t\t\t<em> E-mail : </em>
\t\t\t\t</p>
\t\t\t</li>
\t\t\t
\t\t\t<li id=\"img17\">
\t\t\t\t<img src=\"pics/albums2015/BDE/alexis.jpg\" alt=\"Charles\" />
\t\t\t\t\t<p> <strong> Alexis | Pôle Communication</strong> <br />
\t\t\t\t\t<em> Rôle : </em> 
\t\t\t\t\t<em> Numéro : </em> <br />
\t\t\t\t\t<em> E-mail : </em>
\t\t\t\t</p>
\t\t\t</li>
\t\t\t<li id=\"img18\">
\t\t\t\t<img src=\"pics/albums2015/BDE/aude.jpg\" alt=\"Charles\" />
\t\t\t\t\t<p> <strong> Aude | Secréataire</strong> <br />
\t\t\t\t\t<em> Rôle : </em> 
\t\t\t\t\t<em> Numéro : </em> <br />
\t\t\t\t\t<em> E-mail : </em>
\t\t\t\t</p>
\t\t\t</li>
\t\t\t
\t\t\t<li id=\"img19\">
\t\t\t\t<img src=\"pics/albums2015/BDE/aude.jpg\" alt=\"Charles\" />
\t\t\t\t\t<p> <strong> Edithe | Secréataire</strong> <br />
\t\t\t\t\t<em> Rôle : </em> 
\t\t\t\t\t<em> Numéro : </em> <br />
\t\t\t\t\t<em> E-mail : </em>
\t\t\t\t</p>
\t\t\t</li>
\t\t\t
\t\t\t<li id=\"img20\">
\t\t\t\t<img src=\"pics/albums2015/BDE/william.jpg\" alt=\"Charles\" />
\t\t\t\t\t<p> <strong> William | Pôle Approvisionnement</strong> <br />
\t\t\t\t\t<em> Rôle : </em> 
\t\t\t\t\t<em> Numéro : </em> <br />
\t\t\t\t\t<em> E-mail : </em>
\t\t\t\t</p>
\t\t\t</li>
\t\t\t
\t\t\t<li id=\"img21\">
\t\t\t\t<img src=\"pics/albums2015/BDE/remy.jpg\" alt=\"Charles\" />
\t\t\t\t\t<p> <strong> Rémy | Pôle Inté</strong> <br />
\t\t\t\t\t<em> Rôle : </em> 
\t\t\t\t\t<em> Numéro : </em> <br />
\t\t\t\t\t<em> E-mail : </em>
\t\t\t\t</p>
\t\t\t\t
\t\t\t</li>
\t\t\t
\t\t\t\t<li id=\"img22\">
\t\t\t\t<img src=\"pics/albums2015/BDE/raphiki.jpg\" alt=\"Charles\" />
\t\t\t\t\t<p> <strong> Raphaël | Pôle Inté</strong> <br />
\t\t\t\t\t<em> Rôle : </em> 
\t\t\t\t\t<em> Numéro : </em> <br />
\t\t\t\t\t<em> E-mail : </em>
\t\t\t\t</p>
\t\t\t</li>
\t\t\t
\t\t\t<li id=\"img23\">
\t\t\t\t<img src=\"pics/albums2015/BDE/coco.jpg\" alt=\"Charles\" />
\t\t\t\t\t<p> <strong> Corentin | Pôle Inté</strong> <br />
\t\t\t\t\t<em> Rôle : </em> 
\t\t\t\t\t<em> Numéro : </em> <br />
\t\t\t\t\t<em> E-mail : </em>
\t\t\t\t</p>
\t\t\t\t
\t\t\t</li>
\t\t\t
\t\t\t<li id=\"img24\">
\t\t\t\t<img src=\"pics/albums2015/BDE/anthony.jpg\" alt=\"Charles\" />
\t\t\t\t\t<p> <strong> Anthony | Pôle Inté</strong> <br />
\t\t\t\t\t<em> Rôle : </em> 
\t\t\t\t\t<em> Numéro : </em> <br />
\t\t\t\t\t<em> E-mail : </em>
\t\t\t\t</p>
\t\t\t\t
\t\t\t</li>
\t\t\t
\t\t\t\t<li id=\"img25\">
\t\t\t\t<img src=\"pics/albums2015/BDE/francois.jpg\" alt=\"Charles\" />
\t\t\t\t\t<p> <strong> François | Pôle Inté</strong> <br />
\t\t\t\t\t<em> Rôle : </em> 
\t\t\t\t\t<em> Numéro : </em> <br />
\t\t\t\t\t<em> E-mail : </em>
\t\t\t\t</p>
\t\t\t</li>
\t\t\t\t
\t\t\t\t
\t\t\t<li id=\"img26\">
\t\t\t\t<img src=\"pics/albums2015/BDE/cyril.jpg\" alt=\"Charles\" />
\t\t\t\t\t<p> <strong> Cyril | Pôle Inté</strong> <br />
\t\t\t\t\t<em> Rôle : </em> 
\t\t\t\t\t<em> Numéro : </em> <br />
\t\t\t\t\t<em> E-mail : </em>
\t\t\t\t</p>
\t\t\t\t
\t\t\t</li>
\t\t\t\t<li id=\"img27\">
\t\t\t\t<img src=\"pics/albums2015/BDE/antoine.jpg\" alt=\"Charles\" />
\t\t\t\t\t<p> <strong>  Antoine | Pôle Inté</strong> <br />
\t\t\t\t\t<em> Rôle :</em> 
\t\t\t\t\t<em> Numéro :</em> 06-62-87-56-02 <br />
\t\t\t\t\t<em> E-mail : </em>sidali.slimane@outlook.fr
\t\t\t\t</p>
\t\t\t\t
\t\t\t</li>
\t\t\t<li id=\"img28\">
\t\t\t\t<img src=\"pics/albums2015/BDE/slim.jpg\" alt=\"Charles\" />
\t\t\t\t\t<p> <strong>  Slimane | Développeur/Webmaster</strong> <br />
\t\t\t\t\t<em> Rôle :</em> C'est moi! <br /> Mon job c'est développer des solutions informatiques pour le confort de tous
\t\t\t\t\tmais aussi proposer des animations (comme des jeux etc..) pour dynamiser l'école. Enfin, je m'occupe aussi de
\t\t\t\t\tla maintenance des serveurs et de tout ce qui touche de près ou de loin à de l'informatique.
\t\t\t\t\tEvidemment je suis dispo pour répondre à toutes questions dans ce domaine.
\t\t\t\t\t<em> Numéro :</em> 06-62-87-56-02 <br />
\t\t\t\t\t<em> E-mail : </em>sidali.slimane@outlook.fr
\t\t\t\t</p>
\t\t\t\t
\t\t\t</li>
\t\t\t
\t\t</ul>
\t\t
\t</div>
</article>
\t
\t
\t";
        
        $__internal_5406ad2268d38419eeea5f7630c456a93f7d2be311785e939b308ccd4bd06089->leave($__internal_5406ad2268d38419eeea5f7630c456a93f7d2be311785e939b308ccd4bd06089_prof);

    }

    public function getTemplateName()
    {
        return "BDEShowcaseBundle:Default:equipe.html.twig";
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
/* 	<h1> Le     BDE</h1>*/
/* 	*/
/* 	<h3> A quoi ça sert un BDE? </h3>*/
/* 		<p> Un bureau d'élèves sert à bien des choses mais son rôle principal est <strong> d'écouter, aider et animer </strong>. <br />*/
/* 		Ecouter les besoins des élèves mais aussi les aider à mener leurs projets à bout s'ils en ont et enfin animer la vie étudiante de l'école. Aussi, si vous avez besoins*/
/* 		d'aide n'hésitez pas à nous <a href="contact.php"> contacter </a> et nous nous ferons un plaisir de vous être utile.*/
/* 		*/
/* 		</p>*/
/* 	*/
/* 	<h2> Presentation </h2>*/
/* 	*/
/* 	<div id="gallerie">*/
/* 		<div id="shortMenuGallerie" />*/
/* 			<a href="" id="previous">   </a>*/
/* 			<p> 1/27 </p>*/
/* 			<a href="" id="next">   </a>*/
/* 		</div>*/
/* 			*/
/* 		<ul id="gallerie-liste">*/
/* 		*/
/* 			*/
/* 			*/
/* 		*/
/* 			*/
/* 			<li id="img1">*/
/* 				<img src="pics/albums2015/BDE/charles.jpg" alt="Charles" />*/
/* 				<p> <strong>Charles Couturier | Prez'</strong> <br />*/
/* 					<em> Rôle : </em> Il s'occupe un peu de tout,<br /> donc si vous avez une <br />question générale n'hésitez pas à <br />vous adresser à lui. <br />*/
/* 					<em> Numéro : </em> <br />*/
/* 					<em> E-mail : </em>*/
/* 				</p>*/
/* 			</li>*/
/* 			*/
/* 			<li id="img2">*/
/* 				<img src="pics/albums2015/BDE/camille.jpg" alt="Charles" />*/
/* 				<p> <strong> Camille | Vice Prez'</strong> <br />*/
/* 					<em> Rôle : </em> Accompagner le président et faire vivre le BDE. Dispo et souriante elle vous aidera volontiers avec Agathe. <br />*/
/* 					<em> Numéro : </em> <br />*/
/* 					<em> E-mail : </em>*/
/* 				</p>*/
/* 			</li>*/
/* 			*/
/* 			<li id="img3">*/
/* 				<img src="pics/albums2015/BDE/charles.jpg" alt="Charles" />*/
/* 					<p> <strong> Agathe | Vice Prez'</strong> <br />*/
/* 					<em> Rôle : </em> Accompagner le président et faire vivre le BDE. Tout comme Camille elle s'occupe de pas mal de choses au sein du BDE. <br />*/
/* 					<em> Numéro : </em> <br />*/
/* 					<em> E-mail : </em>*/
/* 				</p>*/
/* 			</li>*/
/* 			*/
/* 			<li id="img4">*/
/* 				<img src="pics/albums2015/BDE/albane.jpg" alt="Charles" />*/
/* 					<p> <strong> Albane | Trésorière</strong> <br />*/
/* 					<em> Rôle : </em> S'occuper des finances du BDE. <br /> */
/* 					<em> Numéro : </em> <br />*/
/* 					<em> E-mail : </em>*/
/* 				</p>*/
/* 			</li>*/
/* 			<li id="img5">*/
/* 				<img src="pics/albums2015/BDE/charles.jpg" alt="Charles" />*/
/* 					<p> <strong> Agathe (Villada) | Trésorière </strong> <br />*/
/* 					<em> Rôle : </em> S'occuper des finances du BDE. <br /> */
/* 					<em> Numéro : </em> <br />*/
/* 					<em> E-mail : </em>*/
/* 				</p>*/
/* 			</li>*/
/* 			*/
/* 			<li id="img6">*/
/* 				<img src="pics/albums2015/BDE/charles.jpg" alt="Charles" />*/
/* 					<p> <strong>Alexandre | Trésorier</strong> <br />*/
/* 					<em> Rôle : </em> S'occuper des finances du BDE. <br /> */
/* 					<em> Numéro : </em> <br />*/
/* 					<em> E-mail : </em>*/
/* 				</p>*/
/* 			</li>*/
/* 			*/
/* 			<li id="img7">*/
/* 				<img src="pics/albums2015/BDE/romain.jpg" alt="Charles" />*/
/* 					<p> <strong> Romain | Pôle Sponsors et Partenariats</strong> <br />*/
/* 					<em> Rôle : </em>Trouver des sponsors pour renforcer la trésorerie mais aussi et surtout dénicher de beaux partenariats*/
/* 							qui amènent parfois à des offres très avantageuses pour les mineurs! <br />*/
/* 					<em> Numéro : </em> <br />*/
/* 					<em> E-mail : </em>*/
/* 				</p>*/
/* 			</li>*/
/* 			*/
/* 			<li id="img8">*/
/* 				<img src="pics/albums2015/BDE/gaultier.jpg" alt="Charles" />*/
/* 					<p> <strong> Gaultier</strong> <br />*/
/* 					<em> Rôle : </em> Trouver des sponsors pour renforcer la trésorerie mais aussi et surtout dénicher de beaux partenariats*/
/* 							qui amènent parfois à des offres très avantageuses pour les mineurs! <br />*/
/* 					<em> Numéro : </em> <br />*/
/* 					<em> E-mail : </em>*/
/* 				</p>*/
/* 			</li>*/
/* 			<li id="img9">*/
/* 				<img src="pics/albums2015/BDE/seb.jpg" alt="Charles" />*/
/* 					<p> <strong> Sébastien | Pôle Communication</strong> <br />*/
/* 					<em> Rôle : </em> */
/* 					<em> Numéro : </em> <br />*/
/* 					<em> E-mail : </em>*/
/* 				</p>*/
/* 			</li>*/
/* 			*/
/* 			<li id="img10">*/
/* 				<img src="pics/albums2015/BDE/jeanne.jpg" alt="Charles" />*/
/* 					<p> <strong> Jeanne | Pôle Approvisionnement</strong> <br />*/
/* 					<em> Rôle : </em> */
/* 					<em> Numéro : </em> <br />*/
/* 					<em> E-mail : </em>*/
/* 				</p>*/
/* 			</li>*/
/* 			*/
/* 			<li id="img11">*/
/* 				<img src="pics/albums2015/BDE/madeleine.jpg" alt="Charles" />*/
/* 					<p> <strong> Madeleine | Pôle Events</strong> <br />*/
/* 					<em> Rôle : </em> */
/* 					<em> Numéro : </em> <br />*/
/* 					<em> E-mail : </em>*/
/* 				</p>*/
/* 				*/
/* 			</li>*/
/* 						*/
/* 			<li id="img12">*/
/* 				<img src="pics/albums2015/BDE/mathilde.jpg" alt="Charles" />*/
/* 					<p> <strong> Mathilde | Pôle Events</strong> <br />*/
/* 					<em> Rôle : </em> */
/* 					<em> Numéro : </em> <br />*/
/* 					<em> E-mail : </em>*/
/* 				</p>*/
/* 			</li>*/
/* 			*/
/* 			<li id="img13">*/
/* 				<img src="pics/albums2015/BDE/kevin.jpg" alt="Charles" />*/
/* 					<p> <strong> Kévin | Pôle Technique</strong> <br />*/
/* 					<em> Rôle : </em> */
/* 					<em> Numéro : </em> <br />*/
/* 					<em> E-mail : </em>*/
/* 				</p>*/
/* 			</li>*/
/* 			<li id="img14">*/
/* 				<img src="pics/albums2015/BDE/yann.jpg" alt="Slimane" />*/
/* 					<p> <strong> Yann | Pôle Inté </strong> <br />*/
/* 					<em> Rôle : </em> */
/* 					<em> Numéro : </em> <br />*/
/* 					<em> E-mail : </em>*/
/* 				</p>*/
/* 			</li>*/
/* 			*/
/* 			<li id="img15">*/
/* 				<img src="pics/albums2015/BDE/nicolas.jpg" alt="Charles" />*/
/* 					<p> <strong>Nicolas (Simon) | Pôle Inté</strong> <br />*/
/* 					<em> Rôle : </em> */
/* 					<em> Numéro : </em> <br />*/
/* 					<em> E-mail : </em>*/
/* 				</p>*/
/* 			</li>*/
/* 			*/
/* 			<li id="img16">*/
/* 				<img src="pics/albums2015/BDE/charles.jpg" alt="Charles" />*/
/* 					<p> <strong> Nicolas | Designer/Pôle Communication</strong> <br />*/
/* 					<em> Rôle : </em> */
/* 					<em> Numéro : </em> <br />*/
/* 					<em> E-mail : </em>*/
/* 				</p>*/
/* 			</li>*/
/* 			*/
/* 			<li id="img17">*/
/* 				<img src="pics/albums2015/BDE/alexis.jpg" alt="Charles" />*/
/* 					<p> <strong> Alexis | Pôle Communication</strong> <br />*/
/* 					<em> Rôle : </em> */
/* 					<em> Numéro : </em> <br />*/
/* 					<em> E-mail : </em>*/
/* 				</p>*/
/* 			</li>*/
/* 			<li id="img18">*/
/* 				<img src="pics/albums2015/BDE/aude.jpg" alt="Charles" />*/
/* 					<p> <strong> Aude | Secréataire</strong> <br />*/
/* 					<em> Rôle : </em> */
/* 					<em> Numéro : </em> <br />*/
/* 					<em> E-mail : </em>*/
/* 				</p>*/
/* 			</li>*/
/* 			*/
/* 			<li id="img19">*/
/* 				<img src="pics/albums2015/BDE/aude.jpg" alt="Charles" />*/
/* 					<p> <strong> Edithe | Secréataire</strong> <br />*/
/* 					<em> Rôle : </em> */
/* 					<em> Numéro : </em> <br />*/
/* 					<em> E-mail : </em>*/
/* 				</p>*/
/* 			</li>*/
/* 			*/
/* 			<li id="img20">*/
/* 				<img src="pics/albums2015/BDE/william.jpg" alt="Charles" />*/
/* 					<p> <strong> William | Pôle Approvisionnement</strong> <br />*/
/* 					<em> Rôle : </em> */
/* 					<em> Numéro : </em> <br />*/
/* 					<em> E-mail : </em>*/
/* 				</p>*/
/* 			</li>*/
/* 			*/
/* 			<li id="img21">*/
/* 				<img src="pics/albums2015/BDE/remy.jpg" alt="Charles" />*/
/* 					<p> <strong> Rémy | Pôle Inté</strong> <br />*/
/* 					<em> Rôle : </em> */
/* 					<em> Numéro : </em> <br />*/
/* 					<em> E-mail : </em>*/
/* 				</p>*/
/* 				*/
/* 			</li>*/
/* 			*/
/* 				<li id="img22">*/
/* 				<img src="pics/albums2015/BDE/raphiki.jpg" alt="Charles" />*/
/* 					<p> <strong> Raphaël | Pôle Inté</strong> <br />*/
/* 					<em> Rôle : </em> */
/* 					<em> Numéro : </em> <br />*/
/* 					<em> E-mail : </em>*/
/* 				</p>*/
/* 			</li>*/
/* 			*/
/* 			<li id="img23">*/
/* 				<img src="pics/albums2015/BDE/coco.jpg" alt="Charles" />*/
/* 					<p> <strong> Corentin | Pôle Inté</strong> <br />*/
/* 					<em> Rôle : </em> */
/* 					<em> Numéro : </em> <br />*/
/* 					<em> E-mail : </em>*/
/* 				</p>*/
/* 				*/
/* 			</li>*/
/* 			*/
/* 			<li id="img24">*/
/* 				<img src="pics/albums2015/BDE/anthony.jpg" alt="Charles" />*/
/* 					<p> <strong> Anthony | Pôle Inté</strong> <br />*/
/* 					<em> Rôle : </em> */
/* 					<em> Numéro : </em> <br />*/
/* 					<em> E-mail : </em>*/
/* 				</p>*/
/* 				*/
/* 			</li>*/
/* 			*/
/* 				<li id="img25">*/
/* 				<img src="pics/albums2015/BDE/francois.jpg" alt="Charles" />*/
/* 					<p> <strong> François | Pôle Inté</strong> <br />*/
/* 					<em> Rôle : </em> */
/* 					<em> Numéro : </em> <br />*/
/* 					<em> E-mail : </em>*/
/* 				</p>*/
/* 			</li>*/
/* 				*/
/* 				*/
/* 			<li id="img26">*/
/* 				<img src="pics/albums2015/BDE/cyril.jpg" alt="Charles" />*/
/* 					<p> <strong> Cyril | Pôle Inté</strong> <br />*/
/* 					<em> Rôle : </em> */
/* 					<em> Numéro : </em> <br />*/
/* 					<em> E-mail : </em>*/
/* 				</p>*/
/* 				*/
/* 			</li>*/
/* 				<li id="img27">*/
/* 				<img src="pics/albums2015/BDE/antoine.jpg" alt="Charles" />*/
/* 					<p> <strong>  Antoine | Pôle Inté</strong> <br />*/
/* 					<em> Rôle :</em> */
/* 					<em> Numéro :</em> 06-62-87-56-02 <br />*/
/* 					<em> E-mail : </em>sidali.slimane@outlook.fr*/
/* 				</p>*/
/* 				*/
/* 			</li>*/
/* 			<li id="img28">*/
/* 				<img src="pics/albums2015/BDE/slim.jpg" alt="Charles" />*/
/* 					<p> <strong>  Slimane | Développeur/Webmaster</strong> <br />*/
/* 					<em> Rôle :</em> C'est moi! <br /> Mon job c'est développer des solutions informatiques pour le confort de tous*/
/* 					mais aussi proposer des animations (comme des jeux etc..) pour dynamiser l'école. Enfin, je m'occupe aussi de*/
/* 					la maintenance des serveurs et de tout ce qui touche de près ou de loin à de l'informatique.*/
/* 					Evidemment je suis dispo pour répondre à toutes questions dans ce domaine.*/
/* 					<em> Numéro :</em> 06-62-87-56-02 <br />*/
/* 					<em> E-mail : </em>sidali.slimane@outlook.fr*/
/* 				</p>*/
/* 				*/
/* 			</li>*/
/* 			*/
/* 		</ul>*/
/* 		*/
/* 	</div>*/
/* </article>*/
/* 	*/
/* 	*/
/* 	{%endblock%}*/
