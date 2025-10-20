<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageResourceScope resources
 *
 * Available select fields:
 * - description
 * - displayName
 * - isRootScope
 * - originId
 * - originSystem
 * - resource
 */
class AccessPackageResourceScopeQueryOptions extends QueryOptions
{
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_ROOT_SCOPE = 'isRootScope';
    public const FIELD_ORIGIN_ID = 'originId';
    public const FIELD_ORIGIN_SYSTEM = 'originSystem';
    public const FIELD_RESOURCE = 'resource';

    /**
     * Select specific AccessPackageResourceScope properties
     * 
     * @param array<string> $select Use AccessPackageResourceScopeQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
