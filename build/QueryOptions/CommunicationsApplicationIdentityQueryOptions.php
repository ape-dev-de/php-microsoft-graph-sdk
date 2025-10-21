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
    /**
     * Available select fields for CommunicationsApplicationIdentity
     */
    public const FIELD_APPLICATION_TYPE = 'applicationType';
    public const FIELD_HIDDEN = 'hidden';

    /**
     * Select specific CommunicationsApplicationIdentity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
