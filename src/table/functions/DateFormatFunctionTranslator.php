<?php

namespace huaweichenai\kingbase\table\functions;

use huaweichenai\kingbase\base\BaseFunctionTranslator;
use huaweichenai\kingbase\SqlContext;
use huaweichenai\kingbase\utils\FunctionHelper;

class DateFormatFunctionTranslator extends BaseFunctionTranslator
{
    const FUNCTION_NAME = 'DATE_FORMAT';

    /**
     * @throws \huaweichenai\kingbase\exceptions\DbxException
     */
    protected function internalTranslate($parsed)
    {
        FunctionHelper::replaceFunctionEntrance($parsed, self::FUNCTION_NAME, 'TO_CHAR');
        return $parsed;
    }
}
