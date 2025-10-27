<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomTimeZone
 */
class CustomTimeZone
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The name of a time zone. It can be a standard time zone name such as 'Hawaii-Aleutian Standard Time', or 'Customized Time Zone' for a custom time zone. */
    public ?string $name = null;

    /** The time offset of the time zone from Coordinated Universal Time (UTC). This value is in minutes. Time zones that are ahead of UTC have a positive offset; time zones that are behind UTC have a negative offset. */
    public ?float $bias = null;

    /** 
     * Specifies when the time zone switches from standard time to daylight saving time.
     * @var DaylightTimeZoneOffset|\stdClass|null
     */
    public mixed $daylightOffset = null;

    /** 
     * Specifies when the time zone switches from daylight saving time to standard time.
     * @var StandardTimeZoneOffset|\stdClass|null
     */
    public mixed $standardOffset = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['bias'])) {
            $this->bias = $data['bias'];
        }
        if (isset($data['daylightOffset'])) {
            $this->daylightOffset = is_array($data['daylightOffset']) ? new DaylightTimeZoneOffset($data['daylightOffset']) : $data['daylightOffset'];
        }
        if (isset($data['standardOffset'])) {
            $this->standardOffset = is_array($data['standardOffset']) ? new StandardTimeZoneOffset($data['standardOffset']) : $data['standardOffset'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
