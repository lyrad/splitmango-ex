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
        $__internal_4a22ff264fa461b3799af9b4351b896450c4a3aac2fda52e20f74f67271c9840 = $this->env->getExtension("native_profiler");
        $__internal_4a22ff264fa461b3799af9b4351b896450c4a3aac2fda52e20f74f67271c9840->enter($__internal_4a22ff264fa461b3799af9b4351b896450c4a3aac2fda52e20f74f67271c9840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4a22ff264fa461b3799af9b4351b896450c4a3aac2fda52e20f74f67271c9840->leave($__internal_4a22ff264fa461b3799af9b4351b896450c4a3aac2fda52e20f74f67271c9840_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_144586f02004c7df1183903728e51fd7ecc79f27b9251ccb9f0d501e28c7d39d = $this->env->getExtension("native_profiler");
        $__internal_144586f02004c7df1183903728e51fd7ecc79f27b9251ccb9f0d501e28c7d39d->enter($__internal_144586f02004c7df1183903728e51fd7ecc79f27b9251ccb9f0d501e28c7d39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_144586f02004c7df1183903728e51fd7ecc79f27b9251ccb9f0d501e28c7d39d->leave($__internal_144586f02004c7df1183903728e51fd7ecc79f27b9251ccb9f0d501e28c7d39d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7cce9e3c368d96338eab4339a59d34817c43c045a36801c84e4cb5f8ea88d3ae = $this->env->getExtension("native_profiler");
        $__internal_7cce9e3c368d96338eab4339a59d34817c43c045a36801c84e4cb5f8ea88d3ae->enter($__internal_7cce9e3c368d96338eab4339a59d34817c43c045a36801c84e4cb5f8ea88d3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7cce9e3c368d96338eab4339a59d34817c43c045a36801c84e4cb5f8ea88d3ae->leave($__internal_7cce9e3c368d96338eab4339a59d34817c43c045a36801c84e4cb5f8ea88d3ae_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d88d05b215f46395c9506080565b5a570ef58d70ccbb722b09201631cc4b3980 = $this->env->getExtension("native_profiler");
        $__internal_d88d05b215f46395c9506080565b5a570ef58d70ccbb722b09201631cc4b3980->enter($__internal_d88d05b215f46395c9506080565b5a570ef58d70ccbb722b09201631cc4b3980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d88d05b215f46395c9506080565b5a570ef58d70ccbb722b09201631cc4b3980->leave($__internal_d88d05b215f46395c9506080565b5a570ef58d70ccbb722b09201631cc4b3980_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3d24f4cfbf801eedbe65dd54a6843412d02eff649e283070927af09843f95119 = $this->env->getExtension("native_profiler");
        $__internal_3d24f4cfbf801eedbe65dd54a6843412d02eff649e283070927af09843f95119->enter($__internal_3d24f4cfbf801eedbe65dd54a6843412d02eff649e283070927af09843f95119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3d24f4cfbf801eedbe65dd54a6843412d02eff649e283070927af09843f95119->leave($__internal_3d24f4cfbf801eedbe65dd54a6843412d02eff649e283070927af09843f95119_prof);

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
