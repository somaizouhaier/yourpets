<?php

/* atnAnimalBundle:Animal:add.html.twig */
class __TwigTemplate_b0b0d4a0301dc818e74b48d2885a522fe9b3cb9676013a5dfead0f365970940b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("atnUserBundle::layout.html.twig", "atnAnimalBundle:Animal:add.html.twig", 1);
        $this->blocks = array(
            'user_content' => array($this, 'block_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "atnUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "atnUserBundle:Form:fieldsCoordonnees.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_user_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <div class=\"container main \">
        <div class=\"container basic-page\">
            <div class=\"content-main  pull-left\">
                <h1 class=\"content-main-title is-uppercase nomargin\">Mon animal</h1>
                <span class=\"error-form\">* Les champs suivis d'un astérisque sont obligatoires</span>

                <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("atn_amimal_add");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"site-form form-horizontal\">

                    <div class=\"site-form-inner\">
                        <div class=\"form-group last-group\">
                            <div class=\"site-form-group-title\">Mes coordonnées</div>

                            <div class=\"field-group\">
                                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pseudo", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "                                                    
                                <div class=\"control-field control-field-large\">
                                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pseudo", array()), 'errors');
        echo "
                                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pseudo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"field-group\">
                                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "                                                    
                                <div class=\"control-field control-field-large\">
                                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
                                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"field-group\">
                                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "                                                    
                                <div class=\"control-field control-field-large\">
                                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'errors');
        echo "
                                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"field-group\">
                                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "race", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "                                                    
                                <div class=\"control-field control-field-large\">
                                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "race", array()), 'errors');
        echo "
                                    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "race", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"field-group\">
                                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance", array()), 'label', array("label_attr" => array("class" => "control-label ")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "                                                    
                                <div class=\"control-field control-field-large\">
                                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance", array()), 'errors');
        echo "
                                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance", array()), 'widget', array("attr" => array("class" => "form-control datepicker")));
        echo "

                                </div>
                                <div class=\"clearfix\"></div>
                            </div>

                            <div class=\"field-group\">
                                ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'label', array("label_attr" => array("class" => "control-label ")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "                                                    

                                <span class=\"control-field-large upload-file\"> 
                                    <span class=\"yp-btn upload-left ng-binding\"> 
                                        Choisir une photo
                                        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget', array("attr" => array("class" => "upload-input ng-pristine ng-valid ng-isolate-scope ng-touched")));
        echo "
                                    </span> 
                                    <span class=\"upload-right\"> 
                                        <span class=\"upload-filename ng-binding\">  
                                        </span> 
                                    </span> 
                                </span>

                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                    </div>

                    ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                    <input type=\"submit\" name=\"contact-submit\" id=\"contact-submit\" value=\"Je valide\" class=\"btn btn-style is-bold btn-style-white-arrow btn-submit pull-right\" style=\"margin-top: 4%\">
                </form>
            </div>

            <div class=\"content-main-sidebar pull-left\">
                <div class=\"content-main-sidebar-block with-shadow content-main-sidebar-user-info\">
                    <img src=\"http://d83vwgwvylun0.cloudfront.net/img/752Race.jpg\" id=\"photoAnimalRace\" width=\"100%\">
                </div>
            </div>
        </div>
    </div>
    <script>
        \$.ajax({
            dataType: \"json\",
            url: \"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("atn_amimal_race_ajax");
        echo "\",
            data: {id_type: \$('#atn_animal_add_type').val()},
            success: function (data) {
                \$('#atn_animal_add_race').html(\"\");
                \$.each(data.type, function (i, val) {
                    \$('#atn_animal_add_race').append('<option value=\"' + val.id + '\" photo=\"' + val.image + '\">' + val.labelle + '</option>');
                });

            }
        });
        \$('#atn_animal_add_type').change(function () {
            \$.ajax({
                dataType: \"json\",
                url: \"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("atn_amimal_race_ajax");
        echo "\",
                data: {id_type: \$('#atn_animal_add_type').val()},
                success: function (data) {
                    \$('#atn_animal_add_race').html(\"\");
                    \$.each(data.type, function (i, val) {
                        \$('#atn_animal_add_race').append('<option value=\"' + val.id + '\" photo=\"' + val.image + '\">' + val.labelle + '</option>');
                    });

                }
            });
        });

//--------------------------upload fichier-------------------------------
        \$('#atn_animal_add_race').change(function () {
            var optionSelected = \$('#atn_animal_add_race').find('[value=\"' + \$(this).val() + '\"]');
            \$('#photoAnimalRace').attr('src', optionSelected.attr('photo'));
        })
        document.getElementById(\"atn_animal_add_file\").onchange = function () {
            \$('.upload-filename').html(this.value);
        };
//--------------------------fin upload fichier-------------------------------
    </script>

";
    }

    public function getTemplateName()
    {
        return "atnAnimalBundle:Animal:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 107,  184 => 94,  166 => 79,  150 => 66,  142 => 61,  132 => 54,  128 => 53,  123 => 51,  115 => 46,  111 => 45,  106 => 43,  98 => 38,  94 => 37,  89 => 35,  81 => 30,  77 => 29,  72 => 27,  64 => 22,  60 => 21,  55 => 19,  43 => 12,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }
}
