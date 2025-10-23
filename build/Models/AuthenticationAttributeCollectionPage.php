<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationAttributeCollectionPage
 */
class AuthenticationAttributeCollectionPage
{
    /** 
     * A collection of displays of the attribute collection page.
     * @var AuthenticationAttributeCollectionPageViewConfiguration[]
     */
    public array $views = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['views'])) {
            $this->views = $data['views'];
        }
    }
}
