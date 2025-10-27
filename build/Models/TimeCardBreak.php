<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeCardBreak
 */
class TimeCardBreak
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** ID of the timeCardBreak. */
    public ?string $breakId = null;

    /** 
     * The start event of the timeCardBreak.
     * @var TimeCardEvent|\stdClass|null
     */
    public TimeCardEvent|\stdClass|null $end = null;

    /** 
     * Notes about the timeCardBreak.
     * @var ItemBody|\stdClass|null
     */
    public ItemBody|\stdClass|null $notes = null;

    /**  */
    public ?TimeCardEvent $start = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['breakId'])) {
            $this->breakId = $data['breakId'];
        }
        if (isset($data['end'])) {
            $this->end = is_array($data['end']) ? new TimeCardEvent($data['end']) : $data['end'];
        }
        if (isset($data['notes'])) {
            $this->notes = is_array($data['notes']) ? new ItemBody($data['notes']) : $data['notes'];
        }
        if (isset($data['start'])) {
            $this->start = is_array($data['start']) ? new TimeCardEvent($data['start']) : $data['start'];
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
