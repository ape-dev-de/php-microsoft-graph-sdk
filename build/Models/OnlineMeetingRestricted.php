<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnlineMeetingRestricted
 */
class OnlineMeetingRestricted
{
    /**
     * Specifies the reason shared content from this participant is disabled. Possible values are: watermarkProtection, unknownFutureValue.
     */
    private ?string $contentSharingDisabled;

    /**
     * Specifies the reason video from this participant is disabled. Possible values are: watermarkProtection, unknownFutureValue.
     */
    private ?string $videoDisabled;

    public function getContentSharingDisabled(): ?string
    {
        return $this->contentSharingDisabled;
    }

    public function setContentSharingDisabled(?string $contentSharingDisabled): self
    {
        $this->contentSharingDisabled = $contentSharingDisabled;
        return $this;
    }

    public function getVideoDisabled(): ?string
    {
        return $this->videoDisabled;
    }

    public function setVideoDisabled(?string $videoDisabled): self
    {
        $this->videoDisabled = $videoDisabled;
        return $this;
    }

}
