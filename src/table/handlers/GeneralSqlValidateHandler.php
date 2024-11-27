<?php

namespace txeleven\kingbase\table\handlers;

use txeleven\kingbase\exceptions\DbxException;
use txeleven\kingbase\SqlContext;
use txeleven\kingbase\utils\ValidateHelper;

class GeneralSqlValidateHandler extends \txeleven\kingbase\base\BaseGeneralSqlValidateHandler
{
    protected static $unSupportedDbs = ['information_schema', 'mysql', 'performance_schema'];
    protected static $unSupportedFunctions = ['group_concat', 'database'];

    /**
     * @throws DbxException
     */
    protected function validateSupportedFunctions(SqlContext $sqlContext)
    {
        ValidateHelper::validateFunctionsEntrance($sqlContext->getParsed(), self::$unSupportedFunctions);
    }

    protected function validateSupportedExpressions(SqlContext $sqlContext)
    {
        // TODO: Implement validateSupportedExpressions(SqlContext $sqlContext) method.
    }

    /**
     * @throws DbxException
     */
    protected function validateUnSupportedDbs(SqlContext $sqlContext)
    {
        ValidateHelper::validateDbsEntrance($sqlContext->getParsed(), self::$unSupportedDbs);
    }
}
