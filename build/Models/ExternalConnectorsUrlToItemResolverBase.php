<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsUrlToItemResolverBase
 */
class ExternalConnectorsUrlToItemResolverBase
{
    /**
     * The priority which defines the sequence in which the urlToItemResolverBase instances are evaluated.
     */
    private ?string $priority;


    public function getPriority(): ?string
    {
        return $this->priority;
    }

    public function setPriority(?string $priority): self
    {
        $this->priority = $priority;
        return $this;
    }

}
