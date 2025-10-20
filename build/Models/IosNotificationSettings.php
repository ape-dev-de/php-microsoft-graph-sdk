<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosNotificationSettings
 */
class IosNotificationSettings
{
    /**
     */
    private ?string $alertType;

    /**
     * Application name to be associated with the bundleID.
     */
    private ?string $appName;

    /**
     * Indicates whether badges are allowed for this app.
     */
    private ?bool $badgesEnabled;

    /**
     * Bundle id of app to which to apply these notification settings.
     */
    private ?string $bundleID;

    /**
     * Indicates whether notifications are allowed for this app.
     */
    private ?bool $enabled;

    /**
     * Publisher to be associated with the bundleID.
     */
    private ?string $publisher;

    /**
     * Indicates whether notifications can be shown in notification center.
     */
    private ?bool $showInNotificationCenter;

    /**
     * Indicates whether notifications can be shown on the lock screen.
     */
    private ?bool $showOnLockScreen;

    /**
     * An item describing notification setting.
     */
    private ?string $soundsEnabled;

    public function getAlertType(): ?string
    {
        return $this->alertType;
    }

    public function setAlertType(?string $alertType): self
    {
        $this->alertType = $alertType;
        return $this;
    }

    public function getAppName(): ?string
    {
        return $this->appName;
    }

    public function setAppName(?string $appName): self
    {
        $this->appName = $appName;
        return $this;
    }

    public function getBadgesEnabled(): ?bool
    {
        return $this->badgesEnabled;
    }

    public function setBadgesEnabled(?bool $badgesEnabled): self
    {
        $this->badgesEnabled = $badgesEnabled;
        return $this;
    }

    public function getBundleID(): ?string
    {
        return $this->bundleID;
    }

    public function setBundleID(?string $bundleID): self
    {
        $this->bundleID = $bundleID;
        return $this;
    }

    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(?bool $enabled): self
    {
        $this->enabled = $enabled;
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

    public function getShowInNotificationCenter(): ?bool
    {
        return $this->showInNotificationCenter;
    }

    public function setShowInNotificationCenter(?bool $showInNotificationCenter): self
    {
        $this->showInNotificationCenter = $showInNotificationCenter;
        return $this;
    }

    public function getShowOnLockScreen(): ?bool
    {
        return $this->showOnLockScreen;
    }

    public function setShowOnLockScreen(?bool $showOnLockScreen): self
    {
        $this->showOnLockScreen = $showOnLockScreen;
        return $this;
    }

    public function getSoundsEnabled(): ?string
    {
        return $this->soundsEnabled;
    }

    public function setSoundsEnabled(?string $soundsEnabled): self
    {
        $this->soundsEnabled = $soundsEnabled;
        return $this;
    }

}
