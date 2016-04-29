<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7ab10cedc287575f18120fcdb683ddf973bb5d82b8526f47460e983cac09cc80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d53aa5227fa0e68a6cd8bc1991ef871be6ae17451b0ca2be7dca2604fdd4e428 = $this->env->getExtension("native_profiler");
        $__internal_d53aa5227fa0e68a6cd8bc1991ef871be6ae17451b0ca2be7dca2604fdd4e428->enter($__internal_d53aa5227fa0e68a6cd8bc1991ef871be6ae17451b0ca2be7dca2604fdd4e428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d53aa5227fa0e68a6cd8bc1991ef871be6ae17451b0ca2be7dca2604fdd4e428->leave($__internal_d53aa5227fa0e68a6cd8bc1991ef871be6ae17451b0ca2be7dca2604fdd4e428_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_43d78aebbd33c73b084603eff240c842a599a9956a7b8d0588c04e03a07bd411 = $this->env->getExtension("native_profiler");
        $__internal_43d78aebbd33c73b084603eff240c842a599a9956a7b8d0588c04e03a07bd411->enter($__internal_43d78aebbd33c73b084603eff240c842a599a9956a7b8d0588c04e03a07bd411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_43d78aebbd33c73b084603eff240c842a599a9956a7b8d0588c04e03a07bd411->leave($__internal_43d78aebbd33c73b084603eff240c842a599a9956a7b8d0588c04e03a07bd411_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_96c8ac94a2308003381b2236ff6ccecf294a503ace9e1252c38b1c5bc1b61756 = $this->env->getExtension("native_profiler");
        $__internal_96c8ac94a2308003381b2236ff6ccecf294a503ace9e1252c38b1c5bc1b61756->enter($__internal_96c8ac94a2308003381b2236ff6ccecf294a503ace9e1252c38b1c5bc1b61756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_96c8ac94a2308003381b2236ff6ccecf294a503ace9e1252c38b1c5bc1b61756->leave($__internal_96c8ac94a2308003381b2236ff6ccecf294a503ace9e1252c38b1c5bc1b61756_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6e4cdeea285ad96ee339f3f9277eebf18e184249d3f807765c213adcb8ce2ea5 = $this->env->getExtension("native_profiler");
        $__internal_6e4cdeea285ad96ee339f3f9277eebf18e184249d3f807765c213adcb8ce2ea5->enter($__internal_6e4cdeea285ad96ee339f3f9277eebf18e184249d3f807765c213adcb8ce2ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6e4cdeea285ad96ee339f3f9277eebf18e184249d3f807765c213adcb8ce2ea5->leave($__internal_6e4cdeea285ad96ee339f3f9277eebf18e184249d3f807765c213adcb8ce2ea5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
