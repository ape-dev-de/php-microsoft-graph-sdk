<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WatermarkProtectionValues
 */
class WatermarkProtectionValues
{
    /**
     * Indicates whether to apply a watermark to any shared content.
     */
    private ?bool $isEnabledForContentSharing;

    /**
     * Indicates whether to apply a watermark to everyone's video feed.
     */
    private ?string $isEnabledForVideo;


    public function getIsEnabledForContentSharing(): ?bool
    {
        return $this->isEnabledForContentSharing;
    }

    public function setIsEnabledForContentSharing(?bool $isEnabledForContentSharing): self
    {
        $this->isEnabledForContentSharing = $isEnabledForContentSharing;
        return $this;
    }

    public function getIsEnabledForVideo(): ?string
    {
        return $this->isEnabledForVideo;
    }

    public function setIsEnabledForVideo(?string $isEnabledForVideo): self
    {
        $this->isEnabledForVideo = $isEnabledForVideo;
        return $this;
    }

}
