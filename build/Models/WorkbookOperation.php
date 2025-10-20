<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookOperation
 */
class WorkbookOperation
{
    /**
     * The error returned by the operation.
     */
    private ?string $error;

    /**
     * The resource URI for the result.
     */
    private ?string $resourceLocation;

    /**
     */
    private ?string $status;

    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(?string $error): self
    {
        $this->error = $error;
        return $this;
    }

    public function getResourceLocation(): ?string
    {
        return $this->resourceLocation;
    }

    public function setResourceLocation(?string $resourceLocation): self
    {
        $this->resourceLocation = $resourceLocation;
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
