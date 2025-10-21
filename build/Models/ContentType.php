<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ContentType
 */
class ContentType
{
    /**
     * List of canonical URLs for hub sites with which this content type is associated to. This will contain all hub sites where this content type is queued to be enforced or is already enforced. Enforcing a content type means that the content type is applied to the lists in the enforced sites.
     * @var string[]
     */
    private array $associatedHubsUrls = [];

    /**
     * The descriptive text for the item.
     */
    private ?string $description;

    /**
     * Document Set metadata.
     */
    private ?string $documentSet;

    /**
     * Document template metadata. To make sure that documents have consistent content across a site and its subsites, you can associate a Word, Excel, or PowerPoint template with a site content type.
     */
    private ?string $documentTemplate;

    /**
     * The name of the group this content type belongs to. Helps organize related content types.
     */
    private ?string $group;

    /**
     * Indicates whether the content type is hidden in the list's 'New' menu.
     */
    private ?bool $hidden;

    /**
     * If this content type is inherited from another scope (like a site), provides a reference to the item where the content type is defined.
     */
    private ?string $inheritedFrom;

    /**
     * Specifies if a content type is a built-in content type.
     */
    private ?bool $isBuiltIn;

    /**
     * The name of the content type.
     */
    private ?string $name;

    /**
     * Specifies the order in which the content type appears in the selection UI.
     */
    private ?string $order;

    /**
     * The unique identifier of the content type.
     */
    private ?string $parentId;

    /**
     * If true, any changes made to the content type are pushed to inherited content types and lists that implement the content type.
     */
    private ?bool $propagateChanges;

    /**
     * If true, the content type can''t be modified unless this value is first set to false.
     */
    private ?bool $readOnly;

    /**
     * If true, the content type can''t be modified by users or through push-down operations. Only site collection administrators can seal or unseal content types.
     */
    private ?bool $sealed;

    /**
     * Parent contentType from which this content type is derived.
     */
    private ?string $base;

    /**
     * The collection of content types that are ancestors of this content type.
     */
    private array $baseTypes = [];

    /**
     * The collection of columns that are required by this content type.
     */
    private array $columnLinks = [];

    /**
     * Column order information in a content type.
     */
    private array $columnPositions = [];

    /**
     * The collection of column definitions for this content type.
     * @var string[]
     */
    private array $columns = [];


    /**
     * @return string[]
     */
    public function getAssociatedHubsUrls(): array
    {
        return $this->associatedHubsUrls;
    }

    /**
     * @param string[] $associatedHubsUrls
     */
    public function setAssociatedHubsUrls(array $associatedHubsUrls): self
    {
        $this->associatedHubsUrls = $associatedHubsUrls;
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

    public function getDocumentSet(): ?string
    {
        return $this->documentSet;
    }

    public function setDocumentSet(?string $documentSet): self
    {
        $this->documentSet = $documentSet;
        return $this;
    }

    public function getDocumentTemplate(): ?string
    {
        return $this->documentTemplate;
    }

    public function setDocumentTemplate(?string $documentTemplate): self
    {
        $this->documentTemplate = $documentTemplate;
        return $this;
    }

    public function getGroup(): ?string
    {
        return $this->group;
    }

    public function setGroup(?string $group): self
    {
        $this->group = $group;
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

    public function getInheritedFrom(): ?string
    {
        return $this->inheritedFrom;
    }

    public function setInheritedFrom(?string $inheritedFrom): self
    {
        $this->inheritedFrom = $inheritedFrom;
        return $this;
    }

    public function getIsBuiltIn(): ?bool
    {
        return $this->isBuiltIn;
    }

    public function setIsBuiltIn(?bool $isBuiltIn): self
    {
        $this->isBuiltIn = $isBuiltIn;
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

    public function getOrder(): ?string
    {
        return $this->order;
    }

    public function setOrder(?string $order): self
    {
        $this->order = $order;
        return $this;
    }

    public function getParentId(): ?string
    {
        return $this->parentId;
    }

    public function setParentId(?string $parentId): self
    {
        $this->parentId = $parentId;
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

    public function getSealed(): ?bool
    {
        return $this->sealed;
    }

    public function setSealed(?bool $sealed): self
    {
        $this->sealed = $sealed;
        return $this;
    }

    public function getBase(): ?string
    {
        return $this->base;
    }

    public function setBase(?string $base): self
    {
        $this->base = $base;
        return $this;
    }

    public function getBaseTypes(): array
    {
        return $this->baseTypes;
    }

    public function setBaseTypes(array $baseTypes): self
    {
        $this->baseTypes = $baseTypes;
        return $this;
    }

    public function getColumnLinks(): array
    {
        return $this->columnLinks;
    }

    public function setColumnLinks(array $columnLinks): self
    {
        $this->columnLinks = $columnLinks;
        return $this;
    }

    public function getColumnPositions(): array
    {
        return $this->columnPositions;
    }

    public function setColumnPositions(array $columnPositions): self
    {
        $this->columnPositions = $columnPositions;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getColumns(): array
    {
        return $this->columns;
    }

    /**
     * @param string[] $columns
     */
    public function setColumns(array $columns): self
    {
        $this->columns = $columns;
        return $this;
    }

}
