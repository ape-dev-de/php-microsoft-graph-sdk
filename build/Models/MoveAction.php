<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MoveAction
 */
class MoveAction
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The name of the location the item was moved from. */
    public ?string $from = null;

    /** The name of the location the item was moved to. */
    public ?string $to = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['from'])) {
            $this->from = $data['from'];
        }
        if (isset($data['to'])) {
            $this->to = $data['to'];
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
