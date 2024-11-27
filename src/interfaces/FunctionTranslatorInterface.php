<?php

namespace huaweichenai\kingbase\interfaces;

use huaweichenai\kingbase\SqlContext;

interface FunctionTranslatorInterface
{
    public function translate(SqlContext $sqlContext);
}
