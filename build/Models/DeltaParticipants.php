<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeltaParticipants
 */
class DeltaParticipants
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The sequence number for the roster update that is used to identify the notification order. */
    public ?float $sequenceNumber = null;

    /** 
     * The collection of participants that were updated since the last roster update.
     * @var Participant[]
     */
    public array $participants = [];


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
        if (isset($data['sequenceNumber'])) {
            $this->sequenceNumber = is_numeric($data['sequenceNumber']) ? (float)$data['sequenceNumber'] : $data['sequenceNumber'];
        }
        if (isset($data['participants'])) {
            $this->participants = $data['participants'];
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
