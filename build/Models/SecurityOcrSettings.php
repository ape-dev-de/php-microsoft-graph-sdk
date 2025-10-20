<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityOcrSettings
 */
class SecurityOcrSettings
{
    /**
     * Indicates whether or not OCR is enabled for the case.
     */
    private ?bool $isEnabled;

    /**
     * Maximum image size that will be processed in KB).
     */
    private ?float $maxImageSize;

    /**
     * The timeout duration for the OCR engine. A longer timeout might increase success of OCR, but might add to the total processing time.
     */
    private ?string $timeout;

    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(?bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;
        return $this;
    }

    public function getMaxImageSize(): ?float
    {
        return $this->maxImageSize;
    }

    public function setMaxImageSize(?float $maxImageSize): self
    {
        $this->maxImageSize = $maxImageSize;
        return $this;
    }

    public function getTimeout(): ?string
    {
        return $this->timeout;
    }

    public function setTimeout(?string $timeout): self
    {
        $this->timeout = $timeout;
        return $this;
    }

}
