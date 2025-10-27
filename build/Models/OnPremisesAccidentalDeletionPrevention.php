<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnPremisesAccidentalDeletionPrevention
 */
class OnPremisesAccidentalDeletionPrevention
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Threshold value which triggers accidental deletion prevention. The threshold is either an absolute number of objects or a percentage number of objects. */
    public ?float $alertThreshold = null;

    /** 
     * The status of the accidental deletion prevention feature. The possible values are: disabled, enabledForCount, enabledForPercentage, unknownFutureValue.
     * @var OnPremisesDirectorySynchronizationDeletionPreventionType|\stdClass|null
     */
    public OnPremisesDirectorySynchronizationDeletionPreventionType|\stdClass|null $synchronizationPreventionType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['alertThreshold'])) {
            $this->alertThreshold = $data['alertThreshold'];
        }
        if (isset($data['synchronizationPreventionType'])) {
            $this->synchronizationPreventionType = is_array($data['synchronizationPreventionType']) ? new OnPremisesDirectorySynchronizationDeletionPreventionType($data['synchronizationPreventionType']) : $data['synchronizationPreventionType'];
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
