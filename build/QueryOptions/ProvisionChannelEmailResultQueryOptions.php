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
    public const FIELD_EMAIL = 'email';

    /**
     * Select specific ProvisionChannelEmailResult properties
     * 
     * @param array<string> $select Use ProvisionChannelEmailResultQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
