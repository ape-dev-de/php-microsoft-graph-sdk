<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EdgeSearchEngineCustom
 */
class EdgeSearchEngineCustom
{
    public function __construct(
        /** Allows IT admins to set a custom default search engine for MDM-Controlled devices. */
        public ?string $edgeSearchEngineOpenSearchXmlUrl = null
    ) {}
}
