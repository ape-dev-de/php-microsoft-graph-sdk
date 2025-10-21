<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessRoot
 */
class ConditionalAccessRoot
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Read-only. Nullable. Returns a collection of the specified authentication context class references. */
        public array $authenticationContextClassReferences = [],
        /**  */
        public ?string $authenticationStrength = null,
        /** Read-only. Nullable. Returns a collection of the specified named locations. */
        public array $namedLocations = [],
        /** Read-only. Nullable. Returns a collection of the specified Conditional Access (CA) policies. */
        public array $policies = [],
        /** @var string[] Read-only. Nullable. Returns a collection of the specified Conditional Access templates. */
        public array $templates = []
    ) {}
}
