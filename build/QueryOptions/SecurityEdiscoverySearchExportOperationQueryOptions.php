<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoverySearchExportOperation resources
 *
 * Available select fields:
 * - additionalOptions
 * - cloudAttachmentVersion
 * - description
 * - displayName
 * - documentVersion
 * - exportCriteria
 * - exportFileMetadata
 * - exportFormat
 * - exportLocation
 * - exportSingleItems
 * - search
 */
class SecurityEdiscoverySearchExportOperationQueryOptions extends QueryOptions
{
    public const FIELD_ADDITIONAL_OPTIONS = 'additionalOptions';
    public const FIELD_CLOUD_ATTACHMENT_VERSION = 'cloudAttachmentVersion';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_DOCUMENT_VERSION = 'documentVersion';
    public const FIELD_EXPORT_CRITERIA = 'exportCriteria';
    public const FIELD_EXPORT_FILE_METADATA = 'exportFileMetadata';
    public const FIELD_EXPORT_FORMAT = 'exportFormat';
    public const FIELD_EXPORT_LOCATION = 'exportLocation';
    public const FIELD_EXPORT_SINGLE_ITEMS = 'exportSingleItems';
    public const FIELD_SEARCH = 'search';

    /**
     * Select specific SecurityEdiscoverySearchExportOperation properties
     * 
     * @param array<string> $select Use SecurityEdiscoverySearchExportOperationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
