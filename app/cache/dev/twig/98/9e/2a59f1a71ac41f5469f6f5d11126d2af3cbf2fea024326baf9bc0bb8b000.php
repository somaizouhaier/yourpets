<?php

/* atnUserBundle:Manage:left_menu_profil.html.twig */
class __TwigTemplate_989e2a59f1a71ac41f5469f6f5d11126d2af3cbf2fea024326baf9bc0bb8b000 extends Twig_Template
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
        echo "<div class=\"user-sidebar community-layout-left\">
        <div class=\"profile-infos-container ng-scope\">
            <a href=\"/pets/274783\" ui-sref=\"petsview.index({id:currentPet.id})\" class=\"left-thumb\"> <img src=\"https://d2d0m32kr3hci1.cloudfront.net/unknown_6_160.jpg\" ng-src=\"https://d2d0m32kr3hci1.cloudfront.net/unknown_6_160.jpg\" class=\"user-avatar\" height=\"\" width=\"48\"> </a>
            <div class=\"profile-main-informations middle-alignment\"> 
                
                <header> 
                    <h1 class=\"profile-pseudo museo-title\"> 
                        <a href=\"/pets/274783\" class=\"ng-binding\" ui-sref=\"petsview.index({id:currentPet.id})\"> ";
        // line 8
        echo "Amimal.name";
        echo " </a> 
                    </h1> 
                </header> 
                <!--<a href=\"/pets/edit\" class=\"pet-edit-link baseline ng-binding\" ui-sref=\"petsEdit\">Gérer mon profil</a>-->
            
                    
            </div>
        </div>
                    <div style=\"height:30px\"></div>
        <div class=\"user-navigation\"> 
                        <ul>
                            <li class=\"ng-scope\" ng-if=\"displayAuthorProfile\">
                                <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" class=\"yp-icn-feed-small ng-binding\"> Gérer mon profil  </a> 
                            </li>
                            <li class=\"ng-scope\" ng-if=\"displayAuthorProfile\">
                                <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("atn_amimal_list");
        echo "\" class=\"yp-icn-message ng-binding\"> Gérer mes animaux   </a> 
                            </li>
                        </ul>
                        
                    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "atnUserBundle:Manage:left_menu_profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 23,  43 => 20,  28 => 8,  19 => 1,);
    }
}
