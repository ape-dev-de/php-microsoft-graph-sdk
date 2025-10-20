<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CommsOperation
 */
class CommsOperation
{
    /**
     * Unique Client Context string. Max limit is 256 chars.
     */
    private ?string $clientContext;

    /**
     * The result information. Read-only.
     */
    private ?string $resultInfo;

    /**
     */
    private ?string $status;

    public function getClientContext(): ?string
    {
        return $this->clientContext;
    }

    public function setClientContext(?string $clientContext): self
    {
        $this->clientContext = $clientContext;
        return $this;
    }

    public function getResultInfo(): ?string
    {
        return $this->resultInfo;
    }

    public function setResultInfo(?string $resultInfo): self
    {
        $this->resultInfo = $resultInfo;
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

}
