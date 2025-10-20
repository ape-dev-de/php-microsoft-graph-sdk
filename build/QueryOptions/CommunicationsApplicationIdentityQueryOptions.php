<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CommunicationsApplicationIdentity resources
 *
 * Available select fields:
 * - applicationType
 * - hidden
 */
class CommunicationsApplicationIdentityQueryOptions extends QueryOptions
{
    public const FIELD_APPLICATION_TYPE = 'applicationType';
    public const FIELD_HIDDEN = 'hidden';

    /**
     * Select specific CommunicationsApplicationIdentity properties
     * 
     * @param array<string> $select Use CommunicationsApplicationIdentityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
