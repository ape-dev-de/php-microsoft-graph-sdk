<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityMailboxEvidence resources
 *
 * Available select fields:
 * - displayName
 * - primaryAddress
 * - upn
 * - userAccount
 */
class SecurityMailboxEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityMailboxEvidence
     */
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_PRIMARY_ADDRESS = 'primaryAddress';
    public const FIELD_UPN = 'upn';
    public const FIELD_USER_ACCOUNT = 'userAccount';

    /**
     * Select specific SecurityMailboxEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
