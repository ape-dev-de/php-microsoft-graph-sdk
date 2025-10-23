<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosHomeScreenPage
 */
class IosHomeScreenPage
{
    /** Name of the page */
    public ?string $displayName = null;

    /** 
     * A list of apps, folders, and web clips to appear on a page. This collection can contain a maximum of 500 elements.
     * @var IosHomeScreenItem[]
     */
    public array $icons = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['icons'])) {
            $this->icons = $data['icons'];
        }
    }
}
