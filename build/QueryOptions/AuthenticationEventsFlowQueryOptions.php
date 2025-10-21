<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationEventsFlow resources
 *
 * Available select fields:
 * - conditions
 * - description
 * - displayName
 */
class AuthenticationEventsFlowQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationEventsFlow
     */
    public const FIELD_CONDITIONS = 'conditions';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';

    /**
     * Select specific AuthenticationEventsFlow properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
