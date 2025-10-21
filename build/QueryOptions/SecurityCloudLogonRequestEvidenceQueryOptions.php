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
    /**
     * Available select fields for SecurityCloudLogonRequestEvidence
     */
    public const FIELD_REQUEST_ID = 'requestId';

    /**
     * Select specific SecurityCloudLogonRequestEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
