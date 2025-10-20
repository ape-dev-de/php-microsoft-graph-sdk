<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamworkApplicationIdentity resources
 *
 * Available select fields:
 * - applicationIdentityType
 */
class TeamworkApplicationIdentityQueryOptions extends QueryOptions
{
    public const FIELD_APPLICATION_IDENTITY_TYPE = 'applicationIdentityType';

    /**
     * Select specific TeamworkApplicationIdentity properties
     * 
     * @param array<string> $select Use TeamworkApplicationIdentityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
