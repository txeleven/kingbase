<?php

namespace txeleven\kingbase\table\functions;

use txeleven\kingbase\base\BaseFunctionTranslator;
use txeleven\kingbase\SqlContext;
use txeleven\kingbase\utils\FunctionHelper;

class ConvertFunctionTranslator extends BaseFunctionTranslator
{
    const FUNCTION_NAME = 'CONVERT';

    /**
     * @throws \txeleven\kingbase\exceptions\DbxException
     */
    protected function internalTranslate($parsed)
    {
        FunctionHelper::replaceFunctionEntrance($parsed, self::FUNCTION_NAME, '');
        return $parsed;
    }
}
