<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LinkedResource
 */
class LinkedResource
{
    /**
     * The app name of the source that sends the linkedResource.
     */
    private ?string $applicationName;

    /**
     * The title of the linkedResource.
     */
    private ?string $displayName;

    /**
     * ID of the object that is associated with this task on the third-party/partner system.
     */
    private ?string $externalId;

    /**
     * Deep link to the linkedResource.
     */
    private ?string $webUrl;

    public function getApplicationName(): ?string
    {
        return $this->applicationName;
    }

    public function setApplicationName(?string $applicationName): self
    {
        $this->applicationName = $applicationName;
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

    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    public function setExternalId(?string $externalId): self
    {
        $this->externalId = $externalId;
        return $this;
    }

    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    public function setWebUrl(?string $webUrl): self
    {
        $this->webUrl = $webUrl;
        return $this;
    }

}
