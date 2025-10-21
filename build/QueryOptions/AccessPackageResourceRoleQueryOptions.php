<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageResourceRole resources
 *
 * Available select fields:
 * - description
 * - displayName
 * - originId
 * - originSystem
 * - resource
 */
class AccessPackageResourceRoleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageResourceRole
     */
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_ORIGIN_ID = 'originId';
    public const FIELD_ORIGIN_SYSTEM = 'originSystem';
    public const FIELD_RESOURCE = 'resource';

    /**
     * Select specific AccessPackageResourceRole properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
