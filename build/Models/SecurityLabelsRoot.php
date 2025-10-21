<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityLabelsRoot
 */
class SecurityLabelsRoot
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Specifies the underlying authority that describes the type of content to be retained and its retention schedule. */
        public array $authorities = [],
        /** Specifies a group of similar types of content in a particular department. */
        public array $categories = [],
        /** The specific rule or regulation created by a jurisdiction used to determine whether certain labels and content should be retained or deleted. */
        public array $citations = [],
        /** Specifies the department or business unit of an organization to which a label belongs. */
        public array $departments = [],
        /** Specifies a unique alpha-numeric identifier for an organization’s retention schedule. */
        public array $filePlanReferences = [],
        /** @var string[] Represents how customers can manage their data, whether and for how long to retain or delete it. */
        public array $retentionLabels = []
    ) {}
}
