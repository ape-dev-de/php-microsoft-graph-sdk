<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RichLongRunningOperation
 */
class RichLongRunningOperation
{
    /**
     * Error that caused the operation to fail.
     */
    private ?string $error;

    /**
     * A value between 0 and 100 that indicates the progress of the operation.
     */
    private ?float $percentageComplete;

    /**
     * The unique identifier for the result.
     */
    private ?string $resourceId;

    /**
     * The status of a long-running operation.
     */
    private ?string $type;


    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(?string $error): self
    {
        $this->error = $error;
        return $this;
    }

    public function getPercentageComplete(): ?float
    {
        return $this->percentageComplete;
    }

    public function setPercentageComplete(?float $percentageComplete): self
    {
        $this->percentageComplete = $percentageComplete;
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

}
