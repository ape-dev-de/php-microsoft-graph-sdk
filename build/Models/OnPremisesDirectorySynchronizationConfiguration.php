<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnPremisesDirectorySynchronizationConfiguration
 */
class OnPremisesDirectorySynchronizationConfiguration
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Contains the accidental deletion prevention configuration for a tenant.
     * @var OnPremisesAccidentalDeletionPrevention|\stdClass|null
     */
    public OnPremisesAccidentalDeletionPrevention|\stdClass|null $accidentalDeletionPrevention = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['accidentalDeletionPrevention'])) {
            $this->accidentalDeletionPrevention = is_array($data['accidentalDeletionPrevention']) ? new OnPremisesAccidentalDeletionPrevention($data['accidentalDeletionPrevention']) : $data['accidentalDeletionPrevention'];
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
