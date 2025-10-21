<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityTriggersRoot
 */
class SecurityTriggersRoot
{
    /**
     * @var string[]
     */
    private array $retentionEvents = [];


    /**
     * @return string[]
     */
    public function getRetentionEvents(): array
    {
        return $this->retentionEvents;
    }

    /**
     * @param string[] $retentionEvents
     */
    public function setRetentionEvents(array $retentionEvents): self
    {
        $this->retentionEvents = $retentionEvents;
        return $this;
    }

}
