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
        $__internal_4352084c60c13756750a99c28a542ccf30c23dd28564d6545e44f08ee854d265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4352084c60c13756750a99c28a542ccf30c23dd28564d6545e44f08ee854d265->enter($__internal_4352084c60c13756750a99c28a542ccf30c23dd28564d6545e44f08ee854d265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3ea45426b9ff7e486262511c73d7d7ff86a0a5c94ea30a984a50fd37883d78ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea45426b9ff7e486262511c73d7d7ff86a0a5c94ea30a984a50fd37883d78ae->enter($__internal_3ea45426b9ff7e486262511c73d7d7ff86a0a5c94ea30a984a50fd37883d78ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4352084c60c13756750a99c28a542ccf30c23dd28564d6545e44f08ee854d265->leave($__internal_4352084c60c13756750a99c28a542ccf30c23dd28564d6545e44f08ee854d265_prof);

        
        $__internal_3ea45426b9ff7e486262511c73d7d7ff86a0a5c94ea30a984a50fd37883d78ae->leave($__internal_3ea45426b9ff7e486262511c73d7d7ff86a0a5c94ea30a984a50fd37883d78ae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5f421fea28c237079546b86463248d73e884633359e2c2bc8ef110113d96f7dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f421fea28c237079546b86463248d73e884633359e2c2bc8ef110113d96f7dd->enter($__internal_5f421fea28c237079546b86463248d73e884633359e2c2bc8ef110113d96f7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8ca660f1a73b7567b18ef6f52978624202e23ab3d53e1665c3da7a78e0de8a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca660f1a73b7567b18ef6f52978624202e23ab3d53e1665c3da7a78e0de8a48->enter($__internal_8ca660f1a73b7567b18ef6f52978624202e23ab3d53e1665c3da7a78e0de8a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8ca660f1a73b7567b18ef6f52978624202e23ab3d53e1665c3da7a78e0de8a48->leave($__internal_8ca660f1a73b7567b18ef6f52978624202e23ab3d53e1665c3da7a78e0de8a48_prof);

        
        $__internal_5f421fea28c237079546b86463248d73e884633359e2c2bc8ef110113d96f7dd->leave($__internal_5f421fea28c237079546b86463248d73e884633359e2c2bc8ef110113d96f7dd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e8007629b04c33f2fdbc33f38b357c52d68408caeb52afbe9ac7248fd883cb08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8007629b04c33f2fdbc33f38b357c52d68408caeb52afbe9ac7248fd883cb08->enter($__internal_e8007629b04c33f2fdbc33f38b357c52d68408caeb52afbe9ac7248fd883cb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b9aae64c7981f8c5c8707134acf1bc7c5b2bbc83016c30779309cf0d9612a129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9aae64c7981f8c5c8707134acf1bc7c5b2bbc83016c30779309cf0d9612a129->enter($__internal_b9aae64c7981f8c5c8707134acf1bc7c5b2bbc83016c30779309cf0d9612a129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b9aae64c7981f8c5c8707134acf1bc7c5b2bbc83016c30779309cf0d9612a129->leave($__internal_b9aae64c7981f8c5c8707134acf1bc7c5b2bbc83016c30779309cf0d9612a129_prof);

        
        $__internal_e8007629b04c33f2fdbc33f38b357c52d68408caeb52afbe9ac7248fd883cb08->leave($__internal_e8007629b04c33f2fdbc33f38b357c52d68408caeb52afbe9ac7248fd883cb08_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_714a8389b637cdc54a8986744297b5b661b3aa6def90f069ee04d908b3b5329f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_714a8389b637cdc54a8986744297b5b661b3aa6def90f069ee04d908b3b5329f->enter($__internal_714a8389b637cdc54a8986744297b5b661b3aa6def90f069ee04d908b3b5329f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9d88e799d7527a8e8e872811db1a54f4abd68860c057a9fbb42750c740b2066c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d88e799d7527a8e8e872811db1a54f4abd68860c057a9fbb42750c740b2066c->enter($__internal_9d88e799d7527a8e8e872811db1a54f4abd68860c057a9fbb42750c740b2066c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9d88e799d7527a8e8e872811db1a54f4abd68860c057a9fbb42750c740b2066c->leave($__internal_9d88e799d7527a8e8e872811db1a54f4abd68860c057a9fbb42750c740b2066c_prof);

        
        $__internal_714a8389b637cdc54a8986744297b5b661b3aa6def90f069ee04d908b3b5329f->leave($__internal_714a8389b637cdc54a8986744297b5b661b3aa6def90f069ee04d908b3b5329f_prof);

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
