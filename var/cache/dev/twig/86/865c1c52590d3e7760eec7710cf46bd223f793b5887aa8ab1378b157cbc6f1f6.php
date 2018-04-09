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
        $__internal_385645d8e870569073d8b5421f835d9761cb35b110f857347beac60f0debc93b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_385645d8e870569073d8b5421f835d9761cb35b110f857347beac60f0debc93b->enter($__internal_385645d8e870569073d8b5421f835d9761cb35b110f857347beac60f0debc93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_983e1d2bae01ef70610d4470ef4b42ed6a96dc17ca3b77091bd2ad201a08723d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_983e1d2bae01ef70610d4470ef4b42ed6a96dc17ca3b77091bd2ad201a08723d->enter($__internal_983e1d2bae01ef70610d4470ef4b42ed6a96dc17ca3b77091bd2ad201a08723d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_385645d8e870569073d8b5421f835d9761cb35b110f857347beac60f0debc93b->leave($__internal_385645d8e870569073d8b5421f835d9761cb35b110f857347beac60f0debc93b_prof);

        
        $__internal_983e1d2bae01ef70610d4470ef4b42ed6a96dc17ca3b77091bd2ad201a08723d->leave($__internal_983e1d2bae01ef70610d4470ef4b42ed6a96dc17ca3b77091bd2ad201a08723d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cfe3dd93c0ffaa179f7b81b0f30431b3849258aa1d6291598604905683aa4771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfe3dd93c0ffaa179f7b81b0f30431b3849258aa1d6291598604905683aa4771->enter($__internal_cfe3dd93c0ffaa179f7b81b0f30431b3849258aa1d6291598604905683aa4771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2c8ca91671ccc4deced0f8fccdac5a1e788ddd3f5b315ad80b36b36e00f3646c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8ca91671ccc4deced0f8fccdac5a1e788ddd3f5b315ad80b36b36e00f3646c->enter($__internal_2c8ca91671ccc4deced0f8fccdac5a1e788ddd3f5b315ad80b36b36e00f3646c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2c8ca91671ccc4deced0f8fccdac5a1e788ddd3f5b315ad80b36b36e00f3646c->leave($__internal_2c8ca91671ccc4deced0f8fccdac5a1e788ddd3f5b315ad80b36b36e00f3646c_prof);

        
        $__internal_cfe3dd93c0ffaa179f7b81b0f30431b3849258aa1d6291598604905683aa4771->leave($__internal_cfe3dd93c0ffaa179f7b81b0f30431b3849258aa1d6291598604905683aa4771_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0450ced1c57a962921d5070c2d18ec134bbcb2919802622d4ff7cf56c6d13548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0450ced1c57a962921d5070c2d18ec134bbcb2919802622d4ff7cf56c6d13548->enter($__internal_0450ced1c57a962921d5070c2d18ec134bbcb2919802622d4ff7cf56c6d13548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6835de90cbc78d294fffbabfeb02796041012160aac13ce6c764166253b0afb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6835de90cbc78d294fffbabfeb02796041012160aac13ce6c764166253b0afb2->enter($__internal_6835de90cbc78d294fffbabfeb02796041012160aac13ce6c764166253b0afb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6835de90cbc78d294fffbabfeb02796041012160aac13ce6c764166253b0afb2->leave($__internal_6835de90cbc78d294fffbabfeb02796041012160aac13ce6c764166253b0afb2_prof);

        
        $__internal_0450ced1c57a962921d5070c2d18ec134bbcb2919802622d4ff7cf56c6d13548->leave($__internal_0450ced1c57a962921d5070c2d18ec134bbcb2919802622d4ff7cf56c6d13548_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_98cb71a194252836c1e21d303fb9b2add928a7eef48d0388b0df4273662a09ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98cb71a194252836c1e21d303fb9b2add928a7eef48d0388b0df4273662a09ed->enter($__internal_98cb71a194252836c1e21d303fb9b2add928a7eef48d0388b0df4273662a09ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0425a9e91a3d196c32a43723452353234d064a82eb6550be4081f9b00504286f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0425a9e91a3d196c32a43723452353234d064a82eb6550be4081f9b00504286f->enter($__internal_0425a9e91a3d196c32a43723452353234d064a82eb6550be4081f9b00504286f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0425a9e91a3d196c32a43723452353234d064a82eb6550be4081f9b00504286f->leave($__internal_0425a9e91a3d196c32a43723452353234d064a82eb6550be4081f9b00504286f_prof);

        
        $__internal_98cb71a194252836c1e21d303fb9b2add928a7eef48d0388b0df4273662a09ed->leave($__internal_98cb71a194252836c1e21d303fb9b2add928a7eef48d0388b0df4273662a09ed_prof);

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
