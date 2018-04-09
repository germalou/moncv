<?php

/* @App/default/index.html.twig */
class __TwigTemplate_66c3913dc5278e5763cc50c376c78d613a0a8c71a164d3f495f690695fe33425 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff0b2b33d77df63016681be37a7cce8852d858f8e9a3549bea1a1aba9fa9fe77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff0b2b33d77df63016681be37a7cce8852d858f8e9a3549bea1a1aba9fa9fe77->enter($__internal_ff0b2b33d77df63016681be37a7cce8852d858f8e9a3549bea1a1aba9fa9fe77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/index.html.twig"));

        $__internal_615c44d782c14f152d6e43491cc2bee325cb967dfae3a6131b534a13d4d606ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_615c44d782c14f152d6e43491cc2bee325cb967dfae3a6131b534a13d4d606ca->enter($__internal_615c44d782c14f152d6e43491cc2bee325cb967dfae3a6131b534a13d4d606ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff0b2b33d77df63016681be37a7cce8852d858f8e9a3549bea1a1aba9fa9fe77->leave($__internal_ff0b2b33d77df63016681be37a7cce8852d858f8e9a3549bea1a1aba9fa9fe77_prof);

        
        $__internal_615c44d782c14f152d6e43491cc2bee325cb967dfae3a6131b534a13d4d606ca->leave($__internal_615c44d782c14f152d6e43491cc2bee325cb967dfae3a6131b534a13d4d606ca_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c618ee60d4adab28605ee5cdc27a41fb859ee6324dd93f5d8453d2505f3e939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c618ee60d4adab28605ee5cdc27a41fb859ee6324dd93f5d8453d2505f3e939->enter($__internal_3c618ee60d4adab28605ee5cdc27a41fb859ee6324dd93f5d8453d2505f3e939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9150df02614d26a5eea1c13aaa5662e17d8101aa2199e72cf787536741901357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9150df02614d26a5eea1c13aaa5662e17d8101aa2199e72cf787536741901357->enter($__internal_9150df02614d26a5eea1c13aaa5662e17d8101aa2199e72cf787536741901357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary fixed-top\" id=\"sideNav\">
      <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\">
        <span class=\"d-block d-lg-none\">Start Bootstrap</span>
        <span class=\"d-none d-lg-block\">
          <img class=\"img-fluid img-profile rounded-circle mx-auto mb-2\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/profile.jpg"), "html", null, true);
        echo "\" alt=\"\">
        </span>
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav\">
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"#about\">About</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"#experience\">Experience</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"#education\">Education</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"#skills\">Skills</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"#interests\">Interests</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"#awards\">Awards</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class=\"container-fluid p-0\">

      <section class=\"resume-section p-3 p-lg-5 d-flex d-column\" id=\"about\">
        <div class=\"my-auto\">
          <h1 class=\"mb-0\">Louise
            <span class=\"text-primary\">GERMAIN</span>
          </h1>
          <div class=\"subheading mb-5\">22 rue Barnave 38000 Grenoble
            <a href=\"mailto:name@email.com\">louise-germain@outlook.fr</a>
          </div>
          <p class=\"mb-5\">I am experienced in communication strategy.</p>
          <ul class=\"list-inline list-social-icons mb-0\">
            <li class=\"list-inline-item\">
              <a href=\"#\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fa fa-circle fa-stack-2x\"></i>
                  <i class=\"fa fa-facebook fa-stack-1x fa-inverse\"></i>
                </span>
              </a>
            </li>
            <li class=\"list-inline-item\">
              <a href=\"#\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fa fa-circle fa-stack-2x\"></i>
                  <i class=\"fa fa-twitter fa-stack-1x fa-inverse\"></i>
                </span>
              </a>
            </li>
            <li class=\"list-inline-item\">
              <a href=\"#\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fa fa-circle fa-stack-2x\"></i>
                  <i class=\"fa fa-linkedin fa-stack-1x fa-inverse\"></i>
                </span>
              </a>
            </li>
            <li class=\"list-inline-item\">
              <a href=\"#\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fa fa-circle fa-stack-2x\"></i>
                  <i class=\"fa fa-github fa-stack-1x fa-inverse\"></i>
                </span>
              </a>
            </li>
          </ul>
        </div>
      </section>

      <section class=\"resume-section p-3 p-lg-5 d-flex flex-column\" id=\"experience\">
        <div class=\"my-auto\">
          <h2 class=\"mb-5\">Experience</h2>
          
          

          <div class=\"resume-item d-flex flex-column flex-md-row mb-5\">
            <div class=\"resume-content mr-auto\">
              <h3 class=\"mb-0\"></h3>
              <div class=\"subheading mb-3\">Intelitec Solutions</div>
              <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
            </div>
            <div class=\"resume-date text-md-right\">
              <span class=\"text-primary\"></span>
            </div>
          </div>

          <div class=\"resume-item d-flex flex-column flex-md-row mb-5\">
            <div class=\"resume-content mr-auto\">
              <h3 class=\"mb-0\"></h3>
              <div class=\"subheading mb-3\"></div>
              <p></p>
            </div>
            <div class=\"resume-date text-md-right\">
              <span class=\"text-primary\"></span>
            </div>
          </div>

          <div class=\"resume-item d-flex flex-column flex-md-row mb-5\">
            <div class=\"resume-content mr-auto\">
              <h3 class=\"mb-0\"></h3>
              <div class=\"subheading mb-3\"></div>
              <p></p>
            </div>
            <div class=\"resume-date text-md-right\">
              <span class=\"text-primary\"></span>
            </div>
          </div>

          <div class=\"resume-item d-flex flex-column flex-md-row\">
            <div class=\"resume-content mr-auto\">
              <h3 class=\"mb-0\"></h3>
              <div class=\"subheading mb-3\"></div>
              <p></p>
            </div>
            <div class=\"resume-date text-md-right\">
              <span class=\"text-primary\"></span>
            </div>
          </div>

        </div>

      </section>

      <section class=\"resume-section p-3 p-lg-5 d-flex flex-column\" id=\"education\">
        <div class=\"my-auto\">
          <h2 class=\"mb-5\">Formations</h2>
          ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["formations"] ?? $this->getContext($context, "formations")));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 145
            echo "            <div class=\"resume-item d-flex flex-column flex-md-row mb-5\">
              <div class=\"resume-content mr-auto\">
                <h3 class=\"mb-0\">";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "getLieu", array(), "method"), "html", null, true);
            echo "</h3>
                <div class=\"subheading mb-3\">DUT MMI</div>
                <div>";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "getName", array(), "method"), "html", null, true);
            echo "</div>
                <p>GPA: 3.23</p>
              </div>
              <div class=\"resume-date text-md-right\">
                <span class=\"text-primary\">Septembre 2016 - Juin 2018</span>
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "    

        </div>
      </section>

      <section class=\"resume-section p-3 p-lg-5 d-flex flex-column\" id=\"skills\">
        <div class=\"my-auto\">
          <h2 class=\"mb-5\">Compétences</h2>

          <div class=\"subheading mb-3\">Web</div>
          <ul class=\"list-inline list-icons\">
            <li class=\"list-inline-item\">
              <i class=\"devicons devicons-html5\"></i>
            </li>
            <li class=\"list-inline-item\">
              <i class=\"devicons devicons-css3\"></i>
            </li>
            <li class=\"list-inline-item\">
              <i class=\"devicons devicons-javascript\"></i>
            </li>
            <li class=\"list-inline-item\">
              <i class=\"devicons devicons-jquery\"></i>
            </li>
            <li class=\"list-inline-item\">
              <i class=\"devicons devicons-sass\"></i>
            </li>
            <li class=\"list-inline-item\">
              <i class=\"devicons devicons-less\"></i>
            </li>
            <li class=\"list-inline-item\">
              <i class=\"devicons devicons-bootstrap\"></i>
            </li>
            <li class=\"list-inline-item\">
              <i class=\"devicons devicons-wordpress\"></i>
            </li>
            <li class=\"list-inline-item\">
              <i class=\"devicons devicons-grunt\"></i>
            </li>
            <li class=\"list-inline-item\">
              <i class=\"devicons devicons-gulp\"></i>
            </li>
            <li class=\"list-inline-item\">
              <i class=\"devicons devicons-npm\"></i>
            </li>
          </ul>

          <div class=\"subheading mb-3\">Communication</div>
          <ul class=\"fa-ul mb-0\">
            <li>
              <i class=\"fa-li fa fa-check\"></i>
              Stratégie</li>
            <li>
              <i class=\"fa-li fa fa-check\"></i>
              Community Management</li>
            <li>
              <i class=\"fa-li fa fa-check\"></i>
              Infographie</li>
            <li>
              <i class=\"fa-li fa fa-check\"></i>
              Rédaction</li>
          </ul>
        </div>
      </section>

      <section class=\"resume-section p-3 p-lg-5 d-flex flex-column\" id=\"interests\">
        <div class=\"my-auto\">
          <h2 class=\"mb-5\">Interests <a href=\"";
        // line 223
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create_loisirs");
        echo "\">Loisirs</a>
          </h2>
          ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["loisirs"] ?? $this->getContext($context, "loisirs")));
        foreach ($context['_seq'] as $context["_key"] => $context["tmp"]) {
            // line 226
            echo "             <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_loisirs", array("id" => $this->getAttribute($context["tmp"], "getId", array(), "method"))), "html", null, true);
            echo "\">Edit ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tmp"], "getName", array(), "method"), "html", null, true);
            echo "</a><br />
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tmp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        echo "          
         
          ";
        // line 230
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["loisirs"] ?? $this->getContext($context, "loisirs")));
        foreach ($context['_seq'] as $context["_key"] => $context["tmp"]) {
            // line 231
            echo "             <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_loisirs", array("id" => $this->getAttribute($context["tmp"], "getId", array(), "method"))), "html", null, true);
            echo "\">Delete ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tmp"], "getName", array(), "method"), "html", null, true);
            echo "</a><br />
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tmp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        echo "           
          
          <p></p>
          <p class=\"mb-0\">J'aime lire en anglais et en français, le cinéma, me balader, la culture hispanique...</p>
        </div>
      </section>

      <section class=\"resume-section p-3 p-lg-5 d-flex flex-column\" id=\"awards\">
        <div class=\"my-auto\">
          <h2 class=\"mb-5\">Awards &amp; Certifications</h2>
          <ul class=\"fa-ul mb-0\">
            <li>
              <i class=\"fa-li fa fa-trophy text-warning\"></i>
              Google Analytics Certified Developer</li>
            <li>
              <i class=\"fa-li fa fa-trophy text-warning\"></i>
              Mobile Web Specialist - Google Certification</li>
            <li>
              <i class=\"fa-li fa fa-trophy text-warning\"></i>
              1<sup>st</sup>
              Place - University of Colorado Boulder - Emerging Tech Competition 2009</li>
            <li>
              <i class=\"fa-li fa fa-trophy text-warning\"></i>
              1<sup>st</sup>
              Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)</li>
            <li>
              <i class=\"fa-li fa fa-trophy text-warning\"></i>
              2<sup>nd</sup>
              Place - University of Colorado Boulder - Emerging Tech Competition 2008</li>
            <li>
            <li>
              <i class=\"fa-li fa fa-trophy text-warning\"></i>
              1<sup>st</sup>
              Place - James Buchanan High School - Hackathon 2006</li>
            <li>
              <i class=\"fa-li fa fa-trophy text-warning\"></i>
              3<sup>rd</sup>
              Place - James Buchanan High School - Hackathon 2005</li>
          </ul>
        </div>
      </section>

    </div>



</html>
";
        
        $__internal_9150df02614d26a5eea1c13aaa5662e17d8101aa2199e72cf787536741901357->leave($__internal_9150df02614d26a5eea1c13aaa5662e17d8101aa2199e72cf787536741901357_prof);

        
        $__internal_3c618ee60d4adab28605ee5cdc27a41fb859ee6324dd93f5d8453d2505f3e939->leave($__internal_3c618ee60d4adab28605ee5cdc27a41fb859ee6324dd93f5d8453d2505f3e939_prof);

    }

    public function getTemplateName()
    {
        return "@App/default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 233,  317 => 231,  313 => 230,  309 => 228,  298 => 226,  294 => 225,  289 => 223,  221 => 157,  207 => 149,  202 => 147,  198 => 145,  194 => 144,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\"%}

{% block body %}

    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary fixed-top\" id=\"sideNav\">
      <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\">
        <span class=\"d-block d-lg-none\">Start Bootstrap</span>
        <span class=\"d-none d-lg-block\">
          <img class=\"img-fluid img-profile rounded-circle mx-auto mb-2\" src=\"{{ asset ('template/img/profile.jpg') }}\" alt=\"\">
        </span>
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav\">
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"#about\">About</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"#experience\">Experience</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"#education\">Education</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"#skills\">Skills</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"#interests\">Interests</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"#awards\">Awards</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class=\"container-fluid p-0\">

      <section class=\"resume-section p-3 p-lg-5 d-flex d-column\" id=\"about\">
        <div class=\"my-auto\">
          <h1 class=\"mb-0\">Louise
            <span class=\"text-primary\">GERMAIN</span>
          </h1>
          <div class=\"subheading mb-5\">22 rue Barnave 38000 Grenoble
            <a href=\"mailto:name@email.com\">louise-germain@outlook.fr</a>
          </div>
          <p class=\"mb-5\">I am experienced in communication strategy.</p>
          <ul class=\"list-inline list-social-icons mb-0\">
            <li class=\"list-inline-item\">
              <a href=\"#\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fa fa-circle fa-stack-2x\"></i>
                  <i class=\"fa fa-facebook fa-stack-1x fa-inverse\"></i>
                </span>
              </a>
            </li>
            <li class=\"list-inline-item\">
              <a href=\"#\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fa fa-circle fa-stack-2x\"></i>
                  <i class=\"fa fa-twitter fa-stack-1x fa-inverse\"></i>
                </span>
              </a>
            </li>
            <li class=\"list-inline-item\">
              <a href=\"#\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fa fa-circle fa-stack-2x\"></i>
                  <i class=\"fa fa-linkedin fa-stack-1x fa-inverse\"></i>
                </span>
              </a>
            </li>
            <li class=\"list-inline-item\">
              <a href=\"#\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fa fa-circle fa-stack-2x\"></i>
                  <i class=\"fa fa-github fa-stack-1x fa-inverse\"></i>
                </span>
              </a>
            </li>
          </ul>
        </div>
      </section>

      <section class=\"resume-section p-3 p-lg-5 d-flex flex-column\" id=\"experience\">
        <div class=\"my-auto\">
          <h2 class=\"mb-5\">Experience</h2>
          
          

          <div class=\"resume-item d-flex flex-column flex-md-row mb-5\">
            <div class=\"resume-content mr-auto\">
              <h3 class=\"mb-0\"></h3>
              <div class=\"subheading mb-3\">Intelitec Solutions</div>
              <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
            </div>
            <div class=\"resume-date text-md-right\">
              <span class=\"text-primary\"></span>
            </div>
          </div>

          <div class=\"resume-item d-flex flex-column flex-md-row mb-5\">
            <div class=\"resume-content mr-auto\">
              <h3 class=\"mb-0\"></h3>
              <div class=\"subheading mb-3\"></div>
              <p></p>
            </div>
            <div class=\"resume-date text-md-right\">
              <span class=\"text-primary\"></span>
            </div>
          </div>

          <div class=\"resume-item d-flex flex-column flex-md-row mb-5\">
            <div class=\"resume-content mr-auto\">
              <h3 class=\"mb-0\"></h3>
              <div class=\"subheading mb-3\"></div>
              <p></p>
            </div>
            <div class=\"resume-date text-md-right\">
              <span class=\"text-primary\"></span>
            </div>
          </div>

          <div class=\"resume-item d-flex flex-column flex-md-row\">
            <div class=\"resume-content mr-auto\">
              <h3 class=\"mb-0\"></h3>
              <div class=\"subheading mb-3\"></div>
              <p></p>
            </div>
            <div class=\"resume-date text-md-right\">
              <span class=\"text-primary\"></span>
            </div>
          </div>

        </div>

      </section>

      <section class=\"resume-section p-3 p-lg-5 d-flex flex-column\" id=\"education\">
        <div class=\"my-auto\">
          <h2 class=\"mb-5\">Formations</h2>
          {% for formation in formations %}
            <div class=\"resume-item d-flex flex-column flex-md-row mb-5\">
              <div class=\"resume-content mr-auto\">
                <h3 class=\"mb-0\">{{ formation.getLieu() }}</h3>
                <div class=\"subheading mb-3\">DUT MMI</div>
                <div>{{ formation.getName() }}</div>
                <p>GPA: 3.23</p>
              </div>
              <div class=\"resume-date text-md-right\">
                <span class=\"text-primary\">Septembre 2016 - Juin 2018</span>
              </div>
            </div>
          {% endfor %}
    

        </div>
      </section>

      <section class=\"resume-section p-3 p-lg-5 d-flex flex-column\" id=\"skills\">
        <div class=\"my-auto\">
          <h2 class=\"mb-5\">Compétences</h2>

          <div class=\"subheading mb-3\">Web</div>
          <ul class=\"list-inline list-icons\">
            <li class=\"list-inline-item\">
              <i class=\"devicons devicons-html5\"></i>
            </li>
            <li class=\"list-inline-item\">
              <i class=\"devicons devicons-css3\"></i>
            </li>
            <li class=\"list-inline-item\">
              <i class=\"devicons devicons-javascript\"></i>
            </li>
            <li class=\"list-inline-item\">
              <i class=\"devicons devicons-jquery\"></i>
            </li>
            <li class=\"list-inline-item\">
              <i class=\"devicons devicons-sass\"></i>
            </li>
            <li class=\"list-inline-item\">
              <i class=\"devicons devicons-less\"></i>
            </li>
            <li class=\"list-inline-item\">
              <i class=\"devicons devicons-bootstrap\"></i>
            </li>
            <li class=\"list-inline-item\">
              <i class=\"devicons devicons-wordpress\"></i>
            </li>
            <li class=\"list-inline-item\">
              <i class=\"devicons devicons-grunt\"></i>
            </li>
            <li class=\"list-inline-item\">
              <i class=\"devicons devicons-gulp\"></i>
            </li>
            <li class=\"list-inline-item\">
              <i class=\"devicons devicons-npm\"></i>
            </li>
          </ul>

          <div class=\"subheading mb-3\">Communication</div>
          <ul class=\"fa-ul mb-0\">
            <li>
              <i class=\"fa-li fa fa-check\"></i>
              Stratégie</li>
            <li>
              <i class=\"fa-li fa fa-check\"></i>
              Community Management</li>
            <li>
              <i class=\"fa-li fa fa-check\"></i>
              Infographie</li>
            <li>
              <i class=\"fa-li fa fa-check\"></i>
              Rédaction</li>
          </ul>
        </div>
      </section>

      <section class=\"resume-section p-3 p-lg-5 d-flex flex-column\" id=\"interests\">
        <div class=\"my-auto\">
          <h2 class=\"mb-5\">Interests <a href=\"{{path('create_loisirs') }}\">Loisirs</a>
          </h2>
          {% for tmp in loisirs %}
             <a href=\"{{path('edit_loisirs', {'id': tmp.getId() } ) }}\">Edit {{ tmp.getName() }}</a><br />
          {% endfor %}
          
         
          {% for tmp in loisirs %}
             <a href=\"{{path('delete_loisirs', {'id': tmp.getId() } ) }}\">Delete {{ tmp.getName() }}</a><br />
          {% endfor %}
           
          
          <p></p>
          <p class=\"mb-0\">J'aime lire en anglais et en français, le cinéma, me balader, la culture hispanique...</p>
        </div>
      </section>

      <section class=\"resume-section p-3 p-lg-5 d-flex flex-column\" id=\"awards\">
        <div class=\"my-auto\">
          <h2 class=\"mb-5\">Awards &amp; Certifications</h2>
          <ul class=\"fa-ul mb-0\">
            <li>
              <i class=\"fa-li fa fa-trophy text-warning\"></i>
              Google Analytics Certified Developer</li>
            <li>
              <i class=\"fa-li fa fa-trophy text-warning\"></i>
              Mobile Web Specialist - Google Certification</li>
            <li>
              <i class=\"fa-li fa fa-trophy text-warning\"></i>
              1<sup>st</sup>
              Place - University of Colorado Boulder - Emerging Tech Competition 2009</li>
            <li>
              <i class=\"fa-li fa fa-trophy text-warning\"></i>
              1<sup>st</sup>
              Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)</li>
            <li>
              <i class=\"fa-li fa fa-trophy text-warning\"></i>
              2<sup>nd</sup>
              Place - University of Colorado Boulder - Emerging Tech Competition 2008</li>
            <li>
            <li>
              <i class=\"fa-li fa fa-trophy text-warning\"></i>
              1<sup>st</sup>
              Place - James Buchanan High School - Hackathon 2006</li>
            <li>
              <i class=\"fa-li fa fa-trophy text-warning\"></i>
              3<sup>rd</sup>
              Place - James Buchanan High School - Hackathon 2005</li>
          </ul>
        </div>
      </section>

    </div>



</html>
{% endblock %}
", "@App/default/index.html.twig", "/home/ubuntu/workspace/src/AppBundle/Resources/views/default/index.html.twig");
    }
}
