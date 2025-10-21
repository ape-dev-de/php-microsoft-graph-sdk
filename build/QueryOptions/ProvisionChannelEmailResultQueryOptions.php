<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProvisionChannelEmailResult resources
 *
 * Available select fields:
 * - email
 */
class ProvisionChannelEmailResultQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProvisionChannelEmailResult
     */
    public const FIELD_EMAIL = 'email';

    /**
     * Select specific ProvisionChannelEmailResult properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
