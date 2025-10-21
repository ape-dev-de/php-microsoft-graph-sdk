<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserSignInInsight
 */
class UserSignInInsight
{
    /**
     * Indicates when the user last signed in.
     */
    private ?\DateTimeInterface $lastSignInDateTime;


    public function getLastSignInDateTime(): ?\DateTimeInterface
    {
        return $this->lastSignInDateTime;
    }

    public function setLastSignInDateTime(?\DateTimeInterface $lastSignInDateTime): self
    {
        $this->lastSignInDateTime = $lastSignInDateTime;
        return $this;
    }

}
