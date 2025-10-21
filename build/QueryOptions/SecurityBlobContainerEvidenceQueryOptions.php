<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityBlobContainerEvidence resources
 *
 * Available select fields:
 * - name
 * - storageResource
 * - url
 */
class SecurityBlobContainerEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityBlobContainerEvidence
     */
    public const FIELD_NAME = 'name';
    public const FIELD_STORAGE_RESOURCE = 'storageResource';
    public const FIELD_URL = 'url';

    /**
     * Select specific SecurityBlobContainerEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
