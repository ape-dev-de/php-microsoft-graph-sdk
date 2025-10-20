<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentitySet
 */
class IdentitySet
{
    /**
     * Optional. The application associated with this action.
     */
    private ?string $application;

    /**
     * Optional. The device associated with this action.
     */
    private ?string $device;

    /**
     * Optional. The user associated with this action.
     */
    private ?string $user;

    public function getApplication(): ?string
    {
        return $this->application;
    }

    public function setApplication(?string $application): self
    {
        $this->application = $application;
        return $this;
    }

    public function getDevice(): ?string
    {
        return $this->device;
    }

    public function setDevice(?string $device): self
    {
        $this->device = $device;
        return $this;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(?string $user): self
    {
        $this->user = $user;
        return $this;
    }

}
