<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea7a07b95d6eb25678f28431d54be28461059931bc628b4887aeb302628c817a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea7a07b95d6eb25678f28431d54be28461059931bc628b4887aeb302628c817a->enter($__internal_ea7a07b95d6eb25678f28431d54be28461059931bc628b4887aeb302628c817a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_30a0e6f97c72d14f2de2d2da5a7c1a6efbc8e6ed382b6d9bd9b818845219a4df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a0e6f97c72d14f2de2d2da5a7c1a6efbc8e6ed382b6d9bd9b818845219a4df->enter($__internal_30a0e6f97c72d14f2de2d2da5a7c1a6efbc8e6ed382b6d9bd9b818845219a4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_ea7a07b95d6eb25678f28431d54be28461059931bc628b4887aeb302628c817a->leave($__internal_ea7a07b95d6eb25678f28431d54be28461059931bc628b4887aeb302628c817a_prof);

        
        $__internal_30a0e6f97c72d14f2de2d2da5a7c1a6efbc8e6ed382b6d9bd9b818845219a4df->leave($__internal_30a0e6f97c72d14f2de2d2da5a7c1a6efbc8e6ed382b6d9bd9b818845219a4df_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d47e14d0c09e9de52659cfd7ee4c5144a6b507f639abfcb68faab6c36820aae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d47e14d0c09e9de52659cfd7ee4c5144a6b507f639abfcb68faab6c36820aae->enter($__internal_2d47e14d0c09e9de52659cfd7ee4c5144a6b507f639abfcb68faab6c36820aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9473a05f50781e0f6739319b20b20a24b2b88a9f2349dd4963a9f1d53e4dfdce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9473a05f50781e0f6739319b20b20a24b2b88a9f2349dd4963a9f1d53e4dfdce->enter($__internal_9473a05f50781e0f6739319b20b20a24b2b88a9f2349dd4963a9f1d53e4dfdce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9473a05f50781e0f6739319b20b20a24b2b88a9f2349dd4963a9f1d53e4dfdce->leave($__internal_9473a05f50781e0f6739319b20b20a24b2b88a9f2349dd4963a9f1d53e4dfdce_prof);

        
        $__internal_2d47e14d0c09e9de52659cfd7ee4c5144a6b507f639abfcb68faab6c36820aae->leave($__internal_2d47e14d0c09e9de52659cfd7ee4c5144a6b507f639abfcb68faab6c36820aae_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1f3b158f75d1f8fa7938db581a5ef304db3d57a0863470a7475609b6419a1281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f3b158f75d1f8fa7938db581a5ef304db3d57a0863470a7475609b6419a1281->enter($__internal_1f3b158f75d1f8fa7938db581a5ef304db3d57a0863470a7475609b6419a1281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a4c0ff8711150efa64caa0985723add85488a3ab03e68c4c2d3bad65ae6d3bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4c0ff8711150efa64caa0985723add85488a3ab03e68c4c2d3bad65ae6d3bc7->enter($__internal_a4c0ff8711150efa64caa0985723add85488a3ab03e68c4c2d3bad65ae6d3bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a4c0ff8711150efa64caa0985723add85488a3ab03e68c4c2d3bad65ae6d3bc7->leave($__internal_a4c0ff8711150efa64caa0985723add85488a3ab03e68c4c2d3bad65ae6d3bc7_prof);

        
        $__internal_1f3b158f75d1f8fa7938db581a5ef304db3d57a0863470a7475609b6419a1281->leave($__internal_1f3b158f75d1f8fa7938db581a5ef304db3d57a0863470a7475609b6419a1281_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f4b16189f9d63ef94bee1ac8ace6124792fd4bccf7fa449b25e049dc7b40d65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f4b16189f9d63ef94bee1ac8ace6124792fd4bccf7fa449b25e049dc7b40d65->enter($__internal_6f4b16189f9d63ef94bee1ac8ace6124792fd4bccf7fa449b25e049dc7b40d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ed2aeac701bbce5043e3f1055dd7bd7adb14dfa06a74d011c5675af4f0e4b1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed2aeac701bbce5043e3f1055dd7bd7adb14dfa06a74d011c5675af4f0e4b1f->enter($__internal_8ed2aeac701bbce5043e3f1055dd7bd7adb14dfa06a74d011c5675af4f0e4b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8ed2aeac701bbce5043e3f1055dd7bd7adb14dfa06a74d011c5675af4f0e4b1f->leave($__internal_8ed2aeac701bbce5043e3f1055dd7bd7adb14dfa06a74d011c5675af4f0e4b1f_prof);

        
        $__internal_6f4b16189f9d63ef94bee1ac8ace6124792fd4bccf7fa449b25e049dc7b40d65->leave($__internal_6f4b16189f9d63ef94bee1ac8ace6124792fd4bccf7fa449b25e049dc7b40d65_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
