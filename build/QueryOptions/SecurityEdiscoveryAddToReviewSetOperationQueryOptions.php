<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryAddToReviewSetOperation resources
 *
 * Available select fields:
 * - additionalDataOptions
 * - cloudAttachmentVersion
 * - documentVersion
 * - itemsToInclude
 * - reportFileMetadata
 * - reviewSet
 * - search
 */
class SecurityEdiscoveryAddToReviewSetOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityEdiscoveryAddToReviewSetOperation
     */
    public const FIELD_ADDITIONAL_DATA_OPTIONS = 'additionalDataOptions';
    public const FIELD_CLOUD_ATTACHMENT_VERSION = 'cloudAttachmentVersion';
    public const FIELD_DOCUMENT_VERSION = 'documentVersion';
    public const FIELD_ITEMS_TO_INCLUDE = 'itemsToInclude';
    public const FIELD_REPORT_FILE_METADATA = 'reportFileMetadata';
    public const FIELD_REVIEW_SET = 'reviewSet';
    public const FIELD_SEARCH = 'search';

    /**
     * Select specific SecurityEdiscoveryAddToReviewSetOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
