<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsSearchSettings
 */
class ExternalConnectorsSearchSettings
{
    /**
     * Enables the developer to define the appearance of the content and configure conditions that dictate when the template should be displayed. Maximum of 2 search result templates per connection.
     */
    private ?string $searchResultTemplates;

    public function getSearchResultTemplates(): ?string
    {
        return $this->searchResultTemplates;
    }

    public function setSearchResultTemplates(?string $searchResultTemplates): self
    {
        $this->searchResultTemplates = $searchResultTemplates;
        return $this;
    }

}
