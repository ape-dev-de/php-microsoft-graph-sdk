<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessAuthenticationFlows resources
 *
 * Available select fields:
 * - transferMethods
 */
class ConditionalAccessAuthenticationFlowsQueryOptions extends QueryOptions
{
    public const FIELD_TRANSFER_METHODS = 'transferMethods';

    /**
     * Select specific ConditionalAccessAuthenticationFlows properties
     * 
     * @param array<string> $select Use ConditionalAccessAuthenticationFlowsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
