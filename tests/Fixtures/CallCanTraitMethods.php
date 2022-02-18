<?php

namespace Tests\Fixtures;

class CallCanTraitMethods
{
    public function runActTest()
    {
        ActionWithAllEvents::act();
    }

    public function runActWhenTest(bool $condition)
    {
        ActionWithAllEvents::actWhen($condition);
    }

    public function runActUnlessTest(bool $condition)
    {
        ActionWithAllEvents::actUnless($condition);
    }
}
