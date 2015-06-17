<?php

/* atnAnimalBundle:Animal:profil.html.twig */
class __TwigTemplate_98f2352f6d6d13f8ff2235b0712e27fa175762598ac1afe2e717846c55406b53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout_connected.html.twig", "atnAnimalBundle:Animal:profil.html.twig", 1);
        $this->blocks = array(
            'block_header' => array($this, 'block_block_header'),
            'block_content_body' => array($this, 'block_block_content_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout_connected.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_block_header($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"status-composer profil-content\">
        <ul class=\"text-and-upload\"> 
            <li> 
                <a class=\"poster\" href=\"#\" > 
                    <span class=\"yp-icn yp-icn-media\"></span>
                    Poster une photo / vidéo 
                </a> 
            </li> 
        </ul>


        <div class=\"uploaded-file yp-bloc cf Block-uploadFile\" style=\"display: none\">
            <form id=\"acme_dropzone_form\" enctype=\"multipart/form-data\" action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("atn_media_add");
        echo "\" method=\"post\" class=\"ng-pristine ng-invalid ng-invalid-required\">
                <div class=\"image-wrapper upload-thumb\" style=\"float: left;height: 126px;width: 182px;\">
                    <output id=\"list\"></output>
                </div>
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget', array("attr" => array("class" => "input-description", "accept" => "image/*", "capture" => "camera", "style" => "display: none")));
        echo "

                <div class=\"upload-form\">
                    <p class=\"label-description\">description</p>
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "input-description")));
        echo "
                </div>
                <input type=\"submit\" class=\"submit-publier\" value=\"Publier\">
                ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>


                <script type=\"text/javascript\">
                    \$('.poster').click(function () {
                        \$('#atn_media_image_add_file').click();
                    });
                    function handleFileSelect(evt) {
                        var files = evt.target.files; // FileList object


                        // Loop through the FileList and render image files as thumbnails.
                        for (var i = 0, f; f = files[i]; i++) {

                            // Only process image files.
                            if (!f.type.match('image.*')) {
                                continue;
                            }

                            var reader = new FileReader();

                            // Closure to capture the file information.
                            reader.onload = (function (theFile) {

                                return function (e) {
                                    \$('.thumbNew').remove();
                                    \$('.Block-uploadFile').show('slow');
                                    // Render thumbnail.
                                    var span = document.createElement('span');
                                    span.innerHTML = ['<img width=\"100%\" height=\"100%\" class=\"thumbNew\" src=\"', e.target.result,
                                        '\" title=\"', escape(theFile.name), '\"/>'].join('');
                                    document.getElementById('list').insertBefore(span, null);
                                };
                            })(f);

                            // Read in the image file as a data URL.
                            reader.readAsDataURL(f);
                        }
                    }

                    document.getElementById('atn_media_image_add_file').addEventListener('change', handleFileSelect, false);
                </script>
        </div>
    ";
    }

    // line 71
    public function block_block_content_body($context, array $blocks = array())
    {
        // line 72
        echo "
        <div class=\"profil-content\">

            ";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medias"]) ? $context["medias"] : $this->getContext($context, "medias")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
            // line 76
            echo "                <div class=\"user-pets\">
                    <div class=\"post-media-wrapper\">
                        <a href=\"\"> 
                            <img src=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["media"], "href", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "alt", array()), "html", null, true);
            echo "\" class=\"post-content-media\" width=\"100%\"> 
                        </a>
                        <ul class=\"stats\">
                            <li>
                                <a class=\"yp-icn yp-icn-paw ng-binding yummied\">j'aime</a>
                            </li>
                            <li>
                                <a class=\"yp-icn yp-icn-bubble\">commentaire</a>
                            </li>
                        </ul>
                        <div class=\"post-comments ng-isolate-scope divCommentaire\" >
                            <input type=\"hidden\" class=\"imageee\" value=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "id", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" class=\"id_animal\" value=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "id"), "method"), "html", null, true);
            echo "\">
                            <a class=\"see-comments clickComment\">
                                <span class=\"yp-icn yp-icn-bubble\"></span>
                                Voir tous les commentaires 
                            </a>
                            <div class=\"ng-isolate-scope blockListCommentaire\">
                                <ul class=\"comment-listing ng-scope listCommentaires\">
                                    ";
            // line 98
            $this->loadTemplate("atnAnimalBundle:Animal:block_commentaire.html.twig", "atnAnimalBundle:Animal:profil.html.twig", 98)->display(array_merge($context, array("commentaires" => $this->getAttribute((isset($context["commentaires"]) ? $context["commentaires"] : $this->getContext($context, "commentaires")), $this->getAttribute($context["media"], "id", array()), array(), "array"), "foo" => "bar")));
            // line 99
            echo "                                </ul>
                                <ul class=\"comment-listing ng-scope\">
                                    <li>
                                <div class=\"leave-comment top-alignment ng-pristine ng-valid ng-scope\"> 
                                    <img src=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "imageProfile", array()), "href", array())), "html", null, true);
            echo "\"class=\"user-avatar left-thumb\" width=\"32\">
                                
                                    <div class=\"leave-comment-content top-alignment\">
                                        <input class=\"input_comment message\" name=\"message\" placeholder=\"Ajouter un commentaire\" required=\"\"type=\"text\"> 
                                    </div> 
                                </div> 
                                    </li>
                                    </ul>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "        </div>
    </div>
    <script>
        \$(\".message\").keyup(function (event) {
            if (event.keyCode == 13) {
                var \$this = \$(this);
                \$.ajax({
                    url: \"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("atn_commentaire_add");
        echo "\",
                    data: {commentaire: \$this.val(), id_user_image: \$this.closest('.divCommentaire').find('.imageee').val(), id_animal: \$this.closest('.divCommentaire').find('.id_animal').val()},
                    success: function (data) {
                        \$this.closest('.ng-isolate-scope').find('.listCommentaires').append(data);
                        \$this.val(\"\");

                    }
                });
            }
        });

        \$(\".clickComment\").click(function (event) {
            var \$this = \$(this);
            \$.ajax({
                url: \"";
        // line 138
        echo $this->env->getExtension('routing')->getPath("atn_commentaire_more");
        echo "\",
                data: {image_id: \$this.closest('.divCommentaire').find('.imageee').val(), nombre_commentaire: \$this.closest('.divCommentaire').find('.numeroCommentaire').val()},
                success: function (data) {
                    \$this.closest('.divCommentaire').find('.comment-listing').prepend(data);
                    if (\$(data).filter('.lengthCommentaire').val() != \"5\") {
                        \$this.closest('.divCommentaire').find('.clickComment').remove();
                    }

                }
            });
        });

             \$(window).scroll(function() {
                if (  document.documentElement.clientHeight + 
                  \$(document).scrollTop() >= document.body.offsetHeight )
            { 
                \$.ajax({
                        url: \"";
        // line 155
        echo $this->env->getExtension('routing')->getPath("atn_media_more");
        echo "\",
                        data: {offset: 0},
                        success: function (data) {
                            \$('.profil-content').append(data);

                        }
                    });
            }
                });

    </script>
";
    }

    public function getTemplateName()
    {
        return "atnAnimalBundle:Animal:profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 155,  237 => 138,  220 => 124,  211 => 117,  183 => 103,  177 => 99,  175 => 98,  165 => 91,  161 => 90,  145 => 79,  140 => 76,  123 => 75,  118 => 72,  115 => 71,  66 => 26,  60 => 23,  53 => 19,  46 => 15,  32 => 3,  29 => 2,  11 => 1,);
    }
}
