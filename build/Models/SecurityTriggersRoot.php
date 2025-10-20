<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityTriggersRoot
 */
class SecurityTriggersRoot
{
    /**
     */
    private ?string $retentionEvents;

    public function getRetentionEvents(): ?string
    {
        return $this->retentionEvents;
    }

    public function setRetentionEvents(?string $retentionEvents): self
    {
        $this->retentionEvents = $retentionEvents;
        return $this;
    }

}
