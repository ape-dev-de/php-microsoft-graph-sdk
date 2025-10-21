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
    /**
     * Available select fields for ConditionalAccessAuthenticationFlows
     */
    public const FIELD_TRANSFER_METHODS = 'transferMethods';

    /**
     * Select specific ConditionalAccessAuthenticationFlows properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
