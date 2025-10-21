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
        public array $id = [],
        /** The unique name for the functionality exposed by the app. */
        public ?string $items = null
    ) {}
}
