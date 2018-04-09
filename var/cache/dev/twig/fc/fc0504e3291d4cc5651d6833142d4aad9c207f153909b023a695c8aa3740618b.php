<?php

/* @App/loisirs/edit.html.twig */
class __TwigTemplate_92f38526162e8b5676c4242cc8a05be13c89206c04caf836e3326b9c9870e51e extends Twig_Template
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
        $__internal_f5da3010dabd9da1aa8db4f0adfb4a5ffbe0ae04915af2ff676ee6ff527d8aef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5da3010dabd9da1aa8db4f0adfb4a5ffbe0ae04915af2ff676ee6ff527d8aef->enter($__internal_f5da3010dabd9da1aa8db4f0adfb4a5ffbe0ae04915af2ff676ee6ff527d8aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/loisirs/edit.html.twig"));

        $__internal_1c789f69e4b89cc7ec271056841dbdafceb7f9bce537627573e7922feec52b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c789f69e4b89cc7ec271056841dbdafceb7f9bce537627573e7922feec52b44->enter($__internal_1c789f69e4b89cc7ec271056841dbdafceb7f9bce537627573e7922feec52b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/loisirs/edit.html.twig"));

        // line 1
        echo "<html><body><h3>Edition loisir ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "getName", array(), "method"), "html", null, true);
        echo " </h3>
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validate_edit_loisir", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "getId", array(), "method")))));
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
</body>
</html>
";
        
        $__internal_f5da3010dabd9da1aa8db4f0adfb4a5ffbe0ae04915af2ff676ee6ff527d8aef->leave($__internal_f5da3010dabd9da1aa8db4f0adfb4a5ffbe0ae04915af2ff676ee6ff527d8aef_prof);

        
        $__internal_1c789f69e4b89cc7ec271056841dbdafceb7f9bce537627573e7922feec52b44->leave($__internal_1c789f69e4b89cc7ec271056841dbdafceb7f9bce537627573e7922feec52b44_prof);

    }

    public function getTemplateName()
    {
        return "@App/loisirs/edit.html.twig";
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
        return new Twig_Source("<html><body><h3>Edition loisir {{ entity.getName() }} </h3>
{{ form_start(form, {'action': path('validate_edit_loisir', {'id': entity.getId() }) }) }}
{{form(form)}}
</body>
</html>
", "@App/loisirs/edit.html.twig", "/home/ubuntu/workspace/src/AppBundle/Resources/views/loisirs/edit.html.twig");
    }
}
