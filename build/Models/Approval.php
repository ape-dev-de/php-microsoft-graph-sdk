<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Approval
 */
class Approval
{
    /**
     * A collection of stages in the approval decision.
     */
    private ?string $stages;

    public function getStages(): ?string
    {
        return $this->stages;
    }

    public function setStages(?string $stages): self
    {
        $this->stages = $stages;
        return $this;
    }

}
