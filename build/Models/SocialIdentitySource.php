<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SocialIdentitySource
 */
class SocialIdentitySource
{
    /**
     */
    private ?string $displayName;

    /**
     */
    private ?string $socialIdentitySourceType;

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getSocialIdentitySourceType(): ?string
    {
        return $this->socialIdentitySourceType;
    }

    public function setSocialIdentitySourceType(?string $socialIdentitySourceType): self
    {
        $this->socialIdentitySourceType = $socialIdentitySourceType;
        return $this;
    }

}
