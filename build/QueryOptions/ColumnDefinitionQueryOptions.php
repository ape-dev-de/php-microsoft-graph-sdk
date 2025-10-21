<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ColumnDefinition resources
 *
 * Available select fields:
 * - boolean
 * - calculated
 * - choice
 * - columnGroup
 * - contentApprovalStatus
 * - currency
 * - dateTime
 * - defaultValue
 * - description
 * - displayName
 * - enforceUniqueValues
 * - geolocation
 * - hidden
 * - hyperlinkOrPicture
 * - indexed
 * - isDeletable
 * - isReorderable
 * - isSealed
 * - lookup
 * - name
 * - number
 * - personOrGroup
 * - propagateChanges
 * - readOnly
 * - required
 * - sourceContentType
 * - term
 * - text
 * - thumbnail
 * - type
 * - validation
 * - sourceColumn
 */
class ColumnDefinitionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ColumnDefinition
     */
    public const FIELD_BOOLEAN = 'boolean';
    public const FIELD_CALCULATED = 'calculated';
    public const FIELD_CHOICE = 'choice';
    public const FIELD_COLUMN_GROUP = 'columnGroup';
    public const FIELD_CONTENT_APPROVAL_STATUS = 'contentApprovalStatus';
    public const FIELD_CURRENCY = 'currency';
    public const FIELD_DATE_TIME = 'dateTime';
    public const FIELD_DEFAULT_VALUE = 'defaultValue';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_ENFORCE_UNIQUE_VALUES = 'enforceUniqueValues';
    public const FIELD_GEOLOCATION = 'geolocation';
    public const FIELD_HIDDEN = 'hidden';
    public const FIELD_HYPERLINK_OR_PICTURE = 'hyperlinkOrPicture';
    public const FIELD_INDEXED = 'indexed';
    public const FIELD_IS_DELETABLE = 'isDeletable';
    public const FIELD_IS_REORDERABLE = 'isReorderable';
    public const FIELD_IS_SEALED = 'isSealed';
    public const FIELD_LOOKUP = 'lookup';
    public const FIELD_NAME = 'name';
    public const FIELD_NUMBER = 'number';
    public const FIELD_PERSON_OR_GROUP = 'personOrGroup';
    public const FIELD_PROPAGATE_CHANGES = 'propagateChanges';
    public const FIELD_READ_ONLY = 'readOnly';
    public const FIELD_REQUIRED = 'required';
    public const FIELD_SOURCE_CONTENT_TYPE = 'sourceContentType';
    public const FIELD_TERM = 'term';
    public const FIELD_TEXT = 'text';
    public const FIELD_THUMBNAIL = 'thumbnail';
    public const FIELD_TYPE = 'type';
    public const FIELD_VALIDATION = 'validation';
    public const FIELD_SOURCE_COLUMN = 'sourceColumn';

    /**
     * Select specific ColumnDefinition properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
