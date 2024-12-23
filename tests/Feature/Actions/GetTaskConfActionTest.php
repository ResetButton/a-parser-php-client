<?php

declare(strict_types=1);

namespace Tests\Feature\Actions;

use ResetButton\AparserPhpClient\Actions\GetTaskConfAction;

class GetTaskConfActionTest extends BaseActionTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    public function testJson()
    {
        $expected = $this->prepareJson('GetTaskConfAction.json');

        $action = new GetTaskConfAction(181);
        $this->assertJsonStringEqualsJsonString($this->aparser->getJsonString($action), $expected);
    }
}
