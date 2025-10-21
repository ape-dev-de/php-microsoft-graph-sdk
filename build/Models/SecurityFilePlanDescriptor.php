<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityFilePlanDescriptor
 */
class SecurityFilePlanDescriptor
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Represents the file plan descriptor of type authority applied to a particular retention label. */
        public ?string $authority = null,
        /**  */
        public ?string $category = null,
        /** Represents the file plan descriptor of type citation applied to a particular retention label. */
        public ?string $citation = null,
        /** Represents the file plan descriptor of type department applied to a particular retention label. */
        public ?string $department = null,
        /** Represents the file plan descriptor of type filePlanReference applied to a particular retention label. */
        public ?string $filePlanReference = null,
        /** Specifies the underlying authority that describes the type of content to be retained and its retention schedule. */
        public ?string $authorityTemplate = null,
        /** Specifies a group of similar types of content in a particular department. */
        public ?string $categoryTemplate = null,
        /** The specific rule or regulation created by a jurisdiction used to determine whether certain labels and content should be retained or deleted. */
        public ?string $citationTemplate = null,
        /** Specifies the  department or business unit of an organization to which a label belongs. */
        public ?string $departmentTemplate = null,
        /** Specifies a unique alpha-numeric identifier for an organization’s retention schedule. */
        public ?string $filePlanReferenceTemplate = null
    ) {}
}
