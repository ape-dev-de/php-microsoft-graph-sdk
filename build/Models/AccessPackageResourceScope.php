<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageResourceScope
 */
class AccessPackageResourceScope
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The description of the scope. */
        public ?string $description = null,
        /** The display name of the scope. */
        public ?string $displayName = null,
        /** True if the scopes are arranged in a hierarchy and this is the top or root scope of the resource. */
        public ?bool $isRootScope = null,
        /** The unique identifier for the scope in the resource as defined in the origin system. */
        public ?string $originId = null,
        /** The origin system for the scope. */
        public ?string $originSystem = null,
        /**  */
        public ?string $resource = null
    ) {}
}
