<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProcessContentMetadataBase resources
 *
 * Available select fields:
 * - content
 * - correlationId
 * - createdDateTime
 * - identifier
 * - isTruncated
 * - length
 * - modifiedDateTime
 * - name
 * - sequenceNumber
 */
class ProcessContentMetadataBaseQueryOptions extends QueryOptions
{
    public const FIELD_CONTENT = 'content';
    public const FIELD_CORRELATION_ID = 'correlationId';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_IS_TRUNCATED = 'isTruncated';
    public const FIELD_LENGTH = 'length';
    public const FIELD_MODIFIED_DATE_TIME = 'modifiedDateTime';
    public const FIELD_NAME = 'name';
    public const FIELD_SEQUENCE_NUMBER = 'sequenceNumber';

    /**
     * Select specific ProcessContentMetadataBase properties
     * 
     * @param array<string> $select Use ProcessContentMetadataBaseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
