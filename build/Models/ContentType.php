<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ContentType
 */
class ContentType
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * List of canonical URLs for hub sites with which this content type is associated to. This will contain all hub sites where this content type is queued to be enforced or is already enforced. Enforcing a content type means that the content type is applied to the lists in the enforced sites.
     * @var string[]
     */
    public array $associatedHubsUrls = [];

    /** The descriptive text for the item. */
    public ?string $description = null;

    /** 
     * Document Set metadata.
     * @var DocumentSet|\stdClass|null
     */
    public mixed $documentSet = null;

    /** 
     * Document template metadata. To make sure that documents have consistent content across a site and its subsites, you can associate a Word, Excel, or PowerPoint template with a site content type.
     * @var DocumentSetContent|\stdClass|null
     */
    public mixed $documentTemplate = null;

    /** The name of the group this content type belongs to. Helps organize related content types. */
    public ?string $group = null;

    /** Indicates whether the content type is hidden in the list's 'New' menu. */
    public ?bool $hidden = null;

    /** 
     * If this content type is inherited from another scope (like a site), provides a reference to the item where the content type is defined.
     * @var ItemReference|\stdClass|null
     */
    public mixed $inheritedFrom = null;

    /** Specifies if a content type is a built-in content type. */
    public ?bool $isBuiltIn = null;

    /** The name of the content type. */
    public ?string $name = null;

    /** 
     * Specifies the order in which the content type appears in the selection UI.
     * @var ContentTypeOrder|\stdClass|null
     */
    public mixed $order = null;

    /** The unique identifier of the content type. */
    public ?string $parentId = null;

    /** If true, any changes made to the content type are pushed to inherited content types and lists that implement the content type. */
    public ?bool $propagateChanges = null;

    /** If true, the content type can't be modified unless this value is first set to false. */
    public ?bool $readOnly = null;

    /** If true, the content type can't be modified by users or through push-down operations. Only site collection administrators can seal or unseal content types. */
    public ?bool $sealed = null;

    /** 
     * Parent contentType from which this content type is derived.
     * @var ContentType|\stdClass|null
     */
    public mixed $base = null;

    /** 
     * The collection of content types that are ancestors of this content type.
     * @var ContentType[]
     */
    public array $baseTypes = [];

    /** 
     * The collection of columns that are required by this content type.
     * @var ColumnLink[]
     */
    public array $columnLinks = [];

    /** 
     * Column order information in a content type.
     * @var ColumnDefinition[]
     */
    public array $columnPositions = [];

    /** 
     * The collection of column definitions for this content type.
     * @var ColumnDefinition[]
     */
    public array $columns = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['associatedHubsUrls'])) {
            $this->associatedHubsUrls = $data['associatedHubsUrls'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['documentSet'])) {
            $this->documentSet = $data['documentSet'];
        }
        if (isset($data['documentTemplate'])) {
            $this->documentTemplate = $data['documentTemplate'];
        }
        if (isset($data['group'])) {
            $this->group = $data['group'];
        }
        if (isset($data['hidden'])) {
            $this->hidden = $data['hidden'];
        }
        if (isset($data['inheritedFrom'])) {
            $this->inheritedFrom = $data['inheritedFrom'];
        }
        if (isset($data['isBuiltIn'])) {
            $this->isBuiltIn = $data['isBuiltIn'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['order'])) {
            $this->order = $data['order'];
        }
        if (isset($data['parentId'])) {
            $this->parentId = $data['parentId'];
        }
        if (isset($data['propagateChanges'])) {
            $this->propagateChanges = $data['propagateChanges'];
        }
        if (isset($data['readOnly'])) {
            $this->readOnly = $data['readOnly'];
        }
        if (isset($data['sealed'])) {
            $this->sealed = $data['sealed'];
        }
        if (isset($data['base'])) {
            $this->base = $data['base'];
        }
        if (isset($data['baseTypes'])) {
            $this->baseTypes = $data['baseTypes'];
        }
        if (isset($data['columnLinks'])) {
            $this->columnLinks = $data['columnLinks'];
        }
        if (isset($data['columnPositions'])) {
            $this->columnPositions = $data['columnPositions'];
        }
        if (isset($data['columns'])) {
            $this->columns = $data['columns'];
        }
    }
}
