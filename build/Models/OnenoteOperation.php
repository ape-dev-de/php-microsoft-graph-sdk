<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenoteOperation
 */
class OnenoteOperation
{
    /**
     * The error returned by the operation.
     */
    private ?string $error;

    /**
     * The operation percent complete if the operation is still in running status.
     */
    private ?string $percentComplete;

    /**
     * The resource id.
     */
    private ?string $resourceId;

    /**
     * The resource URI for the object. For example, the resource URI for a copied page or section.
     */
    private ?string $resourceLocation;

    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(?string $error): self
    {
        $this->error = $error;
        return $this;
    }

    public function getPercentComplete(): ?string
    {
        return $this->percentComplete;
    }

    public function setPercentComplete(?string $percentComplete): self
    {
        $this->percentComplete = $percentComplete;
        return $this;
    }

    public function getResourceId(): ?string
    {
        return $this->resourceId;
    }

    public function setResourceId(?string $resourceId): self
    {
        $this->resourceId = $resourceId;
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

}
