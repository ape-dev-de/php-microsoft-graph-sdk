<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppRoleAssignment resources
 *
 * Available select fields:
 * - appRoleId
 * - createdDateTime
 * - principalDisplayName
 * - principalId
 * - principalType
 * - resourceDisplayName
 * - resourceId
 */
class AppRoleAssignmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AppRoleAssignment
     */
    public const FIELD_APP_ROLE_ID = 'appRoleId';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_PRINCIPAL_DISPLAY_NAME = 'principalDisplayName';
    public const FIELD_PRINCIPAL_ID = 'principalId';
    public const FIELD_PRINCIPAL_TYPE = 'principalType';
    public const FIELD_RESOURCE_DISPLAY_NAME = 'resourceDisplayName';
    public const FIELD_RESOURCE_ID = 'resourceId';

    /**
     * Select specific AppRoleAssignment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
