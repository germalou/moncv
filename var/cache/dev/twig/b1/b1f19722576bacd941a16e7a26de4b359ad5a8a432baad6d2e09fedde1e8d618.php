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
        $__internal_87dc87572c0f539c7023cf14eb011bad8166e5bdab70c057dedd0bbdd9dbcc3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87dc87572c0f539c7023cf14eb011bad8166e5bdab70c057dedd0bbdd9dbcc3f->enter($__internal_87dc87572c0f539c7023cf14eb011bad8166e5bdab70c057dedd0bbdd9dbcc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_eec06a7f4ff1fc3742dc629860fe8a67131c2848f8a4ae4ead0071a98e253e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec06a7f4ff1fc3742dc629860fe8a67131c2848f8a4ae4ead0071a98e253e45->enter($__internal_eec06a7f4ff1fc3742dc629860fe8a67131c2848f8a4ae4ead0071a98e253e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_87dc87572c0f539c7023cf14eb011bad8166e5bdab70c057dedd0bbdd9dbcc3f->leave($__internal_87dc87572c0f539c7023cf14eb011bad8166e5bdab70c057dedd0bbdd9dbcc3f_prof);

        
        $__internal_eec06a7f4ff1fc3742dc629860fe8a67131c2848f8a4ae4ead0071a98e253e45->leave($__internal_eec06a7f4ff1fc3742dc629860fe8a67131c2848f8a4ae4ead0071a98e253e45_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_74f972afbd3c1f1650f695c7627df1e8a14546545f7dd2ed7511cf2fdcb756c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74f972afbd3c1f1650f695c7627df1e8a14546545f7dd2ed7511cf2fdcb756c7->enter($__internal_74f972afbd3c1f1650f695c7627df1e8a14546545f7dd2ed7511cf2fdcb756c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_478d90d89e3a62ea446861fc33a9a9addcfa319507ca397790f29663f613c837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478d90d89e3a62ea446861fc33a9a9addcfa319507ca397790f29663f613c837->enter($__internal_478d90d89e3a62ea446861fc33a9a9addcfa319507ca397790f29663f613c837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_478d90d89e3a62ea446861fc33a9a9addcfa319507ca397790f29663f613c837->leave($__internal_478d90d89e3a62ea446861fc33a9a9addcfa319507ca397790f29663f613c837_prof);

        
        $__internal_74f972afbd3c1f1650f695c7627df1e8a14546545f7dd2ed7511cf2fdcb756c7->leave($__internal_74f972afbd3c1f1650f695c7627df1e8a14546545f7dd2ed7511cf2fdcb756c7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9bf7d2ccc05d983f0d97ab913ff4e7fd5d5672e26f3e06cdcd7dccf75b7791e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf7d2ccc05d983f0d97ab913ff4e7fd5d5672e26f3e06cdcd7dccf75b7791e7->enter($__internal_9bf7d2ccc05d983f0d97ab913ff4e7fd5d5672e26f3e06cdcd7dccf75b7791e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_52fbaa4233ab22080dc6999cc54d24970d595eb9313a781895de42e504ac904c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52fbaa4233ab22080dc6999cc54d24970d595eb9313a781895de42e504ac904c->enter($__internal_52fbaa4233ab22080dc6999cc54d24970d595eb9313a781895de42e504ac904c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_52fbaa4233ab22080dc6999cc54d24970d595eb9313a781895de42e504ac904c->leave($__internal_52fbaa4233ab22080dc6999cc54d24970d595eb9313a781895de42e504ac904c_prof);

        
        $__internal_9bf7d2ccc05d983f0d97ab913ff4e7fd5d5672e26f3e06cdcd7dccf75b7791e7->leave($__internal_9bf7d2ccc05d983f0d97ab913ff4e7fd5d5672e26f3e06cdcd7dccf75b7791e7_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9e655e436c0b8c1c943c2d09d61bb94281e34c8e259a941802ee1cfbd67b317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9e655e436c0b8c1c943c2d09d61bb94281e34c8e259a941802ee1cfbd67b317->enter($__internal_a9e655e436c0b8c1c943c2d09d61bb94281e34c8e259a941802ee1cfbd67b317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a9c612a7f81032ba6b1f990d72cbafc762b9f2d551dca295937f1720c3e2c9dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c612a7f81032ba6b1f990d72cbafc762b9f2d551dca295937f1720c3e2c9dd->enter($__internal_a9c612a7f81032ba6b1f990d72cbafc762b9f2d551dca295937f1720c3e2c9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a9c612a7f81032ba6b1f990d72cbafc762b9f2d551dca295937f1720c3e2c9dd->leave($__internal_a9c612a7f81032ba6b1f990d72cbafc762b9f2d551dca295937f1720c3e2c9dd_prof);

        
        $__internal_a9e655e436c0b8c1c943c2d09d61bb94281e34c8e259a941802ee1cfbd67b317->leave($__internal_a9e655e436c0b8c1c943c2d09d61bb94281e34c8e259a941802ee1cfbd67b317_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_67fd1f81a58d17a2880eb99c127b22d81c275f07f0de729ba17add4367e2d6ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67fd1f81a58d17a2880eb99c127b22d81c275f07f0de729ba17add4367e2d6ac->enter($__internal_67fd1f81a58d17a2880eb99c127b22d81c275f07f0de729ba17add4367e2d6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_398e46b9d17271fb4f038c33a5dd615f8065693a5e62b647d33673ed5c162345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398e46b9d17271fb4f038c33a5dd615f8065693a5e62b647d33673ed5c162345->enter($__internal_398e46b9d17271fb4f038c33a5dd615f8065693a5e62b647d33673ed5c162345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_398e46b9d17271fb4f038c33a5dd615f8065693a5e62b647d33673ed5c162345->leave($__internal_398e46b9d17271fb4f038c33a5dd615f8065693a5e62b647d33673ed5c162345_prof);

        
        $__internal_67fd1f81a58d17a2880eb99c127b22d81c275f07f0de729ba17add4367e2d6ac->leave($__internal_67fd1f81a58d17a2880eb99c127b22d81c275f07f0de729ba17add4367e2d6ac_prof);

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
