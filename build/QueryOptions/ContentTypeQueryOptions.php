<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ContentType resources
 *
 * Available select fields:
 * - associatedHubsUrls
 * - description
 * - documentSet
 * - documentTemplate
 * - group
 * - hidden
 * - inheritedFrom
 * - isBuiltIn
 * - name
 * - order
 * - parentId
 * - propagateChanges
 * - readOnly
 * - sealed
 * - base
 * - baseTypes
 * - columnLinks
 * - columnPositions
 * - columns
 */
class ContentTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ContentType
     */
    public const FIELD_ASSOCIATED_HUBS_URLS = 'associatedHubsUrls';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DOCUMENT_SET = 'documentSet';
    public const FIELD_DOCUMENT_TEMPLATE = 'documentTemplate';
    public const FIELD_GROUP = 'group';
    public const FIELD_HIDDEN = 'hidden';
    public const FIELD_INHERITED_FROM = 'inheritedFrom';
    public const FIELD_IS_BUILT_IN = 'isBuiltIn';
    public const FIELD_NAME = 'name';
    public const FIELD_ORDER = 'order';
    public const FIELD_PARENT_ID = 'parentId';
    public const FIELD_PROPAGATE_CHANGES = 'propagateChanges';
    public const FIELD_READ_ONLY = 'readOnly';
    public const FIELD_SEALED = 'sealed';
    public const FIELD_BASE = 'base';
    public const FIELD_BASE_TYPES = 'baseTypes';
    public const FIELD_COLUMN_LINKS = 'columnLinks';
    public const FIELD_COLUMN_POSITIONS = 'columnPositions';
    public const FIELD_COLUMNS = 'columns';

    /**
     * Select specific ContentType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
