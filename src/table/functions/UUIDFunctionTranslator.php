<?php

namespace txeleven\kingbase\table\functions;

use txeleven\kingbase\base\BaseFunctionTranslator;
use txeleven\kingbase\utils\FunctionHelper;

class UUIDFunctionTranslator extends BaseFunctionTranslator
{
    const FUNCTION_NAME = 'UUID';

    /**
     * @throws \txeleven\kingbase\exceptions\DbxException
     */
    protected function internalTranslate($parsed)
    {
        FunctionHelper::replaceFunctionEntrance($parsed, self::FUNCTION_NAME, 'NEWID');
        return $parsed;
    }
}
