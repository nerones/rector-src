<?php

namespace Rector\Tests\Strict\Rector\Empty_\DisallowedEmptyRuleFixerRector\Fixture;

final class DemoFile
{
    protected string $test;
    
    public function run()
    {
        return empty($this->test);
    }
}

?>
