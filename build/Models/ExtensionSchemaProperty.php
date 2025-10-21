<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExtensionSchemaProperty
 */
class ExtensionSchemaProperty
{
    public function __construct(
        /** The name of the strongly typed property defined as part of a schema extension. */
        public ?string $name = null,
        /** The type of the property that is defined as part of a schema extension.  Allowed values are Binary, Boolean, DateTime, Integer, or String. For more information, see Supported property data types. */
        public ?string $type = null
    ) {}
}
