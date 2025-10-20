<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerPlanCollectionResponse
 */
class PlannerPlanCollectionResponse
{
    /**
     */
    private array $value = [];

    public function getValue(): array
    {
        return $this->value;
    }

    public function setValue(array $value): self
    {
        $this->value = $value;
        return $this;
    }

}
