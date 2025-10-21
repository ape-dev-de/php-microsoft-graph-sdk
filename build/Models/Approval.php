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
     * @var string[]
     */
    private array $stages = [];


    /**
     * @return string[]
     */
    public function getStages(): array
    {
        return $this->stages;
    }

    /**
     * @param string[] $stages
     */
    public function setStages(array $stages): self
    {
        $this->stages = $stages;
        return $this;
    }

}
