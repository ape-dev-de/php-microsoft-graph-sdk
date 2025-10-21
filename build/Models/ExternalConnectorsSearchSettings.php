<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsSearchSettings
 */
class ExternalConnectorsSearchSettings
{
    public function __construct(
        /** Enables the developer to define the appearance of the content and configure conditions that dictate when the template should be displayed. Maximum of 2 search result templates per connection. */
        public array $searchResultTemplates = []
    ) {}
}
