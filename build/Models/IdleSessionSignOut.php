<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdleSessionSignOut
 */
class IdleSessionSignOut
{
    /**
     * Indicates whether the idle session sign-out policy is enabled.
     */
    private ?bool $isEnabled;

    /**
     * Number of seconds of inactivity after which a user is signed out.
     */
    private ?float $signOutAfterInSeconds;

    /**
     * Number of seconds of inactivity after which a user is notified that they'll be signed out.
     */
    private ?string $warnAfterInSeconds;

    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(?bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;
        return $this;
    }

    public function getSignOutAfterInSeconds(): ?float
    {
        return $this->signOutAfterInSeconds;
    }

    public function setSignOutAfterInSeconds(?float $signOutAfterInSeconds): self
    {
        $this->signOutAfterInSeconds = $signOutAfterInSeconds;
        return $this;
    }

    public function getWarnAfterInSeconds(): ?string
    {
        return $this->warnAfterInSeconds;
    }

    public function setWarnAfterInSeconds(?string $warnAfterInSeconds): self
    {
        $this->warnAfterInSeconds = $warnAfterInSeconds;
        return $this;
    }

}
