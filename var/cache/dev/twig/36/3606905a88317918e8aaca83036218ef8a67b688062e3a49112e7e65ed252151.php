<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86476417f45de77c2e6b7262659e42c4e7b17adf424bcc078ecc6860b263d751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86476417f45de77c2e6b7262659e42c4e7b17adf424bcc078ecc6860b263d751->enter($__internal_86476417f45de77c2e6b7262659e42c4e7b17adf424bcc078ecc6860b263d751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f02a60fd84f025f86683891659dfca2e3b85430016f47e345275648698690d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02a60fd84f025f86683891659dfca2e3b85430016f47e345275648698690d37->enter($__internal_f02a60fd84f025f86683891659dfca2e3b85430016f47e345275648698690d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86476417f45de77c2e6b7262659e42c4e7b17adf424bcc078ecc6860b263d751->leave($__internal_86476417f45de77c2e6b7262659e42c4e7b17adf424bcc078ecc6860b263d751_prof);

        
        $__internal_f02a60fd84f025f86683891659dfca2e3b85430016f47e345275648698690d37->leave($__internal_f02a60fd84f025f86683891659dfca2e3b85430016f47e345275648698690d37_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e924b8069da170fb9fac0232e3c4d0e9c842ae2c50d498893bce721eb79727cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e924b8069da170fb9fac0232e3c4d0e9c842ae2c50d498893bce721eb79727cf->enter($__internal_e924b8069da170fb9fac0232e3c4d0e9c842ae2c50d498893bce721eb79727cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6331e1abd29e1ab7cb4dd062e5f943ae9e34388da6baf3b8717851a91bf71101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6331e1abd29e1ab7cb4dd062e5f943ae9e34388da6baf3b8717851a91bf71101->enter($__internal_6331e1abd29e1ab7cb4dd062e5f943ae9e34388da6baf3b8717851a91bf71101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6331e1abd29e1ab7cb4dd062e5f943ae9e34388da6baf3b8717851a91bf71101->leave($__internal_6331e1abd29e1ab7cb4dd062e5f943ae9e34388da6baf3b8717851a91bf71101_prof);

        
        $__internal_e924b8069da170fb9fac0232e3c4d0e9c842ae2c50d498893bce721eb79727cf->leave($__internal_e924b8069da170fb9fac0232e3c4d0e9c842ae2c50d498893bce721eb79727cf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_45b128cc810beb40ba0f6189c01a6d64130d8b0840273c031ac38d0a09b706d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45b128cc810beb40ba0f6189c01a6d64130d8b0840273c031ac38d0a09b706d1->enter($__internal_45b128cc810beb40ba0f6189c01a6d64130d8b0840273c031ac38d0a09b706d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_beb532980303161118fc3be1c3f3b2cdbf71bf0d32b8dc6ff30c9ccb1129a38a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beb532980303161118fc3be1c3f3b2cdbf71bf0d32b8dc6ff30c9ccb1129a38a->enter($__internal_beb532980303161118fc3be1c3f3b2cdbf71bf0d32b8dc6ff30c9ccb1129a38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_beb532980303161118fc3be1c3f3b2cdbf71bf0d32b8dc6ff30c9ccb1129a38a->leave($__internal_beb532980303161118fc3be1c3f3b2cdbf71bf0d32b8dc6ff30c9ccb1129a38a_prof);

        
        $__internal_45b128cc810beb40ba0f6189c01a6d64130d8b0840273c031ac38d0a09b706d1->leave($__internal_45b128cc810beb40ba0f6189c01a6d64130d8b0840273c031ac38d0a09b706d1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8c2eb4d702e92662c8ce93ae7c9db8b231070cebbac5843c813945760aa82c94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c2eb4d702e92662c8ce93ae7c9db8b231070cebbac5843c813945760aa82c94->enter($__internal_8c2eb4d702e92662c8ce93ae7c9db8b231070cebbac5843c813945760aa82c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8a573473edeb4a40da9658f318d86baea9c24641ee0feba49a96366849704888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a573473edeb4a40da9658f318d86baea9c24641ee0feba49a96366849704888->enter($__internal_8a573473edeb4a40da9658f318d86baea9c24641ee0feba49a96366849704888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_8a573473edeb4a40da9658f318d86baea9c24641ee0feba49a96366849704888->leave($__internal_8a573473edeb4a40da9658f318d86baea9c24641ee0feba49a96366849704888_prof);

        
        $__internal_8c2eb4d702e92662c8ce93ae7c9db8b231070cebbac5843c813945760aa82c94->leave($__internal_8c2eb4d702e92662c8ce93ae7c9db8b231070cebbac5843c813945760aa82c94_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
