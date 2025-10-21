<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityTriggerTypesRoot
 */
class SecurityTriggerTypesRoot
{
    /**
     * @var string[]
     */
    private array $retentionEventTypes = [];


    /**
     * @return string[]
     */
    public function getRetentionEventTypes(): array
    {
        return $this->retentionEventTypes;
    }

    /**
     * @param string[] $retentionEventTypes
     */
    public function setRetentionEventTypes(array $retentionEventTypes): self
    {
        $this->retentionEventTypes = $retentionEventTypes;
        return $this;
    }

}
