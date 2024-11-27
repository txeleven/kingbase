<?php

namespace huaweichenai\kingbase\table\functions;

use huaweichenai\kingbase\base\BaseFunctionTranslator;
use huaweichenai\kingbase\utils\FunctionHelper;

class LengthFunctionTranslator extends BaseFunctionTranslator
{
    const FUNCTION_NAME = 'LENGTH';

    /**
     * @throws \huaweichenai\kingbase\exceptions\DbxException
     */
    protected function internalTranslate($parsed)
    {
        FunctionHelper::replaceFunctionEntrance($parsed, self::FUNCTION_NAME, 'OCTET_LENGTH');
        return $parsed;
    }
}
