<?php

/* blocks.html.twig */
class __TwigTemplate_e33c90a3675375dccc07785b6c92a887557d206d3b6b31b65a5c084f085a7a02 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 3
        echo " 
";
    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("default.title"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "blocks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  34 => 2,  31 => 1,  26 => 3,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "blocks.html.twig", "C:\\xampp\\htdocs\\SGA\\gerenciador-atendimento\\templates\\blocks.html.twig");
    }
}
