<?php

/**
 * Singleton trait
 * @package Aquila
 */

namespace AQUILA_THEME\Inc\Traits;

trait Singleton
{
    protected function __construct()
    {
    }

    /**
     * Prevent object cloning
     */
    final protected function __clone()
    {
    }

    /**
     * This method returns new or existing Singleton instance
     * of the class for which it is called. This method is set
     * as final intentionally, it is not meant to be overridden.
     *
     * @return object Singleton instance of the class.
     */
    final public static function get_instance()
    {

        /**
         * Collection of instance.
         *
         * @var array
         */
        static $instance = [];

        /**
         * If this trait is implemented in a class which has multiple
         * sub-classes then static::$_instance will be overwritten with the most recent
         * sub-class instance. Thanks to late static binding
         * we use get_called_class() to grab the called class name, and store
         * a key=>value pair for each `classname => instance` in self::$_instance
         * for each sub-class.
         */
        $called_class = get_called_class();

        if (!isset($instance[$called_class])) {

            $instance[$called_class] = new $called_class();

            /**
             * Dependent items can use the `aquila_theme_singleton_init_{$called_class}` hook to execute code
             */
            do_action(sprintf('aquila_theme_singleton_init_%s', $called_class)); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores

        }

        return $instance[$called_class];

    }

}