<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppliedConditionalAccessPolicy resources
 *
 * Available select fields:
 * - displayName
 * - enforcedGrantControls
 * - enforcedSessionControls
 * - id
 * - result
 */
class AppliedConditionalAccessPolicyQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_ENFORCED_GRANT_CONTROLS = 'enforcedGrantControls';
    public const FIELD_ENFORCED_SESSION_CONTROLS = 'enforcedSessionControls';
    public const FIELD_ID = 'id';
    public const FIELD_RESULT = 'result';

    /**
     * Select specific AppliedConditionalAccessPolicy properties
     * 
     * @param array<string> $select Use AppliedConditionalAccessPolicyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
