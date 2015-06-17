<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_79473746bb93add8445179f8415062079fefb8c777f50b8b7d0f898b0648d6b3 extends Twig_Template
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
    
    <div class=\"modal-header header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Initialisez votre mot de passe</h4>
    </div>
    
   <form  class=\"form-horizontal\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"post\">
       
 <div class=\"modal-body\" >

     <div class=\"form-group\">
         <table style=\"width: 100%\"> 
             <tr>
                <td for=\"password\" class=\"col-sm-5 control-label\"><label>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new", array()), "first", array()), 'label', array("label" => "Votre nouveau mot de passe"));
        echo "</label></td>
                <td> 
                  <div class=\"col-sm-10\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nouveau mot de passe")));
        echo "
                
                 </div> 
                </td>
              </tr>
          <tr><td>&nbsp;</td></tr>
    <tr>
             <td for=\"password\" class=\"col-sm-5 control-label\"><label>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new", array()), "second", array()), 'label', array("label" => "confirmer le mot de passe"));
        echo "</label></td>
             <td> <div class=\"col-sm-10\">
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "mot de passe")));
        echo "
                
                 </div></td>
         </tr>
     </table>
  </div>
     
 </div>
       
       
        <div class=\"modal-footer\">
        
         <button type=\"submit\" id=\"_submit\" name=\"_submit\"  class=\"btn btn-danger\">confirmer&nbsp&nbsp<span class=\"glyphicon glyphicon-chevron-right\"></span></button>
";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </div>
   </form>
</div>
</div>
    

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 43,  64 => 30,  59 => 28,  49 => 21,  43 => 18,  31 => 11,  19 => 1,);
    }
}
