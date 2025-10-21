<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AiInteractionLink
 */
class AiInteractionLink
{
    /**
     */
    private ?string $displayName;

    /**
     */
    private ?string $linkType;

    /**
     */
    private ?string $linkUrl;


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getLinkType(): ?string
    {
        return $this->linkType;
    }

    public function setLinkType(?string $linkType): self
    {
        $this->linkType = $linkType;
        return $this;
    }

    public function getLinkUrl(): ?string
    {
        return $this->linkUrl;
    }

    public function setLinkUrl(?string $linkUrl): self
    {
        $this->linkUrl = $linkUrl;
        return $this;
    }

}
