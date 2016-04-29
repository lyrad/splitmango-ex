<?php

/* base.html.twig */
class __TwigTemplate_0a1a9bbe84add6c5b5ac44fd5a39603fe8656ef9f163ca02370b12ae9dcd49c5 extends Twig_Template
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
        $__internal_5d226d3e98ce648f40862e24ed019dde90a34c817bdcee6e4125288f6e7654ff = $this->env->getExtension("native_profiler");
        $__internal_5d226d3e98ce648f40862e24ed019dde90a34c817bdcee6e4125288f6e7654ff->enter($__internal_5d226d3e98ce648f40862e24ed019dde90a34c817bdcee6e4125288f6e7654ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5d226d3e98ce648f40862e24ed019dde90a34c817bdcee6e4125288f6e7654ff->leave($__internal_5d226d3e98ce648f40862e24ed019dde90a34c817bdcee6e4125288f6e7654ff_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_59b119e21e3fad4bc419fc457cb6937f6b167adc0f538db309750f4a690e953e = $this->env->getExtension("native_profiler");
        $__internal_59b119e21e3fad4bc419fc457cb6937f6b167adc0f538db309750f4a690e953e->enter($__internal_59b119e21e3fad4bc419fc457cb6937f6b167adc0f538db309750f4a690e953e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_59b119e21e3fad4bc419fc457cb6937f6b167adc0f538db309750f4a690e953e->leave($__internal_59b119e21e3fad4bc419fc457cb6937f6b167adc0f538db309750f4a690e953e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8f6341418d3478222cbd979ea4aee6025528900dfae7e4a3b48b5660d7d62377 = $this->env->getExtension("native_profiler");
        $__internal_8f6341418d3478222cbd979ea4aee6025528900dfae7e4a3b48b5660d7d62377->enter($__internal_8f6341418d3478222cbd979ea4aee6025528900dfae7e4a3b48b5660d7d62377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8f6341418d3478222cbd979ea4aee6025528900dfae7e4a3b48b5660d7d62377->leave($__internal_8f6341418d3478222cbd979ea4aee6025528900dfae7e4a3b48b5660d7d62377_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_62d364fb755f11066c6993a29e0520fdd1e0ba8ba37d31a701becc1eca8f0c85 = $this->env->getExtension("native_profiler");
        $__internal_62d364fb755f11066c6993a29e0520fdd1e0ba8ba37d31a701becc1eca8f0c85->enter($__internal_62d364fb755f11066c6993a29e0520fdd1e0ba8ba37d31a701becc1eca8f0c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_62d364fb755f11066c6993a29e0520fdd1e0ba8ba37d31a701becc1eca8f0c85->leave($__internal_62d364fb755f11066c6993a29e0520fdd1e0ba8ba37d31a701becc1eca8f0c85_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_05480c3f8d6cebd3e2a5d4c04171a07f79c8823e765258e1a12a89859ab6b02d = $this->env->getExtension("native_profiler");
        $__internal_05480c3f8d6cebd3e2a5d4c04171a07f79c8823e765258e1a12a89859ab6b02d->enter($__internal_05480c3f8d6cebd3e2a5d4c04171a07f79c8823e765258e1a12a89859ab6b02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_05480c3f8d6cebd3e2a5d4c04171a07f79c8823e765258e1a12a89859ab6b02d->leave($__internal_05480c3f8d6cebd3e2a5d4c04171a07f79c8823e765258e1a12a89859ab6b02d_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
