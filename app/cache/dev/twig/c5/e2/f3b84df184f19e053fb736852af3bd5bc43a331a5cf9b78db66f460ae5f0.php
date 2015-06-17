<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_c5e2f3b84df184f19e053fb736852af3bd5bc43a331a5cf9b78db66f460ae5f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("atnUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'block_body' => array($this, 'block_block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "atnUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container main \">
    <div class=\"container basic-page\">
        <div class=\"content-main  pull-left\">
            <h1 class=\"content-main-title is-uppercase nomargin\">Mon compte</h1>
            <span class=\"error-form\">* Les champs suivis d'un astérisque sont obligatoires</span>

 <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check", array("subdomain" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "subdomain"), "method"))), "html", null, true);
        echo "\" method=\"post\" class=\"site-form form-horizontal\"> 
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                    <div class=\"site-form-inner\">
                        <div class=\"form-group last-group\">
                            <span class=\"site-form-group-title\">Connexion</span>

                            <div class=\"field-group\">
                                <label class=\"control-label\" for=\"username\">E-mail</label>
                                <div class=\"control-field control-field-large\">
                                    <input type=\"text\" class=\"form-control form-control-email\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>

                            <div class=\"field-group\">
                                <label class=\"control-label\" for=\"password\">Mot de passe</label>
                                <div class=\"control-field control-field-large\">
                                    <input type=\"password\" class=\"form-control form-control-password\" id=\"password\" name=\"_password\" required=\"required\" />
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>

                            <div class=\"field-group\">
                                <div class=\"checkbox pull-left\">
                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" class=\"css-checkbox\" value=\"on\" checked />
                                    <label for=\"remember_me\" class=\"css-label css-label5\">rester connecter</label>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>

                        </div>
                    </div>
                    <br>
                    <div class=\"clearfix\"></div>
                    <div class=\"pull-right\">
                        <input type=\"submit\" name=\"contact-submit\" id=\"contact-submit\" value=\"Se connecter\" class=\"btn btn-style is-bold btn-style-white-arrow btn-submit pull-right\" style=\"margin-top: 4%\">

                    </div>
                    <div class=\"clearfix\"></div>
                </form>
        </div>
                    </div>
                    </div>
                            <script type=\"text/javascript\">
                                \$(document).ready(function () {
    var intputElements = document.getElementsByTagName(\"INPUT\");
    for (var i = 0; i < intputElements.length; i++) {
        intputElements[i].oninvalid = function (e) {
            e.target.setCustomValidity(\"\");
            if (!e.target.validity.valid) {
                if (e.target.name === \"username\") {
                    e.target.setCustomValidity(\"Vous devez entrer un pseudonyme!\");
                }
                else {
                    e.target.setCustomValidity(\"Vous devez entrer un mot de passe!\");
                }
            }
        };
    }
})
                            </script>
                            ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  43 => 10,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }
}
