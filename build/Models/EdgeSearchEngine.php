<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EdgeSearchEngine
 */
class EdgeSearchEngine
{
    public function __construct(
        /** Allows IT admins to set a predefined default search engine for MDM-Controlled devices. */
        public ?string $edgeSearchEngineType = null
    ) {}
}
