<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintTask
 */
class PrintTask
{
    /**
     * The URL for the print entity that triggered this task. For example, https://graph.microsoft.com/v1.0/print/printers/{printerId}/jobs/{jobId}. Read-only.
     */
    private ?string $parentUrl;

    /**
     */
    private ?string $status;

    /**
     */
    private ?string $definition;

    /**
     */
    private ?string $trigger;


    public function getParentUrl(): ?string
    {
        return $this->parentUrl;
    }

    public function setParentUrl(?string $parentUrl): self
    {
        $this->parentUrl = $parentUrl;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getDefinition(): ?string
    {
        return $this->definition;
    }

    public function setDefinition(?string $definition): self
    {
        $this->definition = $definition;
        return $this;
    }

    public function getTrigger(): ?string
    {
        return $this->trigger;
    }

    public function setTrigger(?string $trigger): self
    {
        $this->trigger = $trigger;
        return $this;
    }

}
