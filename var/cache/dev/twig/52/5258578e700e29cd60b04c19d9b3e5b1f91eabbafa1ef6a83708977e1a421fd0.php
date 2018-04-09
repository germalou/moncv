<?php

/* @App/loisirs/create.html.twig */
class __TwigTemplate_74975345b4ffc9604eb0426b55c7b707657ab45bceebccbd72b03699af97faf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_daf5b029d0a16a9558f56ae6298ea0fdd86b378624fef9e4c04d3b8fcd51b480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf5b029d0a16a9558f56ae6298ea0fdd86b378624fef9e4c04d3b8fcd51b480->enter($__internal_daf5b029d0a16a9558f56ae6298ea0fdd86b378624fef9e4c04d3b8fcd51b480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/loisirs/create.html.twig"));

        $__internal_1ab296c31f94a6c683795f2de771fc71fe068b7f2ea6d0c8602cb0b38a7be03b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab296c31f94a6c683795f2de771fc71fe068b7f2ea6d0c8602cb0b38a7be03b->enter($__internal_1ab296c31f94a6c683795f2de771fc71fe068b7f2ea6d0c8602cb0b38a7be03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/loisirs/create.html.twig"));

        // line 1
        echo "<html><body><h3>Creation loisir ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "getName", array(), "method"), "html", null, true);
        echo " </h3>
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validate_create_loisir")));
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
</body>
</html>
";
        
        $__internal_daf5b029d0a16a9558f56ae6298ea0fdd86b378624fef9e4c04d3b8fcd51b480->leave($__internal_daf5b029d0a16a9558f56ae6298ea0fdd86b378624fef9e4c04d3b8fcd51b480_prof);

        
        $__internal_1ab296c31f94a6c683795f2de771fc71fe068b7f2ea6d0c8602cb0b38a7be03b->leave($__internal_1ab296c31f94a6c683795f2de771fc71fe068b7f2ea6d0c8602cb0b38a7be03b_prof);

    }

    public function getTemplateName()
    {
        return "@App/loisirs/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html><body><h3>Creation loisir {{ entity.getName() }} </h3>
{{ form_start(form, {'action': path('validate_create_loisir') }) }}
{{form(form)}}
</body>
</html>
", "@App/loisirs/create.html.twig", "/home/ubuntu/workspace/src/AppBundle/Resources/views/loisirs/create.html.twig");
    }
}
