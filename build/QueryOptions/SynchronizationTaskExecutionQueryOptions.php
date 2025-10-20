<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationTaskExecution resources
 *
 * Available select fields:
 * - activityIdentifier
 * - countEntitled
 * - countEntitledForProvisioning
 * - countEscrowed
 * - countEscrowedRaw
 * - countExported
 * - countExports
 * - countImported
 * - countImportedDeltas
 * - countImportedReferenceDeltas
 * - error
 * - state
 * - timeBegan
 * - timeEnded
 */
class SynchronizationTaskExecutionQueryOptions extends QueryOptions
{
    public const FIELD_ACTIVITY_IDENTIFIER = 'activityIdentifier';
    public const FIELD_COUNT_ENTITLED = 'countEntitled';
    public const FIELD_COUNT_ENTITLED_FOR_PROVISIONING = 'countEntitledForProvisioning';
    public const FIELD_COUNT_ESCROWED = 'countEscrowed';
    public const FIELD_COUNT_ESCROWED_RAW = 'countEscrowedRaw';
    public const FIELD_COUNT_EXPORTED = 'countExported';
    public const FIELD_COUNT_EXPORTS = 'countExports';
    public const FIELD_COUNT_IMPORTED = 'countImported';
    public const FIELD_COUNT_IMPORTED_DELTAS = 'countImportedDeltas';
    public const FIELD_COUNT_IMPORTED_REFERENCE_DELTAS = 'countImportedReferenceDeltas';
    public const FIELD_ERROR = 'error';
    public const FIELD_STATE = 'state';
    public const FIELD_TIME_BEGAN = 'timeBegan';
    public const FIELD_TIME_ENDED = 'timeEnded';

    /**
     * Select specific SynchronizationTaskExecution properties
     * 
     * @param array<string> $select Use SynchronizationTaskExecutionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
