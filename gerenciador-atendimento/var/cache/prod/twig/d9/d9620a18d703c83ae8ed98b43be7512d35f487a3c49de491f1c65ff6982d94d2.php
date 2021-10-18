<?php

/* security/login.html.twig */
class __TwigTemplate_c3373ac0d76244b785c14fe0e51f43797131f8dccabd13e94d3cbf29e37ed3a8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["logo"] = "images/logo-proximo2.png";
        // line 2
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\" />
        <title>PROXIMO - Gerenciamento Atendimento.</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"bg-dark\">
        <div class=\"container\">
            <form id=\"login-form\" action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_check");
        echo "\" method=\"post\" class=\"form-signin\">
            
                <h2 id=\"logo\" class=\"form-signin-heading\">
                    <img class=\"img-logo\" alt=\"Novo SGA\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["logo"] ?? null)), "html", null, true);
        echo "\">
                </h2>
                ";
        // line 19
        if (($context["error"] ?? null)) {
            // line 20
            echo "                    <div class=\"alert alert-danger\">
                        ";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", array()), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 24
        echo "                <div id=\"login\">
                    <input type=\"text\" name=\"_username\" class=\"form-control my-1\" placeholder=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.username"), "html", null, true);
        echo "\" autofocus value=\"";
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\">
                    <input type=\"password\" name=\"_password\" class=\"form-control my-1 mb-4\" placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.password"), "html", null, true);
        echo "\">
                    <button class=\"btn btn-lg btn-outline-light btn-block\" type=\"submit\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.button.submit"), "html", null, true);
        echo "</button>
                </div>
            </form>
        </div>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  82 => 26,  76 => 25,  73 => 24,  67 => 21,  64 => 20,  62 => 19,  57 => 17,  51 => 14,  44 => 10,  40 => 9,  36 => 8,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "security/login.html.twig", "C:\\xampp\\htdocs\\SGA\\gerenciador-atendimento\\templates\\security\\login.html.twig");
    }
}
