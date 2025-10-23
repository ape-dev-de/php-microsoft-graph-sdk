<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeZoneInformation
 */
class TimeZoneInformation
{
    /** An identifier for the time zone. */
    public ?string $alias = null;

    /** A display string that represents the time zone. */
    public ?string $displayName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['alias'])) {
            $this->alias = $data['alias'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
    }
}
