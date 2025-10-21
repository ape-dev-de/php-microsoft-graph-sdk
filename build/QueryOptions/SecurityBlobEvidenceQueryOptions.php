<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityBlobEvidence resources
 *
 * Available select fields:
 * - blobContainer
 * - etag
 * - fileHashes
 * - name
 * - url
 */
class SecurityBlobEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityBlobEvidence
     */
    public const FIELD_BLOB_CONTAINER = 'blobContainer';
    public const FIELD_ETAG = 'etag';
    public const FIELD_FILE_HASHES = 'fileHashes';
    public const FIELD_NAME = 'name';
    public const FIELD_URL = 'url';

    /**
     * Select specific SecurityBlobEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
