<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ItemAnalytics
 */
class ItemAnalytics
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * 
     * @var ItemActivityStat|\stdClass|null
     */
    public mixed $allTime = null;

    /** 
     * 
     * @var ItemActivityStat[]
     */
    public array $itemActivityStats = [];

    /** 
     * 
     * @var ItemActivityStat|\stdClass|null
     */
    public mixed $lastSevenDays = null;


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
        if (isset($data['allTime'])) {
            $this->allTime = is_array($data['allTime']) ? new ItemActivityStat($data['allTime']) : $data['allTime'];
        }
        if (isset($data['itemActivityStats'])) {
            $this->itemActivityStats = $data['itemActivityStats'];
        }
        if (isset($data['lastSevenDays'])) {
            $this->lastSevenDays = is_array($data['lastSevenDays']) ? new ItemActivityStat($data['lastSevenDays']) : $data['lastSevenDays'];
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
