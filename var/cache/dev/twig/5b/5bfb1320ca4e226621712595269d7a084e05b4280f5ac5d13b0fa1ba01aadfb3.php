<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* paciente/show.html.twig */
class __TwigTemplate_4e7e9d4a6a29fac462395dfc665ca0bfe9b68a06ce7ccfd94158da10ba2d6e1c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paciente/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paciente/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "paciente/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Paciente";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Paciente</h1>

       <div class=\"container\">
         <div class=\"row\">
            <div  class=\"col-lg-6\"></div>
            <div class=\"col-lg-2\">
             ";
        // line 12
        echo twig_include($this->env, $context, "paciente/_delete_form.html.twig");
        echo "
            </div>
               <div class=\"col-lg-2\">
               <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paciente_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["paciente"]) || array_key_exists("paciente", $context) ? $context["paciente"] : (function () { throw new RuntimeError('Variable "paciente" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\">Editar</a>
            </div>
               <div class=\"col-lg-2\">
               <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paciente_index");
        echo "\">Volver a la lista editar</a>
            </div>
        </div>
     </div>
</br>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paciente"]) || array_key_exists("paciente", $context) ? $context["paciente"] : (function () { throw new RuntimeError('Variable "paciente" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre_paciente</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paciente"]) || array_key_exists("paciente", $context) ? $context["paciente"] : (function () { throw new RuntimeError('Variable "paciente" does not exist.', 32, $this->source); })()), "nombrePaciente", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Direccion</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paciente"]) || array_key_exists("paciente", $context) ? $context["paciente"] : (function () { throw new RuntimeError('Variable "paciente" does not exist.', 36, $this->source); })()), "direccion", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecha_nac</th>
                <td>";
        // line 40
        ((twig_get_attribute($this->env, $this->source, (isset($context["paciente"]) || array_key_exists("paciente", $context) ? $context["paciente"] : (function () { throw new RuntimeError('Variable "paciente" does not exist.', 40, $this->source); })()), "fechaNac", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paciente"]) || array_key_exists("paciente", $context) ? $context["paciente"] : (function () { throw new RuntimeError('Variable "paciente" does not exist.', 40, $this->source); })()), "fechaNac", [], "any", false, false, false, 40), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Telefono</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paciente"]) || array_key_exists("paciente", $context) ? $context["paciente"] : (function () { throw new RuntimeError('Variable "paciente" does not exist.', 44, $this->source); })()), "telefono", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "paciente/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 44,  142 => 40,  135 => 36,  128 => 32,  121 => 28,  108 => 18,  102 => 15,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Paciente{% endblock %}

{% block body %}
    <h1>Paciente</h1>

       <div class=\"container\">
         <div class=\"row\">
            <div  class=\"col-lg-6\"></div>
            <div class=\"col-lg-2\">
             {{ include('paciente/_delete_form.html.twig') }}
            </div>
               <div class=\"col-lg-2\">
               <a href=\"{{ path('paciente_edit', {'id': paciente.id}) }}\">Editar</a>
            </div>
               <div class=\"col-lg-2\">
               <a href=\"{{ path('paciente_index') }}\">Volver a la lista editar</a>
            </div>
        </div>
     </div>
</br>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ paciente.id }}</td>
            </tr>
            <tr>
                <th>Nombre_paciente</th>
                <td>{{ paciente.nombrePaciente }}</td>
            </tr>
            <tr>
                <th>Direccion</th>
                <td>{{ paciente.direccion }}</td>
            </tr>
            <tr>
                <th>Fecha_nac</th>
                <td>{{ paciente.fechaNac ? paciente.fechaNac|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Telefono</th>
                <td>{{ paciente.telefono }}</td>
            </tr>
        </tbody>
    </table>

    
{% endblock %}
", "paciente/show.html.twig", "/var/www/html/RegistroPacientes/templates/paciente/show.html.twig");
    }
}
