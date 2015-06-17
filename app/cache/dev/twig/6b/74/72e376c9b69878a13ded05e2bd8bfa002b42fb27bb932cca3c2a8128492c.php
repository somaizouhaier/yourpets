<?php

/* atnUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_6b7472e376c9b69878a13ded05e2bd8bfa002b42fb27bb932cca3c2a8128492c extends Twig_Template
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
        // line 1
        echo "<div class=\"profil-content\">
    <div class=\"user-settings\">
        <div class=\"main-content-660 yp-bloc\">
            <form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"site-form form-horizontal \">
              <div class=\"site-form-inner\">
                        <div class=\"form-group last-group\">
                            <span class=\"site-form-group-title\">Connexion</span>
                <div class=\"field-group\">
                    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                    <div class=\"control-field control-field-large\">

                        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'errors');
        echo "
                        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"field-group\">
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
                    <div class=\"control-field control-field-large\">

                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'errors');
        echo "
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                
                
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                
                <div>
                    <input type=\"submit\" name=\"contact-submit\" id=\"contact-submit\" value=\"Je modifie\" class=\"btn btn-style is-bold btn-style-white-arrow btn-submit pull-right\" style=\"margin-top: 4%\">
                
                    </div>
                </div>
                </div>
                
            </form>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "atnUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 30,  63 => 23,  59 => 22,  53 => 19,  44 => 13,  40 => 12,  34 => 9,  24 => 4,  19 => 1,);
    }
}
