<?php

/* youtube/query.html.twig */
class __TwigTemplate_a8c532416f6ef887c022cc16b45d31523938bea4e061b1b1ae465a42ec7884b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e680c49dc218081fc3233a377ecb71ff8f9eb8f763b51c794b2734b619770b2 = $this->env->getExtension("native_profiler");
        $__internal_0e680c49dc218081fc3233a377ecb71ff8f9eb8f763b51c794b2734b619770b2->enter($__internal_0e680c49dc218081fc3233a377ecb71ff8f9eb8f763b51c794b2734b619770b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "youtube/query.html.twig"));

        // line 1
        echo "<html>
<head>
</head>
<body>
\t<h1>Youtube querying app</h1>
\t<form id=\"youtubequery\" method=\"POST\" action=\"\">
\t\t<label for=\"url\">Please input a youtube channel URL</label>
\t\t<input id=\"url\" name=\"url\" type=\"text\" style=\"width: 400px\">
\t\t<button>Query</button>
\t</form>
</body>
</html>
";
        
        $__internal_0e680c49dc218081fc3233a377ecb71ff8f9eb8f763b51c794b2734b619770b2->leave($__internal_0e680c49dc218081fc3233a377ecb71ff8f9eb8f763b51c794b2734b619770b2_prof);

    }

    public function getTemplateName()
    {
        return "youtube/query.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <html>*/
/* <head>*/
/* </head>*/
/* <body>*/
/* 	<h1>Youtube querying app</h1>*/
/* 	<form id="youtubequery" method="POST" action="">*/
/* 		<label for="url">Please input a youtube channel URL</label>*/
/* 		<input id="url" name="url" type="text" style="width: 400px">*/
/* 		<button>Query</button>*/
/* 	</form>*/
/* </body>*/
/* </html>*/
/* */
