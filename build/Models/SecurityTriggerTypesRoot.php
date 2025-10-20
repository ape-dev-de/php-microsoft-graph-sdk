<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityTriggerTypesRoot
 */
class SecurityTriggerTypesRoot
{
    /**
     */
    private ?string $retentionEventTypes;

    public function getRetentionEventTypes(): ?string
    {
        return $this->retentionEventTypes;
    }

    public function setRetentionEventTypes(?string $retentionEventTypes): self
    {
        $this->retentionEventTypes = $retentionEventTypes;
        return $this;
    }

}
