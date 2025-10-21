<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ReferencedObject
 */
class ReferencedObject
{
    public function __construct(
        /** Name of the referenced object. Must match one of the objects in the directory definition. */
        public ?string $referencedObjectName = null,
        /** Currently not supported. Name of the property in the referenced object, the value for which is used as the reference. */
        public ?string $referencedProperty = null
    ) {}
}
