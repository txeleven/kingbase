<?php

namespace huaweichenai\kingbase\interfaces;

use huaweichenai\kingbase\base\BaseAfterHandler;
use huaweichenai\kingbase\base\BaseFunctionHandler;
use huaweichenai\kingbase\base\BaseGeneralSqlValidateHandler;
use huaweichenai\kingbase\base\BaseSqlQuoteConvertHandler;

interface SqlHandlerFactoryInterface
{
    /**
     * @return BaseGeneralSqlValidateHandler
     */
    public function createGeneralSqlValidateHandler();

    /**
     * @return BaseFunctionHandler
     */
    public function createFunctionHandler();

    /**
     * @return BaseSqlQuoteConvertHandler
     */
    public function createSqlQuoteHandler();

    /**
     * @return BaseAfterHandler
     */
    public function createAfterHandler();

}
