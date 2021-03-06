<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1878275fdbc32b660cfbee6afea5d6e15c55adb100b0dbddcb4be415750c22a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e28298e8b03853b64e798073f9dd347f1c5a433b14df6f0519e2b99a016200e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e28298e8b03853b64e798073f9dd347f1c5a433b14df6f0519e2b99a016200e2->enter($__internal_e28298e8b03853b64e798073f9dd347f1c5a433b14df6f0519e2b99a016200e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_12d6c1c1d0a93e377b20ac764d05f7c0858161cbb06fb187e46a85ddb0433c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d6c1c1d0a93e377b20ac764d05f7c0858161cbb06fb187e46a85ddb0433c7f->enter($__internal_12d6c1c1d0a93e377b20ac764d05f7c0858161cbb06fb187e46a85ddb0433c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e28298e8b03853b64e798073f9dd347f1c5a433b14df6f0519e2b99a016200e2->leave($__internal_e28298e8b03853b64e798073f9dd347f1c5a433b14df6f0519e2b99a016200e2_prof);

        
        $__internal_12d6c1c1d0a93e377b20ac764d05f7c0858161cbb06fb187e46a85ddb0433c7f->leave($__internal_12d6c1c1d0a93e377b20ac764d05f7c0858161cbb06fb187e46a85ddb0433c7f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3c4709777de82b352a8740dd9708fd013ff920be8f153bd38b483307778eabc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c4709777de82b352a8740dd9708fd013ff920be8f153bd38b483307778eabc8->enter($__internal_3c4709777de82b352a8740dd9708fd013ff920be8f153bd38b483307778eabc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b5ad4861f78fed786a1541184f774c87c516316afee23bcbae51a1909d4b527d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5ad4861f78fed786a1541184f774c87c516316afee23bcbae51a1909d4b527d->enter($__internal_b5ad4861f78fed786a1541184f774c87c516316afee23bcbae51a1909d4b527d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_b5ad4861f78fed786a1541184f774c87c516316afee23bcbae51a1909d4b527d->leave($__internal_b5ad4861f78fed786a1541184f774c87c516316afee23bcbae51a1909d4b527d_prof);

        
        $__internal_3c4709777de82b352a8740dd9708fd013ff920be8f153bd38b483307778eabc8->leave($__internal_3c4709777de82b352a8740dd9708fd013ff920be8f153bd38b483307778eabc8_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9671c59b53d22c94913bce4bd1a9bc9cbc193cd2bf2ee30f1fcbeee26c930d3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9671c59b53d22c94913bce4bd1a9bc9cbc193cd2bf2ee30f1fcbeee26c930d3e->enter($__internal_9671c59b53d22c94913bce4bd1a9bc9cbc193cd2bf2ee30f1fcbeee26c930d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7b420b2510e6f73c4eb3419ce6e1946a8f18abb2455ed93550be1329928efb6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b420b2510e6f73c4eb3419ce6e1946a8f18abb2455ed93550be1329928efb6d->enter($__internal_7b420b2510e6f73c4eb3419ce6e1946a8f18abb2455ed93550be1329928efb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7b420b2510e6f73c4eb3419ce6e1946a8f18abb2455ed93550be1329928efb6d->leave($__internal_7b420b2510e6f73c4eb3419ce6e1946a8f18abb2455ed93550be1329928efb6d_prof);

        
        $__internal_9671c59b53d22c94913bce4bd1a9bc9cbc193cd2bf2ee30f1fcbeee26c930d3e->leave($__internal_9671c59b53d22c94913bce4bd1a9bc9cbc193cd2bf2ee30f1fcbeee26c930d3e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_69db610fcc92a4469f945e7372194d6835ab7c2c3f73eb21d7f9255e0aa3ad57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69db610fcc92a4469f945e7372194d6835ab7c2c3f73eb21d7f9255e0aa3ad57->enter($__internal_69db610fcc92a4469f945e7372194d6835ab7c2c3f73eb21d7f9255e0aa3ad57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3c01460a8ffe885cbf6531cf81fd65956ff708f99f4728576026285ac09e5bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c01460a8ffe885cbf6531cf81fd65956ff708f99f4728576026285ac09e5bf3->enter($__internal_3c01460a8ffe885cbf6531cf81fd65956ff708f99f4728576026285ac09e5bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3c01460a8ffe885cbf6531cf81fd65956ff708f99f4728576026285ac09e5bf3->leave($__internal_3c01460a8ffe885cbf6531cf81fd65956ff708f99f4728576026285ac09e5bf3_prof);

        
        $__internal_69db610fcc92a4469f945e7372194d6835ab7c2c3f73eb21d7f9255e0aa3ad57->leave($__internal_69db610fcc92a4469f945e7372194d6835ab7c2c3f73eb21d7f9255e0aa3ad57_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
