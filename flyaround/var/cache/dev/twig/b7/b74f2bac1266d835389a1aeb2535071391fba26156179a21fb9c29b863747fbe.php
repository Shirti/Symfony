<?php

/* listing/index.html.twig */
class __TwigTemplate_1d5ebd02734a76427c25b537c99dd98ae442597b4ff03bded809cae70d01ab34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "listing/index.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listing/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listing/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>List</h1>

    <table>
        <tbody>
        <tr>
            <th>Reservation Number (id)</th>
            <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "id", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Flight Number (id)</th>
            <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "id", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Reservation's Seat</th>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "NbReservedSeats", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Flight's departure</th>
            <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "departure", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Flight's arrival</th>
            <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "arrival", array()), "html", null, true);
        echo "</td>
        </tr>
        ";
        // line 30
        if (($this->getAttribute($this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "pilot", array()), "isAcertifiedPilot", array()) == 1)) {
            // line 31
            echo "            <tr>
                <th>Pilot</th>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "pilot", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 36
        echo "        <tr>
            <th>Plane model</th>
            <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["planemodel"] ?? $this->getContext($context, "planemodel")), "model", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Cruise Speed</th>
            <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["planemodel"] ?? $this->getContext($context, "planemodel")), "cruiseSpeed", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Flight's description</th>
            <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "description", array()), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"/\">Return to homepage</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "listing/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 46,  113 => 42,  106 => 38,  102 => 36,  96 => 33,  92 => 31,  90 => 30,  85 => 28,  78 => 24,  71 => 20,  64 => 16,  57 => 12,  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/default/index.html.twig #}

{% extends 'base.html.twig' %}

{% block body %}
    <h1>List</h1>

    <table>
        <tbody>
        <tr>
            <th>Reservation Number (id)</th>
            <td>{{ reservation.id }}</td>
        </tr>
        <tr>
            <th>Flight Number (id)</th>
            <td>{{ flight.id }}</td>
        </tr>
        <tr>
            <th>Reservation's Seat</th>
            <td>{{ reservation.NbReservedSeats }}</td>
        </tr>
        <tr>
            <th>Flight's departure</th>
            <td>{{ flight.departure }}</td>
        </tr>
        <tr>
            <th>Flight's arrival</th>
            <td>{{ flight.arrival }}</td>
        </tr>
        {% if flight.pilot.isAcertifiedPilot == 1 %}
            <tr>
                <th>Pilot</th>
                <td>{{ flight.pilot }}</td>
            </tr>
        {% endif %}
        <tr>
            <th>Plane model</th>
            <td>{{ planemodel.model }}</td>
        </tr>
        <tr>
            <th>Cruise Speed</th>
            <td>{{ planemodel.cruiseSpeed }}</td>
        </tr>
        <tr>
            <th>Flight's description</th>
            <td>{{ flight.description }}</td>
        </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"/\">Return to homepage</a>
        </li>
    </ul>
{% endblock %}", "listing/index.html.twig", "/Users/hirtisalemine/flyaround/app/Resources/views/listing/index.html.twig");
    }
}
