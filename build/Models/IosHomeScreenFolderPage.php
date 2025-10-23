<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosHomeScreenFolderPage
 */
class IosHomeScreenFolderPage
{
    /** 
     * A list of apps and web clips to appear on a page within a folder. This collection can contain a maximum of 500 elements.
     * @var IosHomeScreenApp[]
     */
    public array $apps = [];

    /** Name of the folder page */
    public ?string $displayName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['apps'])) {
            $this->apps = $data['apps'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
    }
}
