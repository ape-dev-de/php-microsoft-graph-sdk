<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityCloudLogonRequestEvidence resources
 *
 * Available select fields:
 * - requestId
 */
class SecurityCloudLogonRequestEvidenceQueryOptions extends QueryOptions
{
    public const FIELD_REQUEST_ID = 'requestId';

    /**
     * Select specific SecurityCloudLogonRequestEvidence properties
     * 
     * @param array<string> $select Use SecurityCloudLogonRequestEvidenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
