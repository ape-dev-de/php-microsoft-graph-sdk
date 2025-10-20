<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationJobRestartCriteria resources
 *
 * Available select fields:
 * - resetScope
 */
class SynchronizationJobRestartCriteriaQueryOptions extends QueryOptions
{
    public const FIELD_RESET_SCOPE = 'resetScope';

    /**
     * Select specific SynchronizationJobRestartCriteria properties
     * 
     * @param array<string> $select Use SynchronizationJobRestartCriteriaQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
