<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityContainerImageEvidence resources
 *
 * Available select fields:
 * - digestImage
 * - imageId
 * - registry
 */
class SecurityContainerImageEvidenceQueryOptions extends QueryOptions
{
    public const FIELD_DIGEST_IMAGE = 'digestImage';
    public const FIELD_IMAGE_ID = 'imageId';
    public const FIELD_REGISTRY = 'registry';

    /**
     * Select specific SecurityContainerImageEvidence properties
     * 
     * @param array<string> $select Use SecurityContainerImageEvidenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
