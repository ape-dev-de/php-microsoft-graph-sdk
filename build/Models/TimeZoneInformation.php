<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeZoneInformation
 */
class TimeZoneInformation
{
    /**
     * An identifier for the time zone.
     */
    private ?string $alias;

    /**
     * A display string that represents the time zone.
     */
    private ?string $displayName;


    public function getAlias(): ?string
    {
        return $this->alias;
    }

    public function setAlias(?string $alias): self
    {
        $this->alias = $alias;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

}
