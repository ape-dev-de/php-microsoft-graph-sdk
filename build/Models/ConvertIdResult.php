<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConvertIdResult
 */
class ConvertIdResult
{
    /**
     * An error object indicating the reason for the conversion failure. This value isn't present if the conversion succeeded.
     */
    private ?string $errorDetails;

    /**
     * The identifier that was converted. This value is the original, un-converted identifier.
     */
    private ?string $sourceId;

    /**
     * The converted identifier. This value isn't present if the conversion failed.
     */
    private ?string $targetId;


    public function getErrorDetails(): ?string
    {
        return $this->errorDetails;
    }

    public function setErrorDetails(?string $errorDetails): self
    {
        $this->errorDetails = $errorDetails;
        return $this;
    }

    public function getSourceId(): ?string
    {
        return $this->sourceId;
    }

    public function setSourceId(?string $sourceId): self
    {
        $this->sourceId = $sourceId;
        return $this;
    }

    public function getTargetId(): ?string
    {
        return $this->targetId;
    }

    public function setTargetId(?string $targetId): self
    {
        $this->targetId = $targetId;
        return $this;
    }

}
