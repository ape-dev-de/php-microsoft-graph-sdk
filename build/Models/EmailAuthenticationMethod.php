<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmailAuthenticationMethod
 */
class EmailAuthenticationMethod
{
    /**
     * The email address registered to this user.
     */
    private ?string $emailAddress;

    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    public function setEmailAddress(?string $emailAddress): self
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

}
