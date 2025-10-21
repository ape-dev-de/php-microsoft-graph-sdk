<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationStatus resources
 *
 * Available select fields:
 * - code
 * - countSuccessiveCompleteFailures
 * - escrowsPruned
 * - lastExecution
 * - lastSuccessfulExecution
 * - lastSuccessfulExecutionWithExports
 * - progress
 * - quarantine
 * - steadyStateFirstAchievedTime
 * - steadyStateLastAchievedTime
 * - synchronizedEntryCountByType
 * - troubleshootingUrl
 */
class SynchronizationStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SynchronizationStatus
     */
    public const FIELD_CODE = 'code';
    public const FIELD_COUNT_SUCCESSIVE_COMPLETE_FAILURES = 'countSuccessiveCompleteFailures';
    public const FIELD_ESCROWS_PRUNED = 'escrowsPruned';
    public const FIELD_LAST_EXECUTION = 'lastExecution';
    public const FIELD_LAST_SUCCESSFUL_EXECUTION = 'lastSuccessfulExecution';
    public const FIELD_LAST_SUCCESSFUL_EXECUTION_WITH_EXPORTS = 'lastSuccessfulExecutionWithExports';
    public const FIELD_PROGRESS = 'progress';
    public const FIELD_QUARANTINE = 'quarantine';
    public const FIELD_STEADY_STATE_FIRST_ACHIEVED_TIME = 'steadyStateFirstAchievedTime';
    public const FIELD_STEADY_STATE_LAST_ACHIEVED_TIME = 'steadyStateLastAchievedTime';
    public const FIELD_SYNCHRONIZED_ENTRY_COUNT_BY_TYPE = 'synchronizedEntryCountByType';
    public const FIELD_TROUBLESHOOTING_URL = 'troubleshootingUrl';

    /**
     * Select specific SynchronizationStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
