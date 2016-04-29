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
        $__internal_80d3f1fe1518b4652c82bb06f588b756d6799e520eae6e52dd67bc1e92aaa2fa = $this->env->getExtension("native_profiler");
        $__internal_80d3f1fe1518b4652c82bb06f588b756d6799e520eae6e52dd67bc1e92aaa2fa->enter($__internal_80d3f1fe1518b4652c82bb06f588b756d6799e520eae6e52dd67bc1e92aaa2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80d3f1fe1518b4652c82bb06f588b756d6799e520eae6e52dd67bc1e92aaa2fa->leave($__internal_80d3f1fe1518b4652c82bb06f588b756d6799e520eae6e52dd67bc1e92aaa2fa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3934ba33c993688b8de0ef7216843ff7e291b6ace39feb5c80773622e94342d5 = $this->env->getExtension("native_profiler");
        $__internal_3934ba33c993688b8de0ef7216843ff7e291b6ace39feb5c80773622e94342d5->enter($__internal_3934ba33c993688b8de0ef7216843ff7e291b6ace39feb5c80773622e94342d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3934ba33c993688b8de0ef7216843ff7e291b6ace39feb5c80773622e94342d5->leave($__internal_3934ba33c993688b8de0ef7216843ff7e291b6ace39feb5c80773622e94342d5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e0b9db6b0f6b760c4db684680d1a43bc0b9b65f39a899fca2fdb8447ec08a60d = $this->env->getExtension("native_profiler");
        $__internal_e0b9db6b0f6b760c4db684680d1a43bc0b9b65f39a899fca2fdb8447ec08a60d->enter($__internal_e0b9db6b0f6b760c4db684680d1a43bc0b9b65f39a899fca2fdb8447ec08a60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e0b9db6b0f6b760c4db684680d1a43bc0b9b65f39a899fca2fdb8447ec08a60d->leave($__internal_e0b9db6b0f6b760c4db684680d1a43bc0b9b65f39a899fca2fdb8447ec08a60d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a3841a1d756706c059e22420da8cbcf416ab3cbd164bb819796d224f02c7e990 = $this->env->getExtension("native_profiler");
        $__internal_a3841a1d756706c059e22420da8cbcf416ab3cbd164bb819796d224f02c7e990->enter($__internal_a3841a1d756706c059e22420da8cbcf416ab3cbd164bb819796d224f02c7e990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a3841a1d756706c059e22420da8cbcf416ab3cbd164bb819796d224f02c7e990->leave($__internal_a3841a1d756706c059e22420da8cbcf416ab3cbd164bb819796d224f02c7e990_prof);

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
