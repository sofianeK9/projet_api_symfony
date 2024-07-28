<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* mentions_legales/index.html.twig */
class __TwigTemplate_62d6f7a711bbf2ded8c1cdad1936faf6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentions_legales/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentions_legales/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mentions_legales/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Mentions Légales
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "\t<div class=\"legal-notice\">
\t\t<h1>Mentions Légales</h1>
\t\t<section>
\t\t\t<h2>Informations Générales</h2>
\t\t\t<p>
\t\t\t\tLe présent site est édité par :
\t\t\t\t<strong>Dev Factory</strong>,<br>
\t\t\t\tSociété immatriculée au Registre du Commerce et des Sociétés sous le numéro
\t\t\t\t<strong>SIRET : 123 456 789 00000</strong>,<br>
\t\t\t\tdont le siège social est situé au
\t\t\t\t<strong>12 rue des peupliers 75 000 Paris</strong>.
\t\t\t</p>
\t\t\t<p>
\t\t\t\tNuméro de téléphone :
\t\t\t\t<strong>01 23 45 67 89</strong><br>
\t\t\t\tEmail :
\t\t\t\t<strong>contact@dev-factory.com</strong>
\t\t\t</p>
\t\t</section>

\t\t<section>
\t\t\t<h2>Directeur de la Publication</h2>
\t\t\t<p>
\t\t\t\t<strong>Kaya Sofiane</strong><br>
\t\t\t\tEmail :
\t\t\t\t<strong>directeur@dev-factory.com</strong>
\t\t\t</p>
\t\t</section>

\t\t<section>
\t\t\t<h2>Hébergeur</h2>
\t\t\t<p>
\t\t\t\tLe site est hébergé par :
\t\t\t\t<br>
\t\t\t\t<strong>OVH</strong><br>
\t\t\t\tAdresse de l'hébergeur
\t\t\t\t<strong>12 rue de Lille 59 000 Lille</strong><br>
\t\t\t\tTéléphone :
\t\t\t\t<strong>01 23 45 67 89</strong>
\t\t\t</p>
\t\t</section>

\t\t<section>
\t\t\t<h2>Propriété Intellectuelle</h2>
\t\t\t<p>
\t\t\t\tL’ensemble des contenus présents sur ce site (textes, images, vidéos, etc.) est la propriété exclusive de
\t\t\t\t<strong>Nom de la société</strong>, sauf mention contraire. Toute reproduction, distribution, modification,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            adaptation, retransmission ou publication, même partielle, de ces différents éléments est strictement interdite
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            sans l'accord exprès par écrit de
\t\t\t\t<strong>
\t\t\t\t\tDev Factory</strong>.
\t\t\t</p>
\t\t</section>

\t\t<section>
\t\t\t<h2>Responsabilité</h2>
\t\t\t<p>
\t\t\t\t<strong>Dev Factory</strong>
\t\t\t\ts’efforce de fournir des informations aussi précises que possible. Toutefois,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            elle ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.
\t\t\t</p>
\t\t</section>

\t\t<section>
\t\t\t<h2>Protection des Données Personnelles</h2>
\t\t\t<p>
\t\t\t\t<strong>Dev Factory</strong>
\t\t\t\ts'engage à ce que la collecte et le traitement de vos données, effectués à partir du site
\t\t\t\t<strong>dev-factory.com</strong>, soient conformes au règlement général sur la protection des données (RGPD).
\t\t\t</p>
\t\t\t<p>
\t\t\t\tVous disposez d'un droit d'accès, de rectification, de suppression et d'opposition concernant vos données personnelles. Pour
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            l'exercer, adressez-vous à :
\t\t\t\t<strong>protection@dev-factory.com</strong>.
\t\t\t</p>
\t\t</section>

\t\t<section>
\t\t\t<h2>Cookies</h2>
\t\t\t<p>
\t\t\t\tLe site
\t\t\t\t<strong>dev-factory.com</strong>
\t\t\t\tpeut-être amené à vous demander l'acceptation des cookies pour des besoins de
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            statistiques et d'affichage. Un cookie est une information déposée sur votre disque dur par le serveur du site que vous visitez.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            Il contient plusieurs données qui sont stockées sur votre ordinateur dans un simple fichier texte auquel un serveur accède pour
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            lire et enregistrer des informations.
\t\t\t</p>
\t\t</section>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mentions_legales/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  91 => 7,  81 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mentions Légales
{% endblock %}

{% block body %}
\t<div class=\"legal-notice\">
\t\t<h1>Mentions Légales</h1>
\t\t<section>
\t\t\t<h2>Informations Générales</h2>
\t\t\t<p>
\t\t\t\tLe présent site est édité par :
\t\t\t\t<strong>Dev Factory</strong>,<br>
\t\t\t\tSociété immatriculée au Registre du Commerce et des Sociétés sous le numéro
\t\t\t\t<strong>SIRET : 123 456 789 00000</strong>,<br>
\t\t\t\tdont le siège social est situé au
\t\t\t\t<strong>12 rue des peupliers 75 000 Paris</strong>.
\t\t\t</p>
\t\t\t<p>
\t\t\t\tNuméro de téléphone :
\t\t\t\t<strong>01 23 45 67 89</strong><br>
\t\t\t\tEmail :
\t\t\t\t<strong>contact@dev-factory.com</strong>
\t\t\t</p>
\t\t</section>

\t\t<section>
\t\t\t<h2>Directeur de la Publication</h2>
\t\t\t<p>
\t\t\t\t<strong>Kaya Sofiane</strong><br>
\t\t\t\tEmail :
\t\t\t\t<strong>directeur@dev-factory.com</strong>
\t\t\t</p>
\t\t</section>

\t\t<section>
\t\t\t<h2>Hébergeur</h2>
\t\t\t<p>
\t\t\t\tLe site est hébergé par :
\t\t\t\t<br>
\t\t\t\t<strong>OVH</strong><br>
\t\t\t\tAdresse de l'hébergeur
\t\t\t\t<strong>12 rue de Lille 59 000 Lille</strong><br>
\t\t\t\tTéléphone :
\t\t\t\t<strong>01 23 45 67 89</strong>
\t\t\t</p>
\t\t</section>

\t\t<section>
\t\t\t<h2>Propriété Intellectuelle</h2>
\t\t\t<p>
\t\t\t\tL’ensemble des contenus présents sur ce site (textes, images, vidéos, etc.) est la propriété exclusive de
\t\t\t\t<strong>Nom de la société</strong>, sauf mention contraire. Toute reproduction, distribution, modification,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            adaptation, retransmission ou publication, même partielle, de ces différents éléments est strictement interdite
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            sans l'accord exprès par écrit de
\t\t\t\t<strong>
\t\t\t\t\tDev Factory</strong>.
\t\t\t</p>
\t\t</section>

\t\t<section>
\t\t\t<h2>Responsabilité</h2>
\t\t\t<p>
\t\t\t\t<strong>Dev Factory</strong>
\t\t\t\ts’efforce de fournir des informations aussi précises que possible. Toutefois,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            elle ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.
\t\t\t</p>
\t\t</section>

\t\t<section>
\t\t\t<h2>Protection des Données Personnelles</h2>
\t\t\t<p>
\t\t\t\t<strong>Dev Factory</strong>
\t\t\t\ts'engage à ce que la collecte et le traitement de vos données, effectués à partir du site
\t\t\t\t<strong>dev-factory.com</strong>, soient conformes au règlement général sur la protection des données (RGPD).
\t\t\t</p>
\t\t\t<p>
\t\t\t\tVous disposez d'un droit d'accès, de rectification, de suppression et d'opposition concernant vos données personnelles. Pour
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            l'exercer, adressez-vous à :
\t\t\t\t<strong>protection@dev-factory.com</strong>.
\t\t\t</p>
\t\t</section>

\t\t<section>
\t\t\t<h2>Cookies</h2>
\t\t\t<p>
\t\t\t\tLe site
\t\t\t\t<strong>dev-factory.com</strong>
\t\t\t\tpeut-être amené à vous demander l'acceptation des cookies pour des besoins de
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            statistiques et d'affichage. Un cookie est une information déposée sur votre disque dur par le serveur du site que vous visitez.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            Il contient plusieurs données qui sont stockées sur votre ordinateur dans un simple fichier texte auquel un serveur accède pour
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            lire et enregistrer des informations.
\t\t\t</p>
\t\t</section>
\t</div>
{% endblock %}
", "mentions_legales/index.html.twig", "/home/kaya/Bureau/projet_symfony_2/projet/templates/mentions_legales/index.html.twig");
    }
}
