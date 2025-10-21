<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ContentType
 */
class ContentType
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** @var string[] List of canonical URLs for hub sites with which this content type is associated to. This will contain all hub sites where this content type is queued to be enforced or is already enforced. Enforcing a content type means that the content type is applied to the lists in the enforced sites. */
        public array $associatedHubsUrls = [],
        /** The descriptive text for the item. */
        public ?string $description = null,
        /** Document Set metadata. */
        public ?string $documentSet = null,
        /** Document template metadata. To make sure that documents have consistent content across a site and its subsites, you can associate a Word, Excel, or PowerPoint template with a site content type. */
        public ?string $documentTemplate = null,
        /** The name of the group this content type belongs to. Helps organize related content types. */
        public ?string $group = null,
        /** Indicates whether the content type is hidden in the list's 'New' menu. */
        public ?bool $hidden = null,
        /** If this content type is inherited from another scope (like a site), provides a reference to the item where the content type is defined. */
        public ?string $inheritedFrom = null,
        /** Specifies if a content type is a built-in content type. */
        public ?bool $isBuiltIn = null,
        /** The name of the content type. */
        public ?string $name = null,
        /** Specifies the order in which the content type appears in the selection UI. */
        public ?string $order = null,
        /** The unique identifier of the content type. */
        public ?string $parentId = null,
        /** If true, any changes made to the content type are pushed to inherited content types and lists that implement the content type. */
        public ?bool $propagateChanges = null,
        /** If true, the content type can''t be modified unless this value is first set to false. */
        public ?bool $readOnly = null,
        /** If true, the content type can''t be modified by users or through push-down operations. Only site collection administrators can seal or unseal content types. */
        public ?bool $sealed = null,
        /** Parent contentType from which this content type is derived. */
        public ?string $base = null,
        /** The collection of content types that are ancestors of this content type. */
        public array $baseTypes = [],
        /** The collection of columns that are required by this content type. */
        public array $columnLinks = [],
        /** Column order information in a content type. */
        public array $columnPositions = [],
        /** @var string[] The collection of column definitions for this content type. */
        public array $columns = []
    ) {}
}
