<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FilterClause
 */
class FilterClause
{
    /**
     * Name of the operator to be applied to the source and target operands. Must be one of the supported operators. Supported operators can be discovered.
     */
    private ?string $operatorName;

    /**
     * Name of source operand (the operand being tested). The source operand name must match one of the attribute names on the source object.
     */
    private ?string $sourceOperandName;

    /**
     * Values that the source operand will be tested against.
     */
    private ?string $targetOperand;


    public function getOperatorName(): ?string
    {
        return $this->operatorName;
    }

    public function setOperatorName(?string $operatorName): self
    {
        $this->operatorName = $operatorName;
        return $this;
    }

    public function getSourceOperandName(): ?string
    {
        return $this->sourceOperandName;
    }

    public function setSourceOperandName(?string $sourceOperandName): self
    {
        $this->sourceOperandName = $sourceOperandName;
        return $this;
    }

    public function getTargetOperand(): ?string
    {
        return $this->targetOperand;
    }

    public function setTargetOperand(?string $targetOperand): self
    {
        $this->targetOperand = $targetOperand;
        return $this;
    }

}
