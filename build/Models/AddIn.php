<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AddIn
 */
class AddIn
{
    public function __construct(
        /** The unique identifier for the addIn object. */
        public ?string $id = null,
        /** The collection of key-value pairs that define parameters that the consuming service can use or call. You must specify this property when performing a POST or a PATCH operation on the addIns collection. Required. */
        public array $properties = [],
        /** The unique name for the functionality exposed by the app. */
        public ?string $type = null
    ) {}
}
