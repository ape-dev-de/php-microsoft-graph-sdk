<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewSet
 */
class AccessReviewSet
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Represents the template and scheduling for an access review.
     * @var AccessReviewScheduleDefinition[]
     */
    public array $definitions = [];

    /** 
     * Represents a collection of access review history data and the scopes used to collect that data.
     * @var AccessReviewHistoryDefinition[]
     */
    public array $historyDefinitions = [];


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
        if (isset($data['definitions'])) {
            $this->definitions = $data['definitions'];
        }
        if (isset($data['historyDefinitions'])) {
            $this->historyDefinitions = $data['historyDefinitions'];
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
