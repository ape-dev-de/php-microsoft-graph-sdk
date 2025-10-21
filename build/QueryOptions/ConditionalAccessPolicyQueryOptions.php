<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessPolicy resources
 *
 * Available select fields:
 * - conditions
 * - createdDateTime
 * - description
 * - displayName
 * - grantControls
 * - modifiedDateTime
 * - sessionControls
 * - state
 * - templateId
 */
class ConditionalAccessPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConditionalAccessPolicy
     */
    public const FIELD_CONDITIONS = 'conditions';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_GRANT_CONTROLS = 'grantControls';
    public const FIELD_MODIFIED_DATE_TIME = 'modifiedDateTime';
    public const FIELD_SESSION_CONTROLS = 'sessionControls';
    public const FIELD_STATE = 'state';
    public const FIELD_TEMPLATE_ID = 'templateId';

    /**
     * Select specific ConditionalAccessPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
