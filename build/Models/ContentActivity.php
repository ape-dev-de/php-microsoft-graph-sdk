<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ContentActivity
 */
class ContentActivity
{
    /**
     */
    private ?string $contentMetadata;

    /**
     * The scope identified from computed protection scopes.
     */
    private ?string $scopeIdentifier;

    /**
     * ID of the user.
     */
    private ?string $userId;


    public function getContentMetadata(): ?string
    {
        return $this->contentMetadata;
    }

    public function setContentMetadata(?string $contentMetadata): self
    {
        $this->contentMetadata = $contentMetadata;
        return $this;
    }

    public function getScopeIdentifier(): ?string
    {
        return $this->scopeIdentifier;
    }

    public function setScopeIdentifier(?string $scopeIdentifier): self
    {
        $this->scopeIdentifier = $scopeIdentifier;
        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

}
