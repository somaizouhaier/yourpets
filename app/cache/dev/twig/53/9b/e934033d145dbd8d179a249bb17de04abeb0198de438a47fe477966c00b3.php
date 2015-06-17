<?php

/* atnUserBundle:Registration:block_register.html.twig */
class __TwigTemplate_539be934033d145dbd8d179a249bb17de04abeb0198de438a47fe477966c00b3 extends Twig_Template
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
        echo "
    
<div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            </div>
            <div>
                <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" >
                <div class=\"col-md-12\">
                    <hgroup> 
                        <h3 class=\"ng-binding\">Nouveau sur Amimal ?</h3> 
                        <h4 class=\"ng-binding\">Rejoignez-nous</h4> 
                    </hgroup>
                    <a class=\"fbConnect\" href=\"\" style=\"display: block;\">
                        <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/facebook.png"), "html", null, true);
        echo "\" height=\"40\">
                        <span style=\"color: white ;padding-top: 10px;color: white;\">Se connecter avec Facebook</span>
                    </a>
                    <div class=\"row\"><div class=\"sign-or ng-binding col-md-12\">ou</div></div>
                    <p>
                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => " Votre prénom")));
        echo "
                    </p>
                    <p>
                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Votre nom")));
        echo "
                        <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Votre nom\">
                    </p>
                    <p>
                        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Enter email")));
        echo "
                    </p>
                    <p>
                        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "mot de passe")));
        echo "
                    </p>
                    <p>
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "confirmer mot de passe")));
        echo "
                    </p>
                    <p>";
        // line 36
        $this->loadTemplate("::pays.html.twig", "atnUserBundle:Registration:block_register.html.twig", 36)->display($context);
        echo "</p>

                </div>
                <div class=\"col-md-12 cadre-button-register\" style=\"margin: 0px 0px 10px;\">
                    <a type=\"submit\" class=\"button-submit-register\"  >S'inscrire sur Amimal </a>
                </div>
                <p class=\"already-signed\">
                    <a href=\"\" class=\"color--cream\">Déjà membre Amimal ?</a>
                </p>
                </form>
            </div>
        </div>
</div>";
    }

    public function getTemplateName()
    {
        return "atnUserBundle:Registration:block_register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 36,  74 => 34,  68 => 31,  62 => 28,  55 => 24,  49 => 21,  41 => 16,  29 => 9,  19 => 1,);
    }
}
