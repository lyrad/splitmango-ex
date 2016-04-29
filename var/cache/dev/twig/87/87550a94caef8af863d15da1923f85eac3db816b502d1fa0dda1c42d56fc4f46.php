<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_79f374fd10b6e6c344b814111d2b60940fcd604c6f3d31dd09bbee927d51ec17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf8d280332d45618ae677b18292e5f8d70d880fe472c7ff780004bf14b990b2f = $this->env->getExtension("native_profiler");
        $__internal_bf8d280332d45618ae677b18292e5f8d70d880fe472c7ff780004bf14b990b2f->enter($__internal_bf8d280332d45618ae677b18292e5f8d70d880fe472c7ff780004bf14b990b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf8d280332d45618ae677b18292e5f8d70d880fe472c7ff780004bf14b990b2f->leave($__internal_bf8d280332d45618ae677b18292e5f8d70d880fe472c7ff780004bf14b990b2f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_999ab5354173cb10579d5cc24afe3ba863fc4d7f066d8f49ca239a10bcc50ca4 = $this->env->getExtension("native_profiler");
        $__internal_999ab5354173cb10579d5cc24afe3ba863fc4d7f066d8f49ca239a10bcc50ca4->enter($__internal_999ab5354173cb10579d5cc24afe3ba863fc4d7f066d8f49ca239a10bcc50ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_999ab5354173cb10579d5cc24afe3ba863fc4d7f066d8f49ca239a10bcc50ca4->leave($__internal_999ab5354173cb10579d5cc24afe3ba863fc4d7f066d8f49ca239a10bcc50ca4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
