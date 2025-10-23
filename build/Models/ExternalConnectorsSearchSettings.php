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
     * @var ExternalConnectorsDisplayTemplate[]
     */
    public array $searchResultTemplates = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['searchResultTemplates'])) {
            $this->searchResultTemplates = $data['searchResultTemplates'];
        }
    }
}
