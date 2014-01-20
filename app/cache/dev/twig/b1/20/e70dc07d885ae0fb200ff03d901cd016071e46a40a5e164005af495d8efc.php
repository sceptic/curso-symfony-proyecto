<?php

/* ::base.html.twig */
class __TwigTemplate_b120e70dc07d885ae0fb200ff03d901cd016071e46a40a5e164005af495d8efc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["macros"] = $this->env->loadTemplate("macros.html");
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\"/>
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/structure.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/body.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
         <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/assets/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
         <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/assets/css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
         <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
         <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/assets/css/importants.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        ";
        // line 14
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
        <div id=\"content\">
            <div class=\"header clear-fix\">
                <div class=\"header-logo\">
                    <h4>Logo PROYECTO</h4>
                </div>

                <div class=\"search\">
                    <h4>Adrián M.F.</h4>
                </div>
            </div>
            <div class=\"sf-reset\">
            

                ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "            </div>
        </div>
        <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/assets/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 39
        $this->displayBlock('scripts', $context, $blocks);
        // line 40
        echo "    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
    }

    // line 14
    public function block_head($context, array $blocks = array())
    {
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "                     <div class=\"block\">
                        ";
        // line 32
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "                     </div>
                ";
    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
    }

    // line 39
    public function block_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 39,  128 => 32,  123 => 33,  121 => 32,  118 => 31,  115 => 30,  110 => 14,  105 => 7,  99 => 40,  97 => 39,  93 => 38,  89 => 37,  85 => 35,  83 => 30,  66 => 15,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  26 => 2,  24 => 1,  42 => 10,  35 => 6,  31 => 5,  28 => 3,);
    }
}
