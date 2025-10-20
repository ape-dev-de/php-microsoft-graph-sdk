<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityOauthApplicationEvidence
 */
class SecurityOauthApplicationEvidence
{
    /**
     * Unique identifier of the application.
     */
    private ?string $appId;

    /**
     * Name of the application.
     */
    private ?string $displayName;

    /**
     * The unique identifier of the application object in Azure AD.
     */
    private ?string $objectId;

    /**
     * The name of the application publisher.
     */
    private ?string $publisher;

    public function getAppId(): ?string
    {
        return $this->appId;
    }

    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getObjectId(): ?string
    {
        return $this->objectId;
    }

    public function setObjectId(?string $objectId): self
    {
        $this->objectId = $objectId;
        return $this;
    }

    public function getPublisher(): ?string
    {
        return $this->publisher;
    }

    public function setPublisher(?string $publisher): self
    {
        $this->publisher = $publisher;
        return $this;
    }

}
