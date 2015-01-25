<?php

/* prototype.tpl */
class __TwigTemplate_6b4fffd11cf0ed426497049985790279af071dea2e917ffd8f1d929ba132a413 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.tpl");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
    <div class=\"container first\">
      <section class=\"row\">
      <h2>Projects looking for contributors</h2>
      <ul class=\"list-group row projects\">
        ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) ? $context["projects"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["proj"]) {
            // line 9
            echo "
            <li class=\"list-group-item col-xs-6 project\">
              <div class=\"project\">
              ";
            // line 12
            echo $context["proj"];
            echo "
              </div>
            </li>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
      </ul>
      </section>
    </div>
";
    }

    public function getTemplateName()
    {
        return "prototype.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 17,  55 => 12,  50 => 9,  46 => 8,  39 => 3,  36 => 2,  11 => 1,);
    }
}
