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
     * @var string[]
     */
    private array $searchResultTemplates = [];


    /**
     * @return string[]
     */
    public function getSearchResultTemplates(): array
    {
        return $this->searchResultTemplates;
    }

    /**
     * @param string[] $searchResultTemplates
     */
    public function setSearchResultTemplates(array $searchResultTemplates): self
    {
        $this->searchResultTemplates = $searchResultTemplates;
        return $this;
    }

}
