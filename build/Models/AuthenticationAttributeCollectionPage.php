<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationAttributeCollectionPage
 */
class AuthenticationAttributeCollectionPage
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['views'])) {
            $this->views = $data['views'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
