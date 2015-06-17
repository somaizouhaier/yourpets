<?php

/* atnUserBundle:Security:block_login.html.twig */
class __TwigTemplate_602e3b4120201ef8599e54becdc1a0547777de6a70020feae6d986085d77ce23 extends Twig_Template
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
        echo "<div id=\"connecter\" class=\"modal \">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            </div>
            <div>
                <div class=\"col-md-12\">
                    <hgroup> 
                        <h3 class=\"ng-binding\">Déjà membre Yummypets ?</h3> 
                        <h4 class=\"ng-binding\">Connectez-vous</h4> 
                    </hgroup>
                    <a class=\"fbConnect\" href=\"\" style=\"display: block;\">
                        <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/facebook.png"), "html", null, true);
        echo "\" height=\"40\">
                        <span style=\"color: white ;padding-top: 10px;color: white;\">Se connecter avec Facebook</span>
                    </a>
                    <div class=\"row\"><div class=\"sign-or ng-binding col-md-12\">ou</div></div>
                    <p><input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Votre email\"></p>
                    <p><input type=\"password\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Votre mot de passe\"></p>

                </div>
                         
                <div class=\"col-md-12 cadre-button-register\" style=\"margin: 0px 0px 10px;\">
                    <a type=\"submit\" class=\"button-submit-register\">Connexion </a>
                </div>
                         
                <div class=\"already-signed row\" style=\"margin: 0px 0px 10px;\">
                    
                    <a href=\"\" class=\"col-md-6\">Créer un compte</a> 
                    <a href=\"\" class=\"col-md-6\" style=\"padding-left: 38px;\">Mot de passe oublié ?</a>
                </div>
           
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "atnUserBundle:Security:block_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 14,  19 => 1,);
    }
}
