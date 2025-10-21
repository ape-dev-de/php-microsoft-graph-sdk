<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceUpdateMessage resources
 *
 * Available select fields:
 * - actionRequiredByDateTime
 * - attachmentsArchive
 * - body
 * - category
 * - hasAttachments
 * - isMajorChange
 * - services
 * - severity
 * - tags
 * - viewPoint
 * - attachments
 */
class ServiceUpdateMessageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServiceUpdateMessage
     */
    public const FIELD_ACTION_REQUIRED_BY_DATE_TIME = 'actionRequiredByDateTime';
    public const FIELD_ATTACHMENTS_ARCHIVE = 'attachmentsArchive';
    public const FIELD_BODY = 'body';
    public const FIELD_CATEGORY = 'category';
    public const FIELD_HAS_ATTACHMENTS = 'hasAttachments';
    public const FIELD_IS_MAJOR_CHANGE = 'isMajorChange';
    public const FIELD_SERVICES = 'services';
    public const FIELD_SEVERITY = 'severity';
    public const FIELD_TAGS = 'tags';
    public const FIELD_VIEW_POINT = 'viewPoint';
    public const FIELD_ATTACHMENTS = 'attachments';

    /**
     * Select specific ServiceUpdateMessage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
