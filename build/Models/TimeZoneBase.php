<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeZoneBase
 */
class TimeZoneBase
{
    /**
     * The name of a time zone. It can be a standard time zone name such as ''Hawaii-Aleutian Standard Time'', or ''Customized Time Zone'' for a custom time zone.
     */
    private ?string $name;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

}
