<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintDocumentUploadProperties resources
 *
 * Available select fields:
 * - contentType
 * - documentName
 * - size
 */
class PrintDocumentUploadPropertiesQueryOptions extends QueryOptions
{
    public const FIELD_CONTENT_TYPE = 'contentType';
    public const FIELD_DOCUMENT_NAME = 'documentName';
    public const FIELD_SIZE = 'size';

    /**
     * Select specific PrintDocumentUploadProperties properties
     * 
     * @param array<string> $select Use PrintDocumentUploadPropertiesQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
