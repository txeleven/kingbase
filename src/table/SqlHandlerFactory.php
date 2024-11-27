<?php

namespace huaweichenai\kingbase\table;

use huaweichenai\kingbase\table\handlers\AfterHandler;
use huaweichenai\kingbase\table\handlers\GeneralSqlValidateHandler;
use huaweichenai\kingbase\table\handlers\FunctionHandler;
use huaweichenai\kingbase\table\handlers\SqlQuoteConvertHandler;

class SqlHandlerFactory implements \huaweichenai\kingbase\interfaces\SqlHandlerFactoryInterface
{

    /**
     * @inheritDoc
     */
    public function createGeneralSqlValidateHandler()
    {
        return new GeneralSqlValidateHandler();

    }

    /**
     * @inheritDoc
     */
    public function createFunctionHandler()
    {
        return new FunctionHandler();
    }

    /**
     * @inheritDoc
     */
    public function createSqlQuoteHandler()
    {
        return new SqlQuoteConvertHandler();
    }


    /**
     * @inheritDoc
     */
    public function createAfterHandler()
    {
        return new AfterHandler();
    }
}
