<?php

namespace txeleven\kingbase\base;

use txeleven\kingbase\SqlContext;

abstract class BaseAfterHandler extends BaseHandler
{

    public function handle(SqlContext $sqlContext)
    {
        $sqlContext = $this->afterHandle($sqlContext);
        if ($this->nextHandler != null) {
            $this->nextHandler->handle($sqlContext);
        }

        return $sqlContext;
    }

    abstract protected function afterHandle(SqlContext $sqlContext);
}
