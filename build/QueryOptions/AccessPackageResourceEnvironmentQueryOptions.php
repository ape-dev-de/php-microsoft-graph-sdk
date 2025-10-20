<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageResourceEnvironment resources
 *
 * Available select fields:
 * - connectionInfo
 * - createdDateTime
 * - description
 * - displayName
 * - isDefaultEnvironment
 * - modifiedDateTime
 * - originId
 * - originSystem
 * - resources
 */
class AccessPackageResourceEnvironmentQueryOptions extends QueryOptions
{
    public const FIELD_CONNECTION_INFO = 'connectionInfo';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_DEFAULT_ENVIRONMENT = 'isDefaultEnvironment';
    public const FIELD_MODIFIED_DATE_TIME = 'modifiedDateTime';
    public const FIELD_ORIGIN_ID = 'originId';
    public const FIELD_ORIGIN_SYSTEM = 'originSystem';
    public const FIELD_RESOURCES = 'resources';

    /**
     * Select specific AccessPackageResourceEnvironment properties
     * 
     * @param array<string> $select Use AccessPackageResourceEnvironmentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
