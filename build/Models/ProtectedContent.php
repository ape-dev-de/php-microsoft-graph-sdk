<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProtectedContent
 */
class ProtectedContent
{
    /**
     * The content id
     */
    private ?string $cid;

    /**
     * The content format.
     */
    private ?string $format;

    /**
     * The unique identifier for the sensitivity label applied to the content.
     */
    private ?string $labelId;


    public function getCid(): ?string
    {
        return $this->cid;
    }

    public function setCid(?string $cid): self
    {
        $this->cid = $cid;
        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(?string $format): self
    {
        $this->format = $format;
        return $this;
    }

    public function getLabelId(): ?string
    {
        return $this->labelId;
    }

    public function setLabelId(?string $labelId): self
    {
        $this->labelId = $labelId;
        return $this;
    }

}
