<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ObjectDefinition
 */
class ObjectDefinition
{
    public function __construct(
        /** Defines attributes of the object. */
        public array $attributes = [],
        /** Metadata for the given object. */
        public array $metadata = [],
        /** Name of the object. Must be unique within a directory definition. Not nullable. */
        public ?string $name = null,
        /** @var string[] The API that the provisioning service queries to retrieve data for synchronization. */
        public array $supportedApis = []
    ) {}
}
