<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsServiceUserAgent
 */
class CallRecordsServiceUserAgent
{
    /**
     */
    private ?string $role;


    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): self
    {
        $this->role = $role;
        return $this;
    }

}
