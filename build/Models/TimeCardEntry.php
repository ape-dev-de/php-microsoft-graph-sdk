<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeCardEntry
 */
class TimeCardEntry
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The clock-in event of the timeCard.
     * @var TimeCardBreak[]
     */
    public array $breaks = [];

    /** 
     * The clock-out event of the timeCard.
     * @var TimeCardEvent|\stdClass|null
     */
    public TimeCardEvent|\stdClass|null $clockInEvent = null;

    /** 
     * The list of breaks associated with the timeCard.
     * @var TimeCardEvent|\stdClass|null
     */
    public TimeCardEvent|\stdClass|null $clockOutEvent = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['breaks'])) {
            $this->breaks = $data['breaks'];
        }
        if (isset($data['clockInEvent'])) {
            $this->clockInEvent = is_array($data['clockInEvent']) ? new TimeCardEvent($data['clockInEvent']) : $data['clockInEvent'];
        }
        if (isset($data['clockOutEvent'])) {
            $this->clockOutEvent = is_array($data['clockOutEvent']) ? new TimeCardEvent($data['clockOutEvent']) : $data['clockOutEvent'];
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
