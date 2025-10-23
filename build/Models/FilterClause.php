<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FilterClause
 */
class FilterClause
{
    /** Name of the operator to be applied to the source and target operands. Must be one of the supported operators. Supported operators can be discovered. */
    public ?string $operatorName = null;

    /** Name of source operand (the operand being tested). The source operand name must match one of the attribute names on the source object. */
    public ?string $sourceOperandName = null;

    /** 
     * Values that the source operand will be tested against.
     * @var FilterOperand|\stdClass|null
     */
    public mixed $targetOperand = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['operatorName'])) {
            $this->operatorName = $data['operatorName'];
        }
        if (isset($data['sourceOperandName'])) {
            $this->sourceOperandName = $data['sourceOperandName'];
        }
        if (isset($data['targetOperand'])) {
            $this->targetOperand = is_array($data['targetOperand']) ? new FilterOperand($data['targetOperand']) : $data['targetOperand'];
        }
    }
}
