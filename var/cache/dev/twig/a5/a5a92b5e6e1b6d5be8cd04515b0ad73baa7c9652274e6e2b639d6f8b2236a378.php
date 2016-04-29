<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_40e607e307af5899ffecf892673bbce9f3ba72e907e0e78ac2cd9e1cf79e31df extends Twig_Template
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
        $__internal_adc751dac1fe90ff0275d5e4302a08fdaf222b5aef1e13a4b60ab7aa10163840 = $this->env->getExtension("native_profiler");
        $__internal_adc751dac1fe90ff0275d5e4302a08fdaf222b5aef1e13a4b60ab7aa10163840->enter($__internal_adc751dac1fe90ff0275d5e4302a08fdaf222b5aef1e13a4b60ab7aa10163840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adc751dac1fe90ff0275d5e4302a08fdaf222b5aef1e13a4b60ab7aa10163840->leave($__internal_adc751dac1fe90ff0275d5e4302a08fdaf222b5aef1e13a4b60ab7aa10163840_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_59e3f39ed31f7add3b3a50bc27d65ee19260d53e09c9c6af0f3d0001c8f553bf = $this->env->getExtension("native_profiler");
        $__internal_59e3f39ed31f7add3b3a50bc27d65ee19260d53e09c9c6af0f3d0001c8f553bf->enter($__internal_59e3f39ed31f7add3b3a50bc27d65ee19260d53e09c9c6af0f3d0001c8f553bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_59e3f39ed31f7add3b3a50bc27d65ee19260d53e09c9c6af0f3d0001c8f553bf->leave($__internal_59e3f39ed31f7add3b3a50bc27d65ee19260d53e09c9c6af0f3d0001c8f553bf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b502c2a60fc533be085e7c2f1ae0d2a4d4c54b7129a1ef18421a36cadb6ebf3 = $this->env->getExtension("native_profiler");
        $__internal_6b502c2a60fc533be085e7c2f1ae0d2a4d4c54b7129a1ef18421a36cadb6ebf3->enter($__internal_6b502c2a60fc533be085e7c2f1ae0d2a4d4c54b7129a1ef18421a36cadb6ebf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6b502c2a60fc533be085e7c2f1ae0d2a4d4c54b7129a1ef18421a36cadb6ebf3->leave($__internal_6b502c2a60fc533be085e7c2f1ae0d2a4d4c54b7129a1ef18421a36cadb6ebf3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_abb1e89a3da4bd466f27d7e24ea8612d90400aeb80d83ff828664906cc62dc4b = $this->env->getExtension("native_profiler");
        $__internal_abb1e89a3da4bd466f27d7e24ea8612d90400aeb80d83ff828664906cc62dc4b->enter($__internal_abb1e89a3da4bd466f27d7e24ea8612d90400aeb80d83ff828664906cc62dc4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_abb1e89a3da4bd466f27d7e24ea8612d90400aeb80d83ff828664906cc62dc4b->leave($__internal_abb1e89a3da4bd466f27d7e24ea8612d90400aeb80d83ff828664906cc62dc4b_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
