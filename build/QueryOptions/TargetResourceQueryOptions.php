<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TargetResource resources
 *
 * Available select fields:
 * - displayName
 * - groupType
 * - id
 * - modifiedProperties
 * - type
 * - userPrincipalName
 */
class TargetResourceQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_GROUP_TYPE = 'groupType';
    public const FIELD_ID = 'id';
    public const FIELD_MODIFIED_PROPERTIES = 'modifiedProperties';
    public const FIELD_TYPE = 'type';
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';

    /**
     * Select specific TargetResource properties
     * 
     * @param array<string> $select Use TargetResourceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
