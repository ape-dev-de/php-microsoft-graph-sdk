<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InboundOutboundPolicyConfiguration resources
 *
 * Available select fields:
 * - inboundAllowed
 * - outboundAllowed
 */
class InboundOutboundPolicyConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_INBOUND_ALLOWED = 'inboundAllowed';
    public const FIELD_OUTBOUND_ALLOWED = 'outboundAllowed';

    /**
     * Select specific InboundOutboundPolicyConfiguration properties
     * 
     * @param array<string> $select Use InboundOutboundPolicyConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
