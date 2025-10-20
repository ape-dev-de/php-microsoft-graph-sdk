<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WebApp
 */
class WebApp
{
    /**
     * The web app URL. This property cannot be PATCHed.
     */
    private ?string $appUrl;

    /**
     * Contains properties and inherited properties for web apps.
     */
    private ?string $useManagedBrowser;

    public function getAppUrl(): ?string
    {
        return $this->appUrl;
    }

    public function setAppUrl(?string $appUrl): self
    {
        $this->appUrl = $appUrl;
        return $this;
    }

    public function getUseManagedBrowser(): ?string
    {
        return $this->useManagedBrowser;
    }

    public function setUseManagedBrowser(?string $useManagedBrowser): self
    {
        $this->useManagedBrowser = $useManagedBrowser;
        return $this;
    }

}
