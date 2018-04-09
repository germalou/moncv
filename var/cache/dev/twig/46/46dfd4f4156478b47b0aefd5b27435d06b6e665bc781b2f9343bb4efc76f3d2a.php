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
        $__internal_c8d4c0e8b95409ac59e414a2da75d45654f1b3e97ce3d67d723a1f8081bd270f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d4c0e8b95409ac59e414a2da75d45654f1b3e97ce3d67d723a1f8081bd270f->enter($__internal_c8d4c0e8b95409ac59e414a2da75d45654f1b3e97ce3d67d723a1f8081bd270f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_dafbe0bc0047d9f75cc00c9493cb0d81b13627ac7d756f68d9672530aa0d5ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dafbe0bc0047d9f75cc00c9493cb0d81b13627ac7d756f68d9672530aa0d5ba7->enter($__internal_dafbe0bc0047d9f75cc00c9493cb0d81b13627ac7d756f68d9672530aa0d5ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_c8d4c0e8b95409ac59e414a2da75d45654f1b3e97ce3d67d723a1f8081bd270f->leave($__internal_c8d4c0e8b95409ac59e414a2da75d45654f1b3e97ce3d67d723a1f8081bd270f_prof);

        
        $__internal_dafbe0bc0047d9f75cc00c9493cb0d81b13627ac7d756f68d9672530aa0d5ba7->leave($__internal_dafbe0bc0047d9f75cc00c9493cb0d81b13627ac7d756f68d9672530aa0d5ba7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e3f62261ce9d76fbdfbd5fa79b112a71b5f152366e5443696dff6bbf14c0c68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e3f62261ce9d76fbdfbd5fa79b112a71b5f152366e5443696dff6bbf14c0c68->enter($__internal_3e3f62261ce9d76fbdfbd5fa79b112a71b5f152366e5443696dff6bbf14c0c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bf368014275da6021a1e98a84a7dcd3303f35e56d8217c7d55c85a2bdea21bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf368014275da6021a1e98a84a7dcd3303f35e56d8217c7d55c85a2bdea21bae->enter($__internal_bf368014275da6021a1e98a84a7dcd3303f35e56d8217c7d55c85a2bdea21bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bf368014275da6021a1e98a84a7dcd3303f35e56d8217c7d55c85a2bdea21bae->leave($__internal_bf368014275da6021a1e98a84a7dcd3303f35e56d8217c7d55c85a2bdea21bae_prof);

        
        $__internal_3e3f62261ce9d76fbdfbd5fa79b112a71b5f152366e5443696dff6bbf14c0c68->leave($__internal_3e3f62261ce9d76fbdfbd5fa79b112a71b5f152366e5443696dff6bbf14c0c68_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_c8c91b808e437172d8f82972825e3779c98c60db0dfe6ded5d6630dadd8e5821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8c91b808e437172d8f82972825e3779c98c60db0dfe6ded5d6630dadd8e5821->enter($__internal_c8c91b808e437172d8f82972825e3779c98c60db0dfe6ded5d6630dadd8e5821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7597442f6fc73fae2049514aa6a104445c0f106b1461163730d045560ce65f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7597442f6fc73fae2049514aa6a104445c0f106b1461163730d045560ce65f55->enter($__internal_7597442f6fc73fae2049514aa6a104445c0f106b1461163730d045560ce65f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_7597442f6fc73fae2049514aa6a104445c0f106b1461163730d045560ce65f55->leave($__internal_7597442f6fc73fae2049514aa6a104445c0f106b1461163730d045560ce65f55_prof);

        
        $__internal_c8c91b808e437172d8f82972825e3779c98c60db0dfe6ded5d6630dadd8e5821->leave($__internal_c8c91b808e437172d8f82972825e3779c98c60db0dfe6ded5d6630dadd8e5821_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_95b1f1fc065a20b2ecfc733cc136565130a2bfbbe80eda816536bab74d519e6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95b1f1fc065a20b2ecfc733cc136565130a2bfbbe80eda816536bab74d519e6e->enter($__internal_95b1f1fc065a20b2ecfc733cc136565130a2bfbbe80eda816536bab74d519e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b5f742d51760b3449e000981258a8ee1d6dbfddcf65612425571b582a5912ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5f742d51760b3449e000981258a8ee1d6dbfddcf65612425571b582a5912ae->enter($__internal_9b5f742d51760b3449e000981258a8ee1d6dbfddcf65612425571b582a5912ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9b5f742d51760b3449e000981258a8ee1d6dbfddcf65612425571b582a5912ae->leave($__internal_9b5f742d51760b3449e000981258a8ee1d6dbfddcf65612425571b582a5912ae_prof);

        
        $__internal_95b1f1fc065a20b2ecfc733cc136565130a2bfbbe80eda816536bab74d519e6e->leave($__internal_95b1f1fc065a20b2ecfc733cc136565130a2bfbbe80eda816536bab74d519e6e_prof);

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
