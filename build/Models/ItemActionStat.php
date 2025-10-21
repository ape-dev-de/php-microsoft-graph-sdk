<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ItemActionStat
 */
class ItemActionStat
{
    /**
     * The number of times the action took place. Read-only.
     */
    private ?float $actionCount;

    /**
     * The number of distinct actors that performed the action. Read-only.
     */
    private ?string $actorCount;


    public function getActionCount(): ?float
    {
        return $this->actionCount;
    }

    public function setActionCount(?float $actionCount): self
    {
        $this->actionCount = $actionCount;
        return $this;
    }

    public function getActorCount(): ?string
    {
        return $this->actorCount;
    }

    public function setActorCount(?string $actorCount): self
    {
        $this->actorCount = $actorCount;
        return $this;
    }

}
