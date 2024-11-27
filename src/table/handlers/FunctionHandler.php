<?php

namespace huaweichenai\kingbase\table\handlers;

use huaweichenai\kingbase\interfaces\FunctionTranslatorInterface;
use huaweichenai\kingbase\interfaces\FunctionValidatorInterface;
use huaweichenai\kingbase\SqlContext;

class FunctionHandler extends \huaweichenai\kingbase\base\BaseFunctionHandler
{
    protected $validatorClasses = [];

    protected $validatorObjects = [];

    protected $translatorClasses = [
        '\huaweichenai\kingbase\table\functions\LengthFunctionTranslator',
        '\huaweichenai\kingbase\table\functions\AddDateFunctionTranslator',
        '\huaweichenai\kingbase\table\functions\DateSubFunctionTranslator',
        '\huaweichenai\kingbase\table\functions\DateAddFunctionTranslator',
        '\huaweichenai\kingbase\table\functions\DateFunctionTranslator',
        '\huaweichenai\kingbase\table\functions\Md5FunctionTranslator',
        '\huaweichenai\kingbase\table\functions\ConvertOrderTranslator',
        '\huaweichenai\kingbase\table\functions\ConvertFunctionTranslator',
        '\huaweichenai\kingbase\table\functions\DateFormatFunctionTranslator',
        '\huaweichenai\kingbase\table\functions\UUIDFunctionTranslator',
    ];

    /**
     * @var FunctionTranslatorInterface[]
     */
    protected $translatorObjects = [];

    public function appendValidator(FunctionValidatorInterface $validator)
    {
        // TODO: Implement appendValidator() method.
    }

    public function appendTranslator(FunctionTranslatorInterface $translator)
    {
        // TODO: Implement appendTranslator() method.
    }

    public function handle(SqlContext $sqlContext)
    {
        foreach ($this->translatorObjects as $translatorObject) {
            $sqlContext->setParsed($translatorObject->translate($sqlContext)->getParsed());
        }

        if ($this->nextHandler != null){
            $this->nextHandler->handle($sqlContext);
        }

        return $sqlContext;
    }
}
