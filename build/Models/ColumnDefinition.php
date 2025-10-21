<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ColumnDefinition
 */
class ColumnDefinition
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** This column stores Boolean values. */
        public ?BooleanColumn $boolean = null,
        /** This column's data is calculated based on other columns. */
        public ?CalculatedColumn $calculated = null,
        /** This column stores data from a list of choices. */
        public ?ChoiceColumn $choice = null,
        /** For site columns, the name of the group this column belongs to. Helps organize related columns. */
        public ?string $columnGroup = null,
        /** This column stores content approval status. */
        public ?ContentApprovalStatusColumn $contentApprovalStatus = null,
        /** This column stores currency values. */
        public ?CurrencyColumn $currency = null,
        /** This column stores DateTime values. */
        public ?DateTimeColumn $dateTime = null,
        /** The default value for this column. */
        public ?DefaultColumnValue $defaultValue = null,
        /** The user-facing description of the column. */
        public ?string $description = null,
        /** The user-facing name of the column. */
        public ?string $displayName = null,
        /** If true, no two list items may have the same value for this column. */
        public ?bool $enforceUniqueValues = null,
        /** This column stores a geolocation. */
        public ?GeolocationColumn $geolocation = null,
        /** Specifies whether the column is displayed in the user interface. */
        public ?bool $hidden = null,
        /** This column stores hyperlink or picture values. */
        public ?HyperlinkOrPictureColumn $hyperlinkOrPicture = null,
        /** Specifies whether the column values can be used for sorting and searching. */
        public ?bool $indexed = null,
        /** Indicates whether this column can be deleted. */
        public ?bool $isDeletable = null,
        /** Indicates whether values in the column can be reordered. Read-only. */
        public ?bool $isReorderable = null,
        /** Specifies whether the column can be changed. */
        public ?bool $isSealed = null,
        /** This column's data is looked up from another source in the site. */
        public ?LookupColumn $lookup = null,
        /** The API-facing name of the column as it appears in the fields on a listItem. For the user-facing name, see displayName. */
        public ?string $name = null,
        /** This column stores number values. */
        public ?NumberColumn $number = null,
        /** This column stores Person or Group values. */
        public ?PersonOrGroupColumn $personOrGroup = null,
        /** If 'true', changes to this column will be propagated to lists that implement the column. */
        public ?bool $propagateChanges = null,
        /** Specifies whether the column values can be modified. */
        public ?bool $readOnly = null,
        /** Specifies whether the column value isn't optional. */
        public ?bool $required = null,
        /** ContentType from which this column is inherited from. Present only in contentTypes columns response. Read-only. */
        public ?ContentTypeInfo $sourceContentType = null,
        /** This column stores taxonomy terms. */
        public ?TermColumn $term = null,
        /** This column stores text values. */
        public ?TextColumn $text = null,
        /** This column stores thumbnail values. */
        public ?ThumbnailColumn $thumbnail = null,
        /** For site columns, the type of column. Read-only. */
        public ?ColumnTypes $type = null,
        /** This column stores validation formula and message for the column. */
        public ?ColumnValidation $validation = null,
        /** The source column for the content type column. */
        public ?ColumnDefinition $sourceColumn = null
    ) {}
}
