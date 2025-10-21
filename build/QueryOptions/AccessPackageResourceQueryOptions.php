<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageResource resources
 *
 * Available select fields:
 * - attributes
 * - createdDateTime
 * - description
 * - displayName
 * - modifiedDateTime
 * - originId
 * - originSystem
 * - environment
 * - roles
 * - scopes
 */
class AccessPackageResourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageResource
     */
    public const FIELD_ATTRIBUTES = 'attributes';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_MODIFIED_DATE_TIME = 'modifiedDateTime';
    public const FIELD_ORIGIN_ID = 'originId';
    public const FIELD_ORIGIN_SYSTEM = 'originSystem';
    public const FIELD_ENVIRONMENT = 'environment';
    public const FIELD_ROLES = 'roles';
    public const FIELD_SCOPES = 'scopes';

    /**
     * Select specific AccessPackageResource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
