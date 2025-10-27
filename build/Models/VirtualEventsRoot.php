<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventsRoot
 */
class VirtualEventsRoot
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * 
     * @var VirtualEvent[]
     */
    public array $events = [];

    /** 
     * A collection of town halls. Nullable.
     * @var VirtualEventTownhall[]
     */
    public array $townhalls = [];

    /** 
     * A collection of webinars. Nullable.
     * @var VirtualEventWebinar[]
     */
    public array $webinars = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['events'])) {
            $this->events = $data['events'];
        }
        if (isset($data['townhalls'])) {
            $this->townhalls = $data['townhalls'];
        }
        if (isset($data['webinars'])) {
            $this->webinars = $data['webinars'];
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
