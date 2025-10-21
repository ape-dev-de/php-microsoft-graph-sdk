<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationJobApplicationParameters resources
 *
 * Available select fields:
 * - ruleId
 * - subjects
 */
class SynchronizationJobApplicationParametersQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SynchronizationJobApplicationParameters
     */
    public const FIELD_RULE_ID = 'ruleId';
    public const FIELD_SUBJECTS = 'subjects';

    /**
     * Select specific SynchronizationJobApplicationParameters properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
