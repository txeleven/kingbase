<?php

namespace huaweichenai\kingbase\table\handlers;

use huaweichenai\kingbase\SqlContext;
use huaweichenai\kingbase\utils\QuoteHelper;

class SqlQuoteConvertHandler extends \huaweichenai\kingbase\base\BaseSqlQuoteConvertHandler
{
    protected function convertSqlQuote(SqlContext $sqlContext)
    {
        $parsedArr = $sqlContext->getParsed();
        QuoteHelper::convertItemsQuote($parsedArr);
        $sqlContext->setParsed($parsedArr);
        return $sqlContext;
    }
}
