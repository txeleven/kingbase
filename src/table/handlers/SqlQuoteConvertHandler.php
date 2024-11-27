<?php

namespace txeleven\kingbase\table\handlers;

use txeleven\kingbase\SqlContext;
use txeleven\kingbase\utils\QuoteHelper;

class SqlQuoteConvertHandler extends \txeleven\kingbase\base\BaseSqlQuoteConvertHandler
{
    protected function convertSqlQuote(SqlContext $sqlContext)
    {
        $parsedArr = $sqlContext->getParsed();
        QuoteHelper::convertItemsQuote($parsedArr);
        $sqlContext->setParsed($parsedArr);
        return $sqlContext;
    }
}
