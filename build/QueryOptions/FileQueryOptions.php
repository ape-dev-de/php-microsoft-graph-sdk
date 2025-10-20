<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for File resources
 *
 * Available select fields:
 * - hashes
 * - mimeType
 * - processingMetadata
 */
class FileQueryOptions extends QueryOptions
{
    public const FIELD_HASHES = 'hashes';
    public const FIELD_MIME_TYPE = 'mimeType';
    public const FIELD_PROCESSING_METADATA = 'processingMetadata';

    /**
     * Select specific File properties
     * 
     * @param array<string> $select Use FileQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
