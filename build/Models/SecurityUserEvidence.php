<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityUserEvidence
 */
class SecurityUserEvidence
{
    /**
     */
    private ?string $stream;

    /**
     * The user account details.
     */
    private ?string $userAccount;

    public function getStream(): ?string
    {
        return $this->stream;
    }

    public function setStream(?string $stream): self
    {
        $this->stream = $stream;
        return $this;
    }

    public function getUserAccount(): ?string
    {
        return $this->userAccount;
    }

    public function setUserAccount(?string $userAccount): self
    {
        $this->userAccount = $userAccount;
        return $this;
    }

}
