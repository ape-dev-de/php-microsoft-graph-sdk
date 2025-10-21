<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ColumnDefinition
 */
class ColumnDefinition
{
    /**
     * This column stores Boolean values.
     */
    private ?string $boolean;

    /**
     * This column's data is calculated based on other columns.
     */
    private ?string $calculated;

    /**
     * This column stores data from a list of choices.
     */
    private ?string $choice;

    /**
     * For site columns, the name of the group this column belongs to. Helps organize related columns.
     */
    private ?string $columnGroup;

    /**
     * This column stores content approval status.
     */
    private ?string $contentApprovalStatus;

    /**
     * This column stores currency values.
     */
    private ?string $currency;

    /**
     * This column stores DateTime values.
     */
    private ?string $dateTime;

    /**
     * The default value for this column.
     */
    private ?string $defaultValue;

    /**
     * The user-facing description of the column.
     */
    private ?string $description;

    /**
     * The user-facing name of the column.
     */
    private ?string $displayName;

    /**
     * If true, no two list items may have the same value for this column.
     */
    private ?bool $enforceUniqueValues;

    /**
     * This column stores a geolocation.
     */
    private ?string $geolocation;

    /**
     * Specifies whether the column is displayed in the user interface.
     */
    private ?bool $hidden;

    /**
     * This column stores hyperlink or picture values.
     */
    private ?string $hyperlinkOrPicture;

    /**
     * Specifies whether the column values can be used for sorting and searching.
     */
    private ?bool $indexed;

    /**
     * Indicates whether this column can be deleted.
     */
    private ?bool $isDeletable;

    /**
     * Indicates whether values in the column can be reordered. Read-only.
     */
    private ?bool $isReorderable;

    /**
     * Specifies whether the column can be changed.
     */
    private ?bool $isSealed;

    /**
     * This column's data is looked up from another source in the site.
     */
    private ?string $lookup;

    /**
     * The API-facing name of the column as it appears in the fields on a listItem. For the user-facing name, see displayName.
     */
    private ?string $name;

    /**
     * This column stores number values.
     */
    private ?string $number;

    /**
     * This column stores Person or Group values.
     */
    private ?string $personOrGroup;

    /**
     * If ''true'', changes to this column will be propagated to lists that implement the column.
     */
    private ?bool $propagateChanges;

    /**
     * Specifies whether the column values can be modified.
     */
    private ?bool $readOnly;

    /**
     * Specifies whether the column value isn't optional.
     */
    private ?bool $required;

    /**
     * ContentType from which this column is inherited from. Present only in contentTypes columns response. Read-only.
     */
    private ?string $sourceContentType;

    /**
     * This column stores taxonomy terms.
     */
    private ?string $term;

    /**
     * This column stores text values.
     */
    private ?string $text;

    /**
     * This column stores thumbnail values.
     */
    private ?string $thumbnail;

    /**
     * For site columns, the type of column. Read-only.
     */
    private ?string $type;

    /**
     * This column stores validation formula and message for the column.
     */
    private ?string $validation;

    /**
     * The source column for the content type column.
     */
    private ?string $sourceColumn;


    public function getBoolean(): ?string
    {
        return $this->boolean;
    }

    public function setBoolean(?string $boolean): self
    {
        $this->boolean = $boolean;
        return $this;
    }

    public function getCalculated(): ?string
    {
        return $this->calculated;
    }

    public function setCalculated(?string $calculated): self
    {
        $this->calculated = $calculated;
        return $this;
    }

    public function getChoice(): ?string
    {
        return $this->choice;
    }

    public function setChoice(?string $choice): self
    {
        $this->choice = $choice;
        return $this;
    }

    public function getColumnGroup(): ?string
    {
        return $this->columnGroup;
    }

    public function setColumnGroup(?string $columnGroup): self
    {
        $this->columnGroup = $columnGroup;
        return $this;
    }

    public function getContentApprovalStatus(): ?string
    {
        return $this->contentApprovalStatus;
    }

    public function setContentApprovalStatus(?string $contentApprovalStatus): self
    {
        $this->contentApprovalStatus = $contentApprovalStatus;
        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;
        return $this;
    }

    public function getDateTime(): ?string
    {
        return $this->dateTime;
    }

    public function setDateTime(?string $dateTime): self
    {
        $this->dateTime = $dateTime;
        return $this;
    }

    public function getDefaultValue(): ?string
    {
        return $this->defaultValue;
    }

    public function setDefaultValue(?string $defaultValue): self
    {
        $this->defaultValue = $defaultValue;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getEnforceUniqueValues(): ?bool
    {
        return $this->enforceUniqueValues;
    }

    public function setEnforceUniqueValues(?bool $enforceUniqueValues): self
    {
        $this->enforceUniqueValues = $enforceUniqueValues;
        return $this;
    }

    public function getGeolocation(): ?string
    {
        return $this->geolocation;
    }

    public function setGeolocation(?string $geolocation): self
    {
        $this->geolocation = $geolocation;
        return $this;
    }

    public function getHidden(): ?bool
    {
        return $this->hidden;
    }

    public function setHidden(?bool $hidden): self
    {
        $this->hidden = $hidden;
        return $this;
    }

    public function getHyperlinkOrPicture(): ?string
    {
        return $this->hyperlinkOrPicture;
    }

    public function setHyperlinkOrPicture(?string $hyperlinkOrPicture): self
    {
        $this->hyperlinkOrPicture = $hyperlinkOrPicture;
        return $this;
    }

    public function getIndexed(): ?bool
    {
        return $this->indexed;
    }

    public function setIndexed(?bool $indexed): self
    {
        $this->indexed = $indexed;
        return $this;
    }

    public function getIsDeletable(): ?bool
    {
        return $this->isDeletable;
    }

    public function setIsDeletable(?bool $isDeletable): self
    {
        $this->isDeletable = $isDeletable;
        return $this;
    }

    public function getIsReorderable(): ?bool
    {
        return $this->isReorderable;
    }

    public function setIsReorderable(?bool $isReorderable): self
    {
        $this->isReorderable = $isReorderable;
        return $this;
    }

    public function getIsSealed(): ?bool
    {
        return $this->isSealed;
    }

    public function setIsSealed(?bool $isSealed): self
    {
        $this->isSealed = $isSealed;
        return $this;
    }

    public function getLookup(): ?string
    {
        return $this->lookup;
    }

    public function setLookup(?string $lookup): self
    {
        $this->lookup = $lookup;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): self
    {
        $this->number = $number;
        return $this;
    }

    public function getPersonOrGroup(): ?string
    {
        return $this->personOrGroup;
    }

    public function setPersonOrGroup(?string $personOrGroup): self
    {
        $this->personOrGroup = $personOrGroup;
        return $this;
    }

    public function getPropagateChanges(): ?bool
    {
        return $this->propagateChanges;
    }

    public function setPropagateChanges(?bool $propagateChanges): self
    {
        $this->propagateChanges = $propagateChanges;
        return $this;
    }

    public function getReadOnly(): ?bool
    {
        return $this->readOnly;
    }

    public function setReadOnly(?bool $readOnly): self
    {
        $this->readOnly = $readOnly;
        return $this;
    }

    public function getRequired(): ?bool
    {
        return $this->required;
    }

    public function setRequired(?bool $required): self
    {
        $this->required = $required;
        return $this;
    }

    public function getSourceContentType(): ?string
    {
        return $this->sourceContentType;
    }

    public function setSourceContentType(?string $sourceContentType): self
    {
        $this->sourceContentType = $sourceContentType;
        return $this;
    }

    public function getTerm(): ?string
    {
        return $this->term;
    }

    public function setTerm(?string $term): self
    {
        $this->term = $term;
        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;
        return $this;
    }

    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }

    public function setThumbnail(?string $thumbnail): self
    {
        $this->thumbnail = $thumbnail;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getValidation(): ?string
    {
        return $this->validation;
    }

    public function setValidation(?string $validation): self
    {
        $this->validation = $validation;
        return $this;
    }

    public function getSourceColumn(): ?string
    {
        return $this->sourceColumn;
    }

    public function setSourceColumn(?string $sourceColumn): self
    {
        $this->sourceColumn = $sourceColumn;
        return $this;
    }

}
