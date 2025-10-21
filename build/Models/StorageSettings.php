<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StorageSettings
 */
class StorageSettings
{
    /**
     */
    private ?string $quota;


    public function getQuota(): ?string
    {
        return $this->quota;
    }

    public function setQuota(?string $quota): self
    {
        $this->quota = $quota;
        return $this;
    }

}
