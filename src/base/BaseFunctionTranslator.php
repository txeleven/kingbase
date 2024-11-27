<?php

namespace huaweichenai\kingbase\base;

use huaweichenai\kingbase\SqlContext;

abstract class BaseFunctionTranslator implements \huaweichenai\kingbase\interfaces\FunctionTranslatorInterface
{

    public function translate(SqlContext $sqlContext)
    {
        $sqlContext->setParsed($this->internalTranslate($sqlContext->getParsed()));
        return $sqlContext;
    }

    abstract protected function internalTranslate($parsed);
}
