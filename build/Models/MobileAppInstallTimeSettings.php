<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileAppInstallTimeSettings
 */
class MobileAppInstallTimeSettings
{
    /**
     * The time at which the app should be installed.
     */
    private ?\DateTimeInterface $deadlineDateTime;

    /**
     * The time at which the app should be available for installation.
     */
    private ?\DateTimeInterface $startDateTime;

    /**
     * Contains properties used to determine when to offer an app to devices and when to install the app on devices.
     */
    private ?string $useLocalTime;


    public function getDeadlineDateTime(): ?\DateTimeInterface
    {
        return $this->deadlineDateTime;
    }

    public function setDeadlineDateTime(?\DateTimeInterface $deadlineDateTime): self
    {
        $this->deadlineDateTime = $deadlineDateTime;
        return $this;
    }

    public function getStartDateTime(): ?\DateTimeInterface
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?\DateTimeInterface $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    public function getUseLocalTime(): ?string
    {
        return $this->useLocalTime;
    }

    public function setUseLocalTime(?string $useLocalTime): self
    {
        $this->useLocalTime = $useLocalTime;
        return $this;
    }

}
