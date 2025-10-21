<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InternetExplorerMode
 */
class InternetExplorerMode
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** A collection of site lists to support Internet Explorer mode. */
        public array $siteLists = []
    ) {}
}
