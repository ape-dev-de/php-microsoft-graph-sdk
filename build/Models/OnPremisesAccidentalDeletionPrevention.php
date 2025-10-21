<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnPremisesAccidentalDeletionPrevention
 */
class OnPremisesAccidentalDeletionPrevention
{
    public function __construct(
        /** Threshold value which triggers accidental deletion prevention. The threshold is either an absolute number of objects or a percentage number of objects. */
        public ?float $alertThreshold = null,
        /** The status of the accidental deletion prevention feature. The possible values are: disabled, enabledForCount, enabledForPercentage, unknownFutureValue. */
        public ?OnPremisesDirectorySynchronizationDeletionPreventionType $synchronizationPreventionType = null
    ) {}
}
