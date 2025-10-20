<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuditActivityInitiator
 */
class AuditActivityInitiator
{
    /**
     * If the resource initiating the activity is an app, this property indicates all the app related information like appId and name.
     */
    private ?string $app;

    /**
     * If the resource initiating the activity is a user, this property Indicates all the user related information like user ID and userPrincipalName.
     */
    private ?string $user;

    public function getApp(): ?string
    {
        return $this->app;
    }

    public function setApp(?string $app): self
    {
        $this->app = $app;
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
