<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsTabConfiguration
 */
class TeamsTabConfiguration
{
    /**
     * Url used for rendering tab contents in Teams. Required.
     */
    private ?string $contentUrl;

    /**
     * Identifier for the entity hosted by the tab provider.
     */
    private ?string $entityId;

    /**
     * Url called by Teams client when a Tab is removed using the Teams Client.
     */
    private ?string $removeUrl;

    /**
     * Url for showing tab contents outside of Teams.
     */
    private ?string $websiteUrl;


    public function getContentUrl(): ?string
    {
        return $this->contentUrl;
    }

    public function setContentUrl(?string $contentUrl): self
    {
        $this->contentUrl = $contentUrl;
        return $this;
    }

    public function getEntityId(): ?string
    {
        return $this->entityId;
    }

    public function setEntityId(?string $entityId): self
    {
        $this->entityId = $entityId;
        return $this;
    }

    public function getRemoveUrl(): ?string
    {
        return $this->removeUrl;
    }

    public function setRemoveUrl(?string $removeUrl): self
    {
        $this->removeUrl = $removeUrl;
        return $this;
    }

    public function getWebsiteUrl(): ?string
    {
        return $this->websiteUrl;
    }

    public function setWebsiteUrl(?string $websiteUrl): self
    {
        $this->websiteUrl = $websiteUrl;
        return $this;
    }

}
