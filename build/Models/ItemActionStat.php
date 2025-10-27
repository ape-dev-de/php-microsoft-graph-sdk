<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ItemActionStat
 */
class ItemActionStat
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The number of times the action took place. Read-only. */
    public ?float $actionCount = null;

    /** The number of distinct actors that performed the action. Read-only. */
    public ?float $actorCount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['actionCount'])) {
            $this->actionCount = is_numeric($data['actionCount']) ? (float)$data['actionCount'] : $data['actionCount'];
        }
        if (isset($data['actorCount'])) {
            $this->actorCount = is_numeric($data['actorCount']) ? (float)$data['actorCount'] : $data['actorCount'];
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
