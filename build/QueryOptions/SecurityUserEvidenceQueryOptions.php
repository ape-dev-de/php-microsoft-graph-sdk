<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityUserEvidence resources
 *
 * Available select fields:
 * - stream
 * - userAccount
 */
class SecurityUserEvidenceQueryOptions extends QueryOptions
{
    public const FIELD_STREAM = 'stream';
    public const FIELD_USER_ACCOUNT = 'userAccount';

    /**
     * Select specific SecurityUserEvidence properties
     * 
     * @param array<string> $select Use SecurityUserEvidenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
