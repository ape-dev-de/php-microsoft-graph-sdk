<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeletedItemContainer
 */
class DeletedItemContainer
{
    /**
     * Deleted workflows that end up in the deletedItemsContainer.
     */
    private ?string $workflows;

    public function getWorkflows(): ?string
    {
        return $this->workflows;
    }

    public function setWorkflows(?string $workflows): self
    {
        $this->workflows = $workflows;
        return $this;
    }

}
