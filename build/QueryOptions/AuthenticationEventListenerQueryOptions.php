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
    public const FIELD_AUTHENTICATION_EVENTS_FLOW_ID = 'authenticationEventsFlowId';
    public const FIELD_CONDITIONS = 'conditions';

    /**
     * Select specific AuthenticationEventListener properties
     * 
     * @param array<string> $select Use AuthenticationEventListenerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
