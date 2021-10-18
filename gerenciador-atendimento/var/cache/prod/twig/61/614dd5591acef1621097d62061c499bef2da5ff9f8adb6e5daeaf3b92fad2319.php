<?php

/* @NovosgaAttendance/base.html.twig */
class __TwigTemplate_4cf602d7f64550e40ae1cb2131a6b7381950ad5b997448cf2d122a145147cb14 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@NovosgaAttendance/base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title", array(), "NovosgaAttendanceBundle"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "@NovosgaAttendance/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  32 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NovosgaAttendance/base.html.twig", "C:\\xampp\\htdocs\\SGA\\gerenciador-atendimento\\modules\\novosga\\attendance-bundle\\Resources\\views\\base.html.twig");
    }
}
