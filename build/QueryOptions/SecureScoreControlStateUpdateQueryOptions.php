<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecureScoreControlStateUpdate resources
 *
 * Available select fields:
 * - assignedTo
 * - comment
 * - state
 * - updatedBy
 * - updatedDateTime
 */
class SecureScoreControlStateUpdateQueryOptions extends QueryOptions
{
    public const FIELD_ASSIGNED_TO = 'assignedTo';
    public const FIELD_COMMENT = 'comment';
    public const FIELD_STATE = 'state';
    public const FIELD_UPDATED_BY = 'updatedBy';
    public const FIELD_UPDATED_DATE_TIME = 'updatedDateTime';

    /**
     * Select specific SecureScoreControlStateUpdate properties
     * 
     * @param array<string> $select Use SecureScoreControlStateUpdateQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
