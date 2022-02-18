<?php

use Kirschbaum\Actions\Contracts\Actionable;

if (! function_exists('act')) {
    /**
     * Initiate the given action.
     *
     * @param Actionable $action
     *
     * @throws Throwable
     *
     * @return mixed
     */
    function act(Actionable $action)
    {
        return app(Actionable::class)->act($action);
    }
}

if (! function_exists('act_when')) {
    /**
     * Initiate the given action if the given condition is true.
     *
     * @param $condition
     * @param Actionable $action
     *
     * @throws Throwable
     *
     * @return mixed|void
     */
    function act_when($condition, Actionable $action)
    {
        return app(Actionable::class)->actWhen($condition, $action);
    }
}

if (! function_exists('act_unless')) {
    /**
     * Initiate the given action if the given condition is false.
     *
     * @param $condition
     * @param Actionable $action
     *
     * @throws Throwable
     *
     * @return mixed|void
     */
    function act_unless($condition, Actionable $action)
    {
        return app(Actionable::class)->actUnless($condition, $action);
    }
}
