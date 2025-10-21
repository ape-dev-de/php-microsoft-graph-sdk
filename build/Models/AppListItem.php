<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppListItem
 */
class AppListItem
{
    /**
     * The application or bundle identifier of the application
     */
    private ?string $appId;

    /**
     * The Store URL of the application
     */
    private ?string $appStoreUrl;

    /**
     * The application name
     */
    private ?string $name;

    /**
     * Represents an app in the list of managed applications
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

    public function getAppStoreUrl(): ?string
    {
        return $this->appStoreUrl;
    }

    public function setAppStoreUrl(?string $appStoreUrl): self
    {
        $this->appStoreUrl = $appStoreUrl;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
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
