<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PendingOperations
 */
class PendingOperations
{
    /**
     * A property that indicates that an operation that might update the binary content of a file is pending completion.
     */
    private ?string $pendingContentUpdate;

    public function getPendingContentUpdate(): ?string
    {
        return $this->pendingContentUpdate;
    }

    public function setPendingContentUpdate(?string $pendingContentUpdate): self
    {
        $this->pendingContentUpdate = $pendingContentUpdate;
        return $this;
    }

}
