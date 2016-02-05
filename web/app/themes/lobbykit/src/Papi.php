<?php

namespace LobbyKit\Intra;

class Papi
{
    public static function is_papi_page()
    {
        return (bool) \papi_get_page_type_id();
    }

    public static function template_types()
    {
        $template = papi_get_page_type_template(get_the_ID());
        if ($template) {
            $template = str_replace('/blade.php', '.blade.php', $template);
            if (!strpos('blade.php', $template)) {
                $template = str_replace('.php', '.blade.php', $template);
            }
            if (get_post_type() == 'module') {
                $template = 'module.blade.php';
            }

            return [
                'page'        => $template,
                'single'      => $template,
                'module-page' => $template,
            ];
        }
    }

    public static function template()
    {
        $result = '';

        list(, $caller) = debug_backtrace(false);
        $class = strtolower($caller['class']);

        if (strpos($class, '_page_')) {
            $class = str_replace('_page_type', '', $class);
            $class = str_replace('_', '-', $class);
            $result = 'views/pages/'.$class;
        } elseif (strpos($class, '_module_')) {
            $class = str_replace('_module_type', '', $class);
            $class = str_replace('_', '-', $class);
            $result = 'views/modules/'.$class;
        } else {
        }

        return $result;
    }

    public static function thumbnail()
    {
        $result = '';

        list(, $caller) = debug_backtrace(false);
        $class = strtolower($caller['class']);

        if (strpos($class, '_page_')) {
            $class = str_replace('_page_type', '', $class);
            $class = str_replace('_', '-', $class);
            $result = assets("images/pages/$class.png");
        } elseif (strpos($class, '_module_')) {
            $class = str_replace('_module_type', '', $class);
            $class = str_replace('_', '-', $class);
            $result = assets("images/modules/$class.png");
        } else {
        }

        return $result;
    }

    public static function render_page()
    {
        $page_template = papi_get_page_type_template();
        if ($page_template) {
            $page_template = rtrim($page_template, '.php');
            bladerunner($page_template);
        } else {
            bladerunner('views.pages.index');
        }
    }
}
