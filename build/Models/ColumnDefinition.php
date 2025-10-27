<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ColumnDefinition
 */
class ColumnDefinition
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * This column stores Boolean values.
     * @var BooleanColumn|\stdClass|null
     */
    public BooleanColumn|\stdClass|null $boolean = null;

    /** 
     * This column's data is calculated based on other columns.
     * @var CalculatedColumn|\stdClass|null
     */
    public CalculatedColumn|\stdClass|null $calculated = null;

    /** 
     * This column stores data from a list of choices.
     * @var ChoiceColumn|\stdClass|null
     */
    public ChoiceColumn|\stdClass|null $choice = null;

    /** For site columns, the name of the group this column belongs to. Helps organize related columns. */
    public ?string $columnGroup = null;

    /** 
     * This column stores content approval status.
     * @var ContentApprovalStatusColumn|\stdClass|null
     */
    public ContentApprovalStatusColumn|\stdClass|null $contentApprovalStatus = null;

    /** 
     * This column stores currency values.
     * @var CurrencyColumn|\stdClass|null
     */
    public CurrencyColumn|\stdClass|null $currency = null;

    /** 
     * This column stores DateTime values.
     * @var DateTimeColumn|\stdClass|null
     */
    public DateTimeColumn|\stdClass|null $dateTime = null;

    /** 
     * The default value for this column.
     * @var DefaultColumnValue|\stdClass|null
     */
    public DefaultColumnValue|\stdClass|null $defaultValue = null;

    /** The user-facing description of the column. */
    public ?string $description = null;

    /** The user-facing name of the column. */
    public ?string $displayName = null;

    /** If true, no two list items may have the same value for this column. */
    public ?bool $enforceUniqueValues = null;

    /** 
     * This column stores a geolocation.
     * @var GeolocationColumn|\stdClass|null
     */
    public GeolocationColumn|\stdClass|null $geolocation = null;

    /** Specifies whether the column is displayed in the user interface. */
    public ?bool $hidden = null;

    /** 
     * This column stores hyperlink or picture values.
     * @var HyperlinkOrPictureColumn|\stdClass|null
     */
    public HyperlinkOrPictureColumn|\stdClass|null $hyperlinkOrPicture = null;

    /** Specifies whether the column values can be used for sorting and searching. */
    public ?bool $indexed = null;

    /** Indicates whether this column can be deleted. */
    public ?bool $isDeletable = null;

    /** Indicates whether values in the column can be reordered. Read-only. */
    public ?bool $isReorderable = null;

    /** Specifies whether the column can be changed. */
    public ?bool $isSealed = null;

    /** 
     * This column's data is looked up from another source in the site.
     * @var LookupColumn|\stdClass|null
     */
    public LookupColumn|\stdClass|null $lookup = null;

    /** The API-facing name of the column as it appears in the fields on a listItem. For the user-facing name, see displayName. */
    public ?string $name = null;

    /** 
     * This column stores number values.
     * @var NumberColumn|\stdClass|null
     */
    public NumberColumn|\stdClass|null $number = null;

    /** 
     * This column stores Person or Group values.
     * @var PersonOrGroupColumn|\stdClass|null
     */
    public PersonOrGroupColumn|\stdClass|null $personOrGroup = null;

    /** If 'true', changes to this column will be propagated to lists that implement the column. */
    public ?bool $propagateChanges = null;

    /** Specifies whether the column values can be modified. */
    public ?bool $readOnly = null;

    /** Specifies whether the column value isn't optional. */
    public ?bool $required = null;

    /** 
     * ContentType from which this column is inherited from. Present only in contentTypes columns response. Read-only.
     * @var ContentTypeInfo|\stdClass|null
     */
    public ContentTypeInfo|\stdClass|null $sourceContentType = null;

    /** 
     * This column stores taxonomy terms.
     * @var TermColumn|\stdClass|null
     */
    public TermColumn|\stdClass|null $term = null;

    /** 
     * This column stores text values.
     * @var TextColumn|\stdClass|null
     */
    public TextColumn|\stdClass|null $text = null;

    /** 
     * This column stores thumbnail values.
     * @var ThumbnailColumn|\stdClass|null
     */
    public ThumbnailColumn|\stdClass|null $thumbnail = null;

    /** 
     * For site columns, the type of column. Read-only.
     * @var ColumnTypes|\stdClass|null
     */
    public ColumnTypes|\stdClass|null $type = null;

    /** 
     * This column stores validation formula and message for the column.
     * @var ColumnValidation|\stdClass|null
     */
    public ColumnValidation|\stdClass|null $validation = null;

    /** 
     * The source column for the content type column.
     * @var ColumnDefinition|\stdClass|null
     */
    public ColumnDefinition|\stdClass|null $sourceColumn = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['boolean'])) {
            $this->boolean = is_array($data['boolean']) ? new BooleanColumn($data['boolean']) : $data['boolean'];
        }
        if (isset($data['calculated'])) {
            $this->calculated = is_array($data['calculated']) ? new CalculatedColumn($data['calculated']) : $data['calculated'];
        }
        if (isset($data['choice'])) {
            $this->choice = is_array($data['choice']) ? new ChoiceColumn($data['choice']) : $data['choice'];
        }
        if (isset($data['columnGroup'])) {
            $this->columnGroup = $data['columnGroup'];
        }
        if (isset($data['contentApprovalStatus'])) {
            $this->contentApprovalStatus = is_array($data['contentApprovalStatus']) ? new ContentApprovalStatusColumn($data['contentApprovalStatus']) : $data['contentApprovalStatus'];
        }
        if (isset($data['currency'])) {
            $this->currency = is_array($data['currency']) ? new CurrencyColumn($data['currency']) : $data['currency'];
        }
        if (isset($data['dateTime'])) {
            $this->dateTime = is_array($data['dateTime']) ? new DateTimeColumn($data['dateTime']) : $data['dateTime'];
        }
        if (isset($data['defaultValue'])) {
            $this->defaultValue = is_array($data['defaultValue']) ? new DefaultColumnValue($data['defaultValue']) : $data['defaultValue'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['enforceUniqueValues'])) {
            $this->enforceUniqueValues = is_bool($data['enforceUniqueValues']) ? $data['enforceUniqueValues'] : (bool)$data['enforceUniqueValues'];
        }
        if (isset($data['geolocation'])) {
            $this->geolocation = is_array($data['geolocation']) ? new GeolocationColumn($data['geolocation']) : $data['geolocation'];
        }
        if (isset($data['hidden'])) {
            $this->hidden = is_bool($data['hidden']) ? $data['hidden'] : (bool)$data['hidden'];
        }
        if (isset($data['hyperlinkOrPicture'])) {
            $this->hyperlinkOrPicture = is_array($data['hyperlinkOrPicture']) ? new HyperlinkOrPictureColumn($data['hyperlinkOrPicture']) : $data['hyperlinkOrPicture'];
        }
        if (isset($data['indexed'])) {
            $this->indexed = is_bool($data['indexed']) ? $data['indexed'] : (bool)$data['indexed'];
        }
        if (isset($data['isDeletable'])) {
            $this->isDeletable = is_bool($data['isDeletable']) ? $data['isDeletable'] : (bool)$data['isDeletable'];
        }
        if (isset($data['isReorderable'])) {
            $this->isReorderable = is_bool($data['isReorderable']) ? $data['isReorderable'] : (bool)$data['isReorderable'];
        }
        if (isset($data['isSealed'])) {
            $this->isSealed = is_bool($data['isSealed']) ? $data['isSealed'] : (bool)$data['isSealed'];
        }
        if (isset($data['lookup'])) {
            $this->lookup = is_array($data['lookup']) ? new LookupColumn($data['lookup']) : $data['lookup'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['number'])) {
            $this->number = is_array($data['number']) ? new NumberColumn($data['number']) : $data['number'];
        }
        if (isset($data['personOrGroup'])) {
            $this->personOrGroup = is_array($data['personOrGroup']) ? new PersonOrGroupColumn($data['personOrGroup']) : $data['personOrGroup'];
        }
        if (isset($data['propagateChanges'])) {
            $this->propagateChanges = is_bool($data['propagateChanges']) ? $data['propagateChanges'] : (bool)$data['propagateChanges'];
        }
        if (isset($data['readOnly'])) {
            $this->readOnly = is_bool($data['readOnly']) ? $data['readOnly'] : (bool)$data['readOnly'];
        }
        if (isset($data['required'])) {
            $this->required = is_bool($data['required']) ? $data['required'] : (bool)$data['required'];
        }
        if (isset($data['sourceContentType'])) {
            $this->sourceContentType = is_array($data['sourceContentType']) ? new ContentTypeInfo($data['sourceContentType']) : $data['sourceContentType'];
        }
        if (isset($data['term'])) {
            $this->term = is_array($data['term']) ? new TermColumn($data['term']) : $data['term'];
        }
        if (isset($data['text'])) {
            $this->text = is_array($data['text']) ? new TextColumn($data['text']) : $data['text'];
        }
        if (isset($data['thumbnail'])) {
            $this->thumbnail = is_array($data['thumbnail']) ? new ThumbnailColumn($data['thumbnail']) : $data['thumbnail'];
        }
        if (isset($data['type'])) {
            $this->type = is_array($data['type']) ? new ColumnTypes($data['type']) : $data['type'];
        }
        if (isset($data['validation'])) {
            $this->validation = is_array($data['validation']) ? new ColumnValidation($data['validation']) : $data['validation'];
        }
        if (isset($data['sourceColumn'])) {
            $this->sourceColumn = is_array($data['sourceColumn']) ? new ColumnDefinition($data['sourceColumn']) : $data['sourceColumn'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
