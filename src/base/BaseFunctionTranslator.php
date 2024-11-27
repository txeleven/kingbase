<?php

namespace txeleven\kingbase\base;

use txeleven\kingbase\SqlContext;

abstract class BaseFunctionTranslator implements \txeleven\kingbase\interfaces\FunctionTranslatorInterface
{

    public function translate(SqlContext $sqlContext)
    {
        $sqlContext->setParsed($this->internalTranslate($sqlContext->getParsed()));
        return $sqlContext;
    }

    abstract protected function internalTranslate($parsed);
}
