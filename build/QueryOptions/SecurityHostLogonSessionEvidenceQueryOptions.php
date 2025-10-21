<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostLogonSessionEvidence resources
 *
 * Available select fields:
 * - account
 * - endUtcDateTime
 * - host
 * - sessionId
 * - startUtcDateTime
 */
class SecurityHostLogonSessionEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityHostLogonSessionEvidence
     */
    public const FIELD_ACCOUNT = 'account';
    public const FIELD_END_UTC_DATE_TIME = 'endUtcDateTime';
    public const FIELD_HOST = 'host';
    public const FIELD_SESSION_ID = 'sessionId';
    public const FIELD_START_UTC_DATE_TIME = 'startUtcDateTime';

    /**
     * Select specific SecurityHostLogonSessionEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
