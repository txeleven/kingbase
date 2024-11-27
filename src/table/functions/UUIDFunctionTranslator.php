<?php

namespace huaweichenai\kingbase\table\functions;

use huaweichenai\kingbase\base\BaseFunctionTranslator;
use huaweichenai\kingbase\utils\FunctionHelper;

class UUIDFunctionTranslator extends BaseFunctionTranslator
{
    const FUNCTION_NAME = 'UUID';

    /**
     * @throws \huaweichenai\kingbase\exceptions\DbxException
     */
    protected function internalTranslate($parsed)
    {
        FunctionHelper::replaceFunctionEntrance($parsed, self::FUNCTION_NAME, 'NEWID');
        return $parsed;
    }
}
