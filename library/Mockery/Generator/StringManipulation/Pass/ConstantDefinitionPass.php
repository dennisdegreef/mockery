<?php

namespace Mockery\Generator\StringManipulation\Pass;

use Mockery\Generator\Constant;
use Mockery\Generator\MockConfiguration;

class ConstantDefinitionPass implements Pass
{
    public function apply($code, MockConfiguration $config)
    {
        foreach ($config->getConstantsToMock() as $constant) {
            $constantDef  = ' const ';
            $constantDef .= $constant->getName();
            $constantDef .= ' = ';
            $constantDef .= $constant->getValue();
            $constantDef .= ";\n";

            $code = $this->appendToClass($code, $constantDef);
        }

        return $code;
    }

    protected function appendToClass($class, $code)
    {
        $lastBrace = strrpos($class, "}");
        $class = substr($class, 0, $lastBrace) . $code . "\n    }\n";
        return $class;
    }
}
