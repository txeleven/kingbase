<?php

namespace txeleven\kingbase\table;

use txeleven\kingbase\table\handlers\AfterHandler;
use txeleven\kingbase\table\handlers\GeneralSqlValidateHandler;
use txeleven\kingbase\table\handlers\FunctionHandler;
use txeleven\kingbase\table\handlers\SqlQuoteConvertHandler;

class SqlHandlerFactory implements \txeleven\kingbase\interfaces\SqlHandlerFactoryInterface
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
