<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppAssignmentSettings
 */
class Win32LobAppAssignmentSettings
{
    /**
     * The auto-update settings to apply for this app assignment.
     */
    private ?string $autoUpdateSettings;

    /**
     */
    private ?string $deliveryOptimizationPriority;

    /**
     * The install time settings to apply for this app assignment.
     */
    private ?string $installTimeSettings;

    /**
     */
    private ?string $notifications;

    /**
     * Contains properties used to assign an Win32 LOB mobile app to a group.
     */
    private ?string $restartSettings;

    public function getAutoUpdateSettings(): ?string
    {
        return $this->autoUpdateSettings;
    }

    public function setAutoUpdateSettings(?string $autoUpdateSettings): self
    {
        $this->autoUpdateSettings = $autoUpdateSettings;
        return $this;
    }

    public function getDeliveryOptimizationPriority(): ?string
    {
        return $this->deliveryOptimizationPriority;
    }

    public function setDeliveryOptimizationPriority(?string $deliveryOptimizationPriority): self
    {
        $this->deliveryOptimizationPriority = $deliveryOptimizationPriority;
        return $this;
    }

    public function getInstallTimeSettings(): ?string
    {
        return $this->installTimeSettings;
    }

    public function setInstallTimeSettings(?string $installTimeSettings): self
    {
        $this->installTimeSettings = $installTimeSettings;
        return $this;
    }

    public function getNotifications(): ?string
    {
        return $this->notifications;
    }

    public function setNotifications(?string $notifications): self
    {
        $this->notifications = $notifications;
        return $this;
    }

    public function getRestartSettings(): ?string
    {
        return $this->restartSettings;
    }

    public function setRestartSettings(?string $restartSettings): self
    {
        $this->restartSettings = $restartSettings;
        return $this;
    }

}
