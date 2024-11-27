<?php

namespace huaweichenai\kingbase\table\functions;

use huaweichenai\kingbase\base\BaseFunctionTranslator;
use huaweichenai\kingbase\SqlContext;
use huaweichenai\kingbase\utils\FunctionHelper;

class DateSubFunctionTranslator extends BaseFunctionTranslator
{
    const FUNCTION_NAME = 'DATE_SUB';

    /**
     * @throws \huaweichenai\kingbase\exceptions\DbxException
     */
    protected function internalTranslate($parsed)
    {
        FunctionHelper::replaceFunctionEntrance($parsed, self::FUNCTION_NAME, '');
        return $parsed;
    }
}
