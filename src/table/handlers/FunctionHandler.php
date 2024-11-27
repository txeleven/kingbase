<?php

namespace txeleven\kingbase\table\handlers;

use txeleven\kingbase\interfaces\FunctionTranslatorInterface;
use txeleven\kingbase\interfaces\FunctionValidatorInterface;
use txeleven\kingbase\SqlContext;

class FunctionHandler extends \txeleven\kingbase\base\BaseFunctionHandler
{
    protected $validatorClasses = [];

    protected $validatorObjects = [];

    protected $translatorClasses = [
        '\txeleven\kingbase\table\functions\LengthFunctionTranslator',
        '\txeleven\kingbase\table\functions\AddDateFunctionTranslator',
        '\txeleven\kingbase\table\functions\DateSubFunctionTranslator',
        '\txeleven\kingbase\table\functions\DateAddFunctionTranslator',
        '\txeleven\kingbase\table\functions\DateFunctionTranslator',
        '\txeleven\kingbase\table\functions\Md5FunctionTranslator',
        '\txeleven\kingbase\table\functions\ConvertOrderTranslator',
        '\txeleven\kingbase\table\functions\ConvertFunctionTranslator',
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
