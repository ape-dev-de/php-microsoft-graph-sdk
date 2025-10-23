<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InternetExplorerMode
 */
class InternetExplorerMode
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * A collection of site lists to support Internet Explorer mode.
     * @var BrowserSiteList[]
     */
    public array $siteLists = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['siteLists'])) {
            $this->siteLists = $data['siteLists'];
        }
    }
}
