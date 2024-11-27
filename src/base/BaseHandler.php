<?php

namespace txeleven\kingbase\base;

use txeleven\kingbase\SqlContext;

abstract class BaseHandler
{
    /**
     * @var BaseHandler
     */
    protected $nextHandler;

    public function setNextHandler(BaseHandler $handler){
        $this->nextHandler = $handler;
    }

    abstract public function handle(SqlContext $sqlContext);

}
