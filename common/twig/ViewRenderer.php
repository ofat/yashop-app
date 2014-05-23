<?php
/**
 * @author Vitaliy Ofat <ofatv22@gmail.com>
 */

namespace common\twig;

use yii\twig\ViewRenderer as TwigViewRenderer;


class ViewRenderer extends TwigViewRenderer
{

    public $namespaces = [];

    public function init()
    {
        parent::init();

        $this->prepareNamespaces();

        $this->twig->addFunction('use', new \Twig_Function_Function(function($names) {
            if(!is_array($names)) {
                $names = array($names);
            }
            foreach($names as $name) {
                $class = end(explode('\\', $name));
                $this->namespaces[ $class ] = $name;
            }
            return null;
        }));

        $this->twig->addFunction(new \Twig_SimpleFunction('setTitle', function($title) {
            $context = $this->twig->getGlobals();
            $context['this']->title = $title;
            $this->twig->mergeGlobals($context);
        }));

        $this->twig->addFunction(new \Twig_SimpleFunction('addBreadcrumb', function($breadcrumb) {
            $context = $this->twig->getGlobals();
            $context['this']->params['breadcrumbs'][] = $breadcrumb;
            $this->twig->mergeGlobals($context);
        }));

        $this->twig->addFunction(new \Twig_SimpleFunction('use', function($namespaces) {
            if(!is_array($namespaces)) {
                $namespaces = array($namespaces);
            }
            foreach($namespaces as $namespace) {
                $elems = explode('\\', $namespace);
                $class = end($elems);
                $this->namespaces[ $class ] = $namespace;
            }
            return null;
        }));

        $this->twig->addFunction(new \Twig_SimpleFunction('static', function() {
            $args = func_get_args();
            $name = $args[0];
            $method = $args[1];
            unset($args[0], $args[1]);

            if(isset($this->namespaces[$name]))
                $name = $this->namespaces[$name];

            call_user_func_array([$name, $method], $args);
        }));

        $this->twig->addFunction(new \Twig_SimpleFunction('echo_static', function() {
            $args = func_get_args();
            $name = $args[0];
            $method = $args[1];
            unset($args[0], $args[1]);

            if(isset($this->namespaces[$name]))
                $name = $this->namespaces[$name];

            return call_user_func_array([$name, $method], $args);
        },['is_safe' => ['html']]));

        $this->twig->addFunction(new \Twig_SimpleFunction('widget', function ($name, $args = []) {
            if(isset($this->namespaces[$name]))
                $name = $this->namespaces[$name];

            return $name::widget($args);
        },['is_safe' => ['html']]));

        $this->twig->addFunction(new \Twig_SimpleFunction('widget_begin', function($name, $args = []) {
            if(isset($this->namespaces[$name]))
                $name = $this->namespaces[$name];

            $name::begin($args);
        }));

        $this->twig->addFunction(new \Twig_SimpleFunction('widget_end', function($name, $args = []){
            if(isset($this->namespaces[$name]))
                $name = $this->namespaces[$name];

            $name::end($args);
        }));
    }

    function prepareNamespaces()
    {
        $names = $this->namespaces;
        $this->namespaces = [];
        foreach($names as $namespace) {
            $elems = explode('\\', $namespace);
            $class = end($elems);
            $this->namespaces[ $class ] = $namespace;
        }
    }
}