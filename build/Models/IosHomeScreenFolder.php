<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosHomeScreenFolder
 */
class IosHomeScreenFolder
{
    /** Name of the app */
    public ?string $displayName = null;

    /** 
     * Pages of Home Screen Layout Icons which must be applications or web clips. This collection can contain a maximum of 500 elements.
     * @var IosHomeScreenFolderPage[]
     */
    public array $pages = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['pages'])) {
            $this->pages = $data['pages'];
        }
    }
}
