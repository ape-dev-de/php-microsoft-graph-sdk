<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FilterClause
 */
class FilterClause
{
    public function __construct(
        /** Name of the operator to be applied to the source and target operands. Must be one of the supported operators. Supported operators can be discovered. */
        public ?string $operatorName = null,
        /** Name of source operand (the operand being tested). The source operand name must match one of the attribute names on the source object. */
        public ?string $sourceOperandName = null,
        /** Values that the source operand will be tested against. */
        public ?FilterOperand $targetOperand = null
    ) {}
}
