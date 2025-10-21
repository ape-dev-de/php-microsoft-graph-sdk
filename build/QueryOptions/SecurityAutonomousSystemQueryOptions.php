<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityAutonomousSystem resources
 *
 * Available select fields:
 * - name
 * - number
 * - organization
 * - value
 */
class SecurityAutonomousSystemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityAutonomousSystem
     */
    public const FIELD_NAME = 'name';
    public const FIELD_NUMBER = 'number';
    public const FIELD_ORGANIZATION = 'organization';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityAutonomousSystem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
