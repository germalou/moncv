<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_68437985bcd8cd771d2773cd7f3dd3484d0695c255d4c99fd0ea6798898f3eb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68437985bcd8cd771d2773cd7f3dd3484d0695c255d4c99fd0ea6798898f3eb4->enter($__internal_68437985bcd8cd771d2773cd7f3dd3484d0695c255d4c99fd0ea6798898f3eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_100f5253ef2477af7fbd331a3b8c0b96c7138494389023bdbdcda90a0df3168b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_100f5253ef2477af7fbd331a3b8c0b96c7138494389023bdbdcda90a0df3168b->enter($__internal_100f5253ef2477af7fbd331a3b8c0b96c7138494389023bdbdcda90a0df3168b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68437985bcd8cd771d2773cd7f3dd3484d0695c255d4c99fd0ea6798898f3eb4->leave($__internal_68437985bcd8cd771d2773cd7f3dd3484d0695c255d4c99fd0ea6798898f3eb4_prof);

        
        $__internal_100f5253ef2477af7fbd331a3b8c0b96c7138494389023bdbdcda90a0df3168b->leave($__internal_100f5253ef2477af7fbd331a3b8c0b96c7138494389023bdbdcda90a0df3168b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b3c2de16b97ee8d470007306d7a68d4165a2fb78f3dfd1f738629154a39b0d9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3c2de16b97ee8d470007306d7a68d4165a2fb78f3dfd1f738629154a39b0d9f->enter($__internal_b3c2de16b97ee8d470007306d7a68d4165a2fb78f3dfd1f738629154a39b0d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_36280d222abc36c962227df93fb3fb178f36a47ff3af7756f4d31c0718757cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36280d222abc36c962227df93fb3fb178f36a47ff3af7756f4d31c0718757cc3->enter($__internal_36280d222abc36c962227df93fb3fb178f36a47ff3af7756f4d31c0718757cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_36280d222abc36c962227df93fb3fb178f36a47ff3af7756f4d31c0718757cc3->leave($__internal_36280d222abc36c962227df93fb3fb178f36a47ff3af7756f4d31c0718757cc3_prof);

        
        $__internal_b3c2de16b97ee8d470007306d7a68d4165a2fb78f3dfd1f738629154a39b0d9f->leave($__internal_b3c2de16b97ee8d470007306d7a68d4165a2fb78f3dfd1f738629154a39b0d9f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_caff71578d3111cd25d252e22c0f85bf3a745e385e28a9cd3c3e86677e0c44df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caff71578d3111cd25d252e22c0f85bf3a745e385e28a9cd3c3e86677e0c44df->enter($__internal_caff71578d3111cd25d252e22c0f85bf3a745e385e28a9cd3c3e86677e0c44df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e1c45797814160350f870a980c287363e25a61a31a5bf4e5aacb950662a499ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c45797814160350f870a980c287363e25a61a31a5bf4e5aacb950662a499ce->enter($__internal_e1c45797814160350f870a980c287363e25a61a31a5bf4e5aacb950662a499ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e1c45797814160350f870a980c287363e25a61a31a5bf4e5aacb950662a499ce->leave($__internal_e1c45797814160350f870a980c287363e25a61a31a5bf4e5aacb950662a499ce_prof);

        
        $__internal_caff71578d3111cd25d252e22c0f85bf3a745e385e28a9cd3c3e86677e0c44df->leave($__internal_caff71578d3111cd25d252e22c0f85bf3a745e385e28a9cd3c3e86677e0c44df_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_69c7803ad9e993cc4508ec679a34458b3c853addb7d3807ca5cb6bc64b94ca11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69c7803ad9e993cc4508ec679a34458b3c853addb7d3807ca5cb6bc64b94ca11->enter($__internal_69c7803ad9e993cc4508ec679a34458b3c853addb7d3807ca5cb6bc64b94ca11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d171af4f36f76f16529afe562ed0f870300afc08eb9b96be45af7212fd7c11ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d171af4f36f76f16529afe562ed0f870300afc08eb9b96be45af7212fd7c11ea->enter($__internal_d171af4f36f76f16529afe562ed0f870300afc08eb9b96be45af7212fd7c11ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d171af4f36f76f16529afe562ed0f870300afc08eb9b96be45af7212fd7c11ea->leave($__internal_d171af4f36f76f16529afe562ed0f870300afc08eb9b96be45af7212fd7c11ea_prof);

        
        $__internal_69c7803ad9e993cc4508ec679a34458b3c853addb7d3807ca5cb6bc64b94ca11->leave($__internal_69c7803ad9e993cc4508ec679a34458b3c853addb7d3807ca5cb6bc64b94ca11_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
