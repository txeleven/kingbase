<?php

namespace txeleven\kingbase\table\functions;

use txeleven\kingbase\base\BaseFunctionTranslator;
use huaweichenai\kingbase\utils\FunctionHelper;

class Md5FunctionTranslator extends BaseFunctionTranslator
{
    const FUNCTION_NAME = 'MD5';

    /**
     * @throws \huaweichenai\kingbase\exceptions\DbxException
     */
    protected function internalTranslate($parsed)
    {
        FunctionHelper::replaceFunctionEntrance($parsed, self::FUNCTION_NAME, 'TO_CHAR');
        return $parsed;
    }
}
