<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosDeviceFeaturesConfiguration
 */
class IosDeviceFeaturesConfiguration
{
    /**
     * Asset tag information for the device, displayed on the login window and lock screen.
     */
    private ?string $assetTagTemplate;

    /**
     * A list of app and folders to appear on the Home Screen Dock. This collection can contain a maximum of 500 elements.
     */
    private array $homeScreenDockIcons = [];

    /**
     * A list of pages on the Home Screen. This collection can contain a maximum of 500 elements.
     */
    private array $homeScreenPages = [];

    /**
     * A footnote displayed on the login window and lock screen. Available in iOS 9.3.1 and later.
     */
    private ?string $lockScreenFootnote;

    /**
     * iOS Device Features Configuration Profile.
     * @var string[]
     */
    private array $notificationSettings = [];


    public function getAssetTagTemplate(): ?string
    {
        return $this->assetTagTemplate;
    }

    public function setAssetTagTemplate(?string $assetTagTemplate): self
    {
        $this->assetTagTemplate = $assetTagTemplate;
        return $this;
    }

    public function getHomeScreenDockIcons(): array
    {
        return $this->homeScreenDockIcons;
    }

    public function setHomeScreenDockIcons(array $homeScreenDockIcons): self
    {
        $this->homeScreenDockIcons = $homeScreenDockIcons;
        return $this;
    }

    public function getHomeScreenPages(): array
    {
        return $this->homeScreenPages;
    }

    public function setHomeScreenPages(array $homeScreenPages): self
    {
        $this->homeScreenPages = $homeScreenPages;
        return $this;
    }

    public function getLockScreenFootnote(): ?string
    {
        return $this->lockScreenFootnote;
    }

    public function setLockScreenFootnote(?string $lockScreenFootnote): self
    {
        $this->lockScreenFootnote = $lockScreenFootnote;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getNotificationSettings(): array
    {
        return $this->notificationSettings;
    }

    /**
     * @param string[] $notificationSettings
     */
    public function setNotificationSettings(array $notificationSettings): self
    {
        $this->notificationSettings = $notificationSettings;
        return $this;
    }

}
