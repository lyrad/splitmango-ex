<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_add2904ff0730ff45bc01b1c460a803b17ae138435bf801f719a7c416a25070e extends Twig_Template
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
        $__internal_6baa68dc8a896687e53eb109e54da518f02c14486dac7dd92652f7839795d56b = $this->env->getExtension("native_profiler");
        $__internal_6baa68dc8a896687e53eb109e54da518f02c14486dac7dd92652f7839795d56b->enter($__internal_6baa68dc8a896687e53eb109e54da518f02c14486dac7dd92652f7839795d56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6baa68dc8a896687e53eb109e54da518f02c14486dac7dd92652f7839795d56b->leave($__internal_6baa68dc8a896687e53eb109e54da518f02c14486dac7dd92652f7839795d56b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_361e07bee6a10bea45e01bb798609868abc29d4ccb9e5c6ccfe397f669087dee = $this->env->getExtension("native_profiler");
        $__internal_361e07bee6a10bea45e01bb798609868abc29d4ccb9e5c6ccfe397f669087dee->enter($__internal_361e07bee6a10bea45e01bb798609868abc29d4ccb9e5c6ccfe397f669087dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_361e07bee6a10bea45e01bb798609868abc29d4ccb9e5c6ccfe397f669087dee->leave($__internal_361e07bee6a10bea45e01bb798609868abc29d4ccb9e5c6ccfe397f669087dee_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0266619ca16b2cf6694cb455e4e25533c8c419709df14d865a52e9c7eae7e97a = $this->env->getExtension("native_profiler");
        $__internal_0266619ca16b2cf6694cb455e4e25533c8c419709df14d865a52e9c7eae7e97a->enter($__internal_0266619ca16b2cf6694cb455e4e25533c8c419709df14d865a52e9c7eae7e97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0266619ca16b2cf6694cb455e4e25533c8c419709df14d865a52e9c7eae7e97a->leave($__internal_0266619ca16b2cf6694cb455e4e25533c8c419709df14d865a52e9c7eae7e97a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_469177b425e6d29f0f972c1d0131c8feb6639ed6c5b1e715d64a617eb9aba1ed = $this->env->getExtension("native_profiler");
        $__internal_469177b425e6d29f0f972c1d0131c8feb6639ed6c5b1e715d64a617eb9aba1ed->enter($__internal_469177b425e6d29f0f972c1d0131c8feb6639ed6c5b1e715d64a617eb9aba1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_469177b425e6d29f0f972c1d0131c8feb6639ed6c5b1e715d64a617eb9aba1ed->leave($__internal_469177b425e6d29f0f972c1d0131c8feb6639ed6c5b1e715d64a617eb9aba1ed_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
