<?php

namespace txeleven\kingbase\table\handlers;

use txeleven\kingbase\SqlContext;

class AfterHandler extends \txeleven\kingbase\base\BaseAfterHandler
{

    protected function afterHandle(SqlContext $sqlContext)
    {
        $parsed = $sqlContext->getParsed();
        if (isset($parsed['UNION'])) {
            if (count($parsed['UNION']) == 1) {
                $sqlContext->setParsed($parsed['UNION'][0]);
            }
        }

        return $sqlContext;
    }
}
