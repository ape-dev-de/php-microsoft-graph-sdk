<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DateTimeTimeZone
 */
class DateTimeTimeZone
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** A single point of time in a combined date and time representation ({date}T{time}; for example, 2017-08-29T04:00:00.0000000). */
    public ?string $dateTime = null;

    /** Represents a time zone, for example, 'Pacific Standard Time'. See below for more possible values. */
    public ?string $timeZone = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['dateTime'])) {
            $this->dateTime = $data['dateTime'];
        }
        if (isset($data['timeZone'])) {
            $this->timeZone = $data['timeZone'];
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
