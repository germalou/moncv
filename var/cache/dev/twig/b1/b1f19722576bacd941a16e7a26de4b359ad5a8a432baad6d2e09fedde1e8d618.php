<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5a6d8b764388a105375a6bd5192238919306fe567217f51887ed8ec51c55407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5a6d8b764388a105375a6bd5192238919306fe567217f51887ed8ec51c55407->enter($__internal_a5a6d8b764388a105375a6bd5192238919306fe567217f51887ed8ec51c55407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2f1083c917478859cd5bca2ad84ef30a7eba52e1279b08aa764c285da4435465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f1083c917478859cd5bca2ad84ef30a7eba52e1279b08aa764c285da4435465->enter($__internal_2f1083c917478859cd5bca2ad84ef30a7eba52e1279b08aa764c285da4435465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    </body>
</html>
";
        
        $__internal_a5a6d8b764388a105375a6bd5192238919306fe567217f51887ed8ec51c55407->leave($__internal_a5a6d8b764388a105375a6bd5192238919306fe567217f51887ed8ec51c55407_prof);

        
        $__internal_2f1083c917478859cd5bca2ad84ef30a7eba52e1279b08aa764c285da4435465->leave($__internal_2f1083c917478859cd5bca2ad84ef30a7eba52e1279b08aa764c285da4435465_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_36648f5566c0d368fc574c4eba848de6e1a8e66e9fe2a3c610641f694d3ee478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36648f5566c0d368fc574c4eba848de6e1a8e66e9fe2a3c610641f694d3ee478->enter($__internal_36648f5566c0d368fc574c4eba848de6e1a8e66e9fe2a3c610641f694d3ee478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d92adbe6e7c5b209c75e49563b3206a2f77007e40e543343dd12dcaed3192c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92adbe6e7c5b209c75e49563b3206a2f77007e40e543343dd12dcaed3192c6f->enter($__internal_d92adbe6e7c5b209c75e49563b3206a2f77007e40e543343dd12dcaed3192c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d92adbe6e7c5b209c75e49563b3206a2f77007e40e543343dd12dcaed3192c6f->leave($__internal_d92adbe6e7c5b209c75e49563b3206a2f77007e40e543343dd12dcaed3192c6f_prof);

        
        $__internal_36648f5566c0d368fc574c4eba848de6e1a8e66e9fe2a3c610641f694d3ee478->leave($__internal_36648f5566c0d368fc574c4eba848de6e1a8e66e9fe2a3c610641f694d3ee478_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_db35a327ddb67d2c4a76fb4e49e61446d16019a3c5a7924ee6498c85a52d803d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db35a327ddb67d2c4a76fb4e49e61446d16019a3c5a7924ee6498c85a52d803d->enter($__internal_db35a327ddb67d2c4a76fb4e49e61446d16019a3c5a7924ee6498c85a52d803d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ac3ebec6d25b9d8a42148b34d0aa7e2e458c5c39cdd717564c044a224082319c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac3ebec6d25b9d8a42148b34d0aa7e2e458c5c39cdd717564c044a224082319c->enter($__internal_ac3ebec6d25b9d8a42148b34d0aa7e2e458c5c39cdd717564c044a224082319c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom fonts for this template -->
    <link href=\"https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/vendor/devicons/css/devicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/vendor/simple-line-icons/css/simple-line-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/resume.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_ac3ebec6d25b9d8a42148b34d0aa7e2e458c5c39cdd717564c044a224082319c->leave($__internal_ac3ebec6d25b9d8a42148b34d0aa7e2e458c5c39cdd717564c044a224082319c_prof);

        
        $__internal_db35a327ddb67d2c4a76fb4e49e61446d16019a3c5a7924ee6498c85a52d803d->leave($__internal_db35a327ddb67d2c4a76fb4e49e61446d16019a3c5a7924ee6498c85a52d803d_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_d620a62de452d91f403a06d16f36cd5a0af2719f922ef66f706448735e764ccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d620a62de452d91f403a06d16f36cd5a0af2719f922ef66f706448735e764ccb->enter($__internal_d620a62de452d91f403a06d16f36cd5a0af2719f922ef66f706448735e764ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af80210848ab6c3cab87993c796e67b3e3583622b3f96124a412eb0cf91e040b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af80210848ab6c3cab87993c796e67b3e3583622b3f96124a412eb0cf91e040b->enter($__internal_af80210848ab6c3cab87993c796e67b3e3583622b3f96124a412eb0cf91e040b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_af80210848ab6c3cab87993c796e67b3e3583622b3f96124a412eb0cf91e040b->leave($__internal_af80210848ab6c3cab87993c796e67b3e3583622b3f96124a412eb0cf91e040b_prof);

        
        $__internal_d620a62de452d91f403a06d16f36cd5a0af2719f922ef66f706448735e764ccb->leave($__internal_d620a62de452d91f403a06d16f36cd5a0af2719f922ef66f706448735e764ccb_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2f211b211e355a1b4e57e49a27afae002f4ebcab2173e346c8989d63e90a58f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f211b211e355a1b4e57e49a27afae002f4ebcab2173e346c8989d63e90a58f8->enter($__internal_2f211b211e355a1b4e57e49a27afae002f4ebcab2173e346c8989d63e90a58f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c7092908f338f94af0bba04ae31b3b7f70e56a5290988e6980331ac5b152f1f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7092908f338f94af0bba04ae31b3b7f70e56a5290988e6980331ac5b152f1f5->enter($__internal_c7092908f338f94af0bba04ae31b3b7f70e56a5290988e6980331ac5b152f1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "        <!-- Bootstrap core JavaScript -->
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Plugin JavaScript -->
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom scripts for this template -->
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/resume.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_c7092908f338f94af0bba04ae31b3b7f70e56a5290988e6980331ac5b152f1f5->leave($__internal_c7092908f338f94af0bba04ae31b3b7f70e56a5290988e6980331ac5b152f1f5_prof);

        
        $__internal_2f211b211e355a1b4e57e49a27afae002f4ebcab2173e346c8989d63e90a58f8->leave($__internal_2f211b211e355a1b4e57e49a27afae002f4ebcab2173e346c8989d63e90a58f8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 33,  168 => 30,  162 => 27,  158 => 26,  155 => 25,  146 => 24,  129 => 23,  117 => 18,  111 => 15,  107 => 14,  103 => 13,  95 => 8,  92 => 7,  83 => 6,  65 => 5,  53 => 35,  50 => 24,  48 => 23,  41 => 20,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
        <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('template/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Custom fonts for this template -->
    <link href=\"https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i\" rel=\"stylesheet\">
    <link href=\"{{ asset ('template/vendor/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset ('template/vendor/devicons/css/devicons.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset ('template/vendor/simple-line-icons/css/simple-line-icons.css') }}\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"{{ asset ('template/css/resume.min.css') }}\" rel=\"stylesheet\">
    {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
        <!-- Bootstrap core JavaScript -->
    <script src=\"{{ asset ('template/vendor/jquery/jquery.min.js') }}\"></script>
    <script src=\"{{ asset ('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>

    <!-- Plugin JavaScript -->
    <script src=\"{{ asset ('template/vendor/jquery-easing/jquery.easing.min.js') }}\"></script>

    <!-- Custom scripts for this template -->
    <script src=\"{{ asset ('template/js/resume.min.js') }}\"></script>
    {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/ubuntu/workspace/app/Resources/views/base.html.twig");
    }
}
