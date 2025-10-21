<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationEventListener resources
 *
 * Available select fields:
 * - authenticationEventsFlowId
 * - conditions
 */
class AuthenticationEventListenerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationEventListener
     */
    public const FIELD_AUTHENTICATION_EVENTS_FLOW_ID = 'authenticationEventsFlowId';
    public const FIELD_CONDITIONS = 'conditions';

    /**
     * Select specific AuthenticationEventListener properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
