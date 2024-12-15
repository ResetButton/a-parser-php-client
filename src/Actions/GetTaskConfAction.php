<?php

namespace ResetButton\AparserPhpClient\Actions;

class GetTaskConfAction extends Action
{
    const NAME = "getTaskConf";

    public function __construct(int $id)
    {
        $this->data = ['taskUid' => $id];
    }
}
