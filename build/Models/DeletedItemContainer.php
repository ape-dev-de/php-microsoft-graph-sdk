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
     * @var string[]
     */
    private array $workflows = [];


    /**
     * @return string[]
     */
    public function getWorkflows(): array
    {
        return $this->workflows;
    }

    /**
     * @param string[] $workflows
     */
    public function setWorkflows(array $workflows): self
    {
        $this->workflows = $workflows;
        return $this;
    }

}
