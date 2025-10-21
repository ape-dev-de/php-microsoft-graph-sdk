<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosiPadOSWebClip
 */
class IosiPadOSWebClip
{
    /**
     * Indicates iOS/iPadOS web clip app URL. Example: ''https://www.contoso.com
     */
    private ?string $appUrl;

    /**
     * Contains properties and inherited properties for iOS web apps.
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
