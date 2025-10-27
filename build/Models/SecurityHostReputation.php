<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHostReputation
 */
class SecurityHostReputation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?SecurityHostReputationClassification $classification = null;

    /** 
     * A collection of rules that have been used to calculate the classification and score.
     * @var SecurityHostReputationRule[]
     */
    public array $rules = [];

    /** The calculated score (0-100) of the requested host. A higher value indicates that this host is more likely to be suspicious or malicious. */
    public ?float $score = null;


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
        if (isset($data['classification'])) {
            $this->classification = is_array($data['classification']) ? new SecurityHostReputationClassification($data['classification']) : $data['classification'];
        }
        if (isset($data['rules'])) {
            $this->rules = $data['rules'];
        }
        if (isset($data['score'])) {
            $this->score = is_numeric($data['score']) ? (float)$data['score'] : $data['score'];
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
