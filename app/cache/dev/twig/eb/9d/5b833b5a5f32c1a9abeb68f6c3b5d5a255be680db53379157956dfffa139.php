<?php

/* macros.html */
class __TwigTemplate_eb9d5b833b5a5f32c1a9abeb68f6c3b5d5a255be680db53379157956dfffa139 extends Twig_Template
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
        // line 5
        echo "
";
        // line 14
        echo "

";
        // line 24
        echo "

";
        // line 30
        echo "


";
        // line 37
        echo "
";
        // line 43
        echo "

";
        // line 50
        echo "
";
        // line 57
        echo "

";
        // line 63
        echo "
 


";
    }

    // line 6
    public function getinput($_label = null, $_type = null, $_name = null, $_id = null, $_value = null, $_is_required = null, $_error = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $_label,
            "type" => $_type,
            "name" => $_name,
            "id" => $_id,
            "value" => $_value,
            "is_required" => $_is_required,
            "error" => $_error,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 7
            echo "\t<label for='";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
            echo "</label>
\t<input class='form-control' type='";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "' ";
            if ((isset($context["is_required"]) ? $context["is_required"] : $this->getContext($context, "is_required"))) {
                echo "required='true' placeholder='";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                echo "'";
            }
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\" id='";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "' value='";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "'/>
\t";
            // line 9
            if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
                // line 10
                echo "\t\t<label for='";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "' class='alert alert-danger'> <img src='/img/test-fail-icon.png'/> &nbsp;";
                echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
                echo "</label>
\t";
            }
            // line 12
            echo "\t<br/>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 16
    public function geteditor($_label = null, $_name = null, $_id = null, $_value = null, $_is_required = null, $_error = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $_label,
            "name" => $_name,
            "id" => $_id,
            "value" => $_value,
            "is_required" => $_is_required,
            "error" => $_error,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 17
            echo "\t<label for='";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
            echo "</label>
\t<textarea class='form-control editor' rows='25' ";
            // line 18
            if ((isset($context["is_required"]) ? $context["is_required"] : $this->getContext($context, "is_required"))) {
                echo "required='true' placeholder='";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                echo "'";
            }
            echo " name='";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "' id='";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "'/>";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "</textarea>
\t";
            // line 19
            if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
                // line 20
                echo "\t\t<label for='";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "' class='alert alert-danger'> <img src='/img/test-fail-icon.png'/> &nbsp;";
                echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
                echo "</label>
\t";
            }
            // line 22
            echo "\t<br/>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 26
    public function getsubmit($_text = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $_text,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 27
            echo "<br/>
<p><input type='submit' value='";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "html", null, true);
            echo "' class=\"btn btn-default\"/></p>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 38
    public function getsuccess($_text = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $_text,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 39
            echo "<div class=\"alert alert-success\">
        <strong>";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "html", null, true);
            echo "</strong>
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 45
    public function getwarning($_text = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $_text,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 46
            echo "<div class=\"alert alert-warning\">
        <strong>";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "html", null, true);
            echo "</strong>
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 54
    public function getlinkButton($_hrf = null, $_text = null)
    {
        $context = $this->env->mergeGlobals(array(
            "hrf" => $_hrf,
            "text" => $_text,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 55
            echo "<a class=\"btn btn-default\">";
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "html", null, true);
            echo "</a></p>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 55,  261 => 54,  247 => 47,  244 => 46,  233 => 45,  219 => 40,  216 => 39,  205 => 38,  192 => 28,  189 => 27,  178 => 26,  166 => 22,  158 => 20,  156 => 19,  142 => 18,  135 => 17,  119 => 16,  107 => 12,  81 => 8,  74 => 7,  57 => 6,  49 => 63,  45 => 57,  38 => 43,  30 => 30,  22 => 14,  19 => 5,  133 => 39,  128 => 32,  123 => 33,  121 => 32,  118 => 31,  115 => 30,  110 => 14,  105 => 7,  99 => 10,  97 => 9,  93 => 38,  89 => 37,  85 => 35,  83 => 30,  66 => 15,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  26 => 24,  24 => 1,  42 => 50,  35 => 37,  31 => 5,  28 => 3,);
    }
}
