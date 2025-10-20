<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DelegatedPermissionClassification resources
 *
 * Available select fields:
 * - classification
 * - permissionId
 * - permissionName
 */
class DelegatedPermissionClassificationQueryOptions extends QueryOptions
{
    public const FIELD_CLASSIFICATION = 'classification';
    public const FIELD_PERMISSION_ID = 'permissionId';
    public const FIELD_PERMISSION_NAME = 'permissionName';

    /**
     * Select specific DelegatedPermissionClassification properties
     * 
     * @param array<string> $select Use DelegatedPermissionClassificationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
