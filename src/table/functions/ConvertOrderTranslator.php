<?php

namespace txeleven\kingbase\table\functions;

use huaweichenai\kingbase\base\BaseFunctionTranslator;
use huaweichenai\kingbase\SqlContext;
use huaweichenai\kingbase\utils\FunctionHelper;

class ConvertOrderTranslator extends BaseFunctionTranslator
{
    /**
     * 将 CONVERT(xxx USING gbk ) 改成 NLSSORT(xxx,'NLS_SORT = SCHINESE_PINYIN_M')
     * @throws \huaweichenai\kingbase\exceptions\DbxException
     */
    protected function internalTranslate($parsed)
    {
        FunctionHelper::changeConvertOrderEntrance($parsed);
        return $parsed;
    }
}
