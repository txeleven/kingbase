<?php

namespace huaweichenai\kingbase\interfaces;

use huaweichenai\kingbase\SqlContext;

interface FunctionValidatorInterface
{
    public function validate(SqlContext  $sqlContext);

}
