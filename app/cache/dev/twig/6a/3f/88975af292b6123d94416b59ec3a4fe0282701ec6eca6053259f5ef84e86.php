<?php

/* ::layout.html.twig */
class __TwigTemplate_6a3f88975af292b6123d94416b59ec3a4fe0282701ec6eca6053259f5ef84e86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block_head' => array($this, 'block_block_head'),
            'title' => array($this, 'block_title'),
            'block_javascript' => array($this, 'block_block_javascript'),
            'block_body' => array($this, 'block_block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        ";
        // line 5
        $this->displayBlock('block_head', $context, $blocks);
        // line 26
        echo "    </head>
    <body>
        ";
        // line 28
        $this->displayBlock('block_javascript', $context, $blocks);
        // line 61
        echo "
        ";
        // line 62
        $this->loadTemplate("::navbarPrincipal.html.twig", "::layout.html.twig", 62)->display($context);
        // line 63
        echo "        ";
        $this->displayBlock('block_body', $context, $blocks);
        // line 65
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_block_head($context, array $blocks = array())
    {
        // line 6
        echo "            <meta charset=\"utf-8\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
            <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
            <!-- Js Tree Styles-->
            <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\">
                <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/heroic-features.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/css.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/dropzone.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />


                <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

                <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/dropzone.js"), "html", null, true);
        echo "\"></script>
            ";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["nomProjet"]) ? $context["nomProjet"] : $this->getContext($context, "nomProjet")), "html", null, true);
    }

    // line 28
    public function block_block_javascript($context, array $blocks = array())
    {
        // line 29
        echo "            <script>
                \$(function () {
                    \$(\".datepicker\").datepicker({
                        showOtherMonths: true,
                        selectOtherMonths: true,
                        dateFormat: \"dd/mm/yy\",
                        showAnim: \"slideDown\",
                        regional: \"fr\",
                        monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
                        monthNamesShort: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aoû', 'Sep', 'Oct', 'Nov', 'Déc'],
                        dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
                        dayNamesShort: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
                        dayNamesMin: ['Di', 'Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa'],
                    });
                    var dropzone = new Dropzone(\"form.dropzone\", {
                        dictDefaultMessage: \" Déposez vos fichiers ici\",
                        maxFiles: 1,
                        accept: function (file, done) {
                            console.log(\"uploaded\");
                            done();
                        },
                        init: function () {
                            this.on(\"maxfilesexceeded\", function (file) {
                                alert(\"No more files please!\");
                            });
                        }
                    });

                });

            </script>
        ";
    }

    // line 63
    public function block_block_body($context, array $blocks = array())
    {
        // line 64
        echo "        ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 64,  157 => 63,  122 => 29,  119 => 28,  113 => 8,  107 => 24,  103 => 23,  98 => 21,  94 => 20,  90 => 19,  84 => 16,  80 => 15,  76 => 14,  72 => 13,  68 => 12,  64 => 11,  58 => 8,  54 => 6,  51 => 5,  45 => 65,  42 => 63,  40 => 62,  37 => 61,  35 => 28,  31 => 26,  29 => 5,  23 => 1,);
    }
}
