<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PermissionGrantPolicy resources
 *
 * Available select fields:
 * - excludes
 * - includes
 */
class PermissionGrantPolicyQueryOptions extends QueryOptions
{
    public const FIELD_EXCLUDES = 'excludes';
    public const FIELD_INCLUDES = 'includes';

    /**
     * Select specific PermissionGrantPolicy properties
     * 
     * @param array<string> $select Use PermissionGrantPolicyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
