<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ColumnDefinition
 */
class ColumnDefinition
{
    public function __construct(
        /** This column stores Boolean values. */
        public ?string $boolean = null,
        /** This column's data is calculated based on other columns. */
        public ?string $calculated = null,
        /** This column stores data from a list of choices. */
        public ?string $choice = null,
        /** For site columns, the name of the group this column belongs to. Helps organize related columns. */
        public ?string $columnGroup = null,
        /** This column stores content approval status. */
        public ?string $contentApprovalStatus = null,
        /** This column stores currency values. */
        public ?string $currency = null,
        /** This column stores DateTime values. */
        public ?string $dateTime = null,
        /** The default value for this column. */
        public ?string $defaultValue = null,
        /** The user-facing description of the column. */
        public ?string $description = null,
        /** The user-facing name of the column. */
        public ?string $displayName = null,
        /** If true, no two list items may have the same value for this column. */
        public ?bool $enforceUniqueValues = null,
        /** This column stores a geolocation. */
        public ?string $geolocation = null,
        /** Specifies whether the column is displayed in the user interface. */
        public ?bool $hidden = null,
        /** This column stores hyperlink or picture values. */
        public ?string $hyperlinkOrPicture = null,
        /** Specifies whether the column values can be used for sorting and searching. */
        public ?bool $indexed = null,
        /** Indicates whether this column can be deleted. */
        public ?bool $isDeletable = null,
        /** Indicates whether values in the column can be reordered. Read-only. */
        public ?bool $isReorderable = null,
        /** Specifies whether the column can be changed. */
        public ?bool $isSealed = null,
        /** This column's data is looked up from another source in the site. */
        public ?string $lookup = null,
        /** The API-facing name of the column as it appears in the fields on a listItem. For the user-facing name, see displayName. */
        public ?string $name = null,
        /** This column stores number values. */
        public ?string $number = null,
        /** This column stores Person or Group values. */
        public ?string $personOrGroup = null,
        /** If ''true'', changes to this column will be propagated to lists that implement the column. */
        public ?bool $propagateChanges = null,
        /** Specifies whether the column values can be modified. */
        public ?bool $readOnly = null,
        /** Specifies whether the column value isn't optional. */
        public ?bool $required = null,
        /** ContentType from which this column is inherited from. Present only in contentTypes columns response. Read-only. */
        public ?string $sourceContentType = null,
        /** This column stores taxonomy terms. */
        public ?string $term = null,
        /** This column stores text values. */
        public ?string $text = null,
        /** This column stores thumbnail values. */
        public ?string $thumbnail = null,
        /** For site columns, the type of column. Read-only. */
        public ?string $type = null,
        /** This column stores validation formula and message for the column. */
        public ?string $validation = null,
        /** The source column for the content type column. */
        public ?string $sourceColumn = null
    ) {}
}
