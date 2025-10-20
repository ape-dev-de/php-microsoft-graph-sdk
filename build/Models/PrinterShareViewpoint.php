<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrinterShareViewpoint
 */
class PrinterShareViewpoint
{
    /**
     * Date and time when the printer was last used by the signed-in user. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastUsedDateTime;

    public function getLastUsedDateTime(): ?\DateTimeInterface
    {
        return $this->lastUsedDateTime;
    }

    public function setLastUsedDateTime(?\DateTimeInterface $lastUsedDateTime): self
    {
        $this->lastUsedDateTime = $lastUsedDateTime;
        return $this;
    }

}
