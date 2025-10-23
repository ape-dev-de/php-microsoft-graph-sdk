<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnPremisesAccidentalDeletionPrevention
 */
class OnPremisesAccidentalDeletionPrevention
{
    /** Threshold value which triggers accidental deletion prevention. The threshold is either an absolute number of objects or a percentage number of objects. */
    public ?float $alertThreshold = null;

    /** 
     * The status of the accidental deletion prevention feature. The possible values are: disabled, enabledForCount, enabledForPercentage, unknownFutureValue.
     * @var OnPremisesDirectorySynchronizationDeletionPreventionType|\stdClass|null
     */
    public mixed $synchronizationPreventionType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['alertThreshold'])) {
            $this->alertThreshold = $data['alertThreshold'];
        }
        if (isset($data['synchronizationPreventionType'])) {
            $this->synchronizationPreventionType = is_array($data['synchronizationPreventionType']) ? new OnPremisesDirectorySynchronizationDeletionPreventionType($data['synchronizationPreventionType']) : $data['synchronizationPreventionType'];
        }
    }
}
