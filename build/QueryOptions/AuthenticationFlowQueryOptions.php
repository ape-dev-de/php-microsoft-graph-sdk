<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationFlow resources
 *
 * Available select fields:
 * - transferMethod
 */
class AuthenticationFlowQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationFlow
     */
    public const FIELD_TRANSFER_METHOD = 'transferMethod';

    /**
     * Select specific AuthenticationFlow properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
