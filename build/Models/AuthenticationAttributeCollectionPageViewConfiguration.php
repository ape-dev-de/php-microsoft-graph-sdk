<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationAttributeCollectionPageViewConfiguration
 */
class AuthenticationAttributeCollectionPageViewConfiguration
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The description of the page. */
    public ?string $description = null;

    /** 
     * The display configuration of attributes being collected on the attribute collection page. You must specify all attributes that you want to retain, otherwise they're removed from the user flow.
     * @var AuthenticationAttributeCollectionInputConfiguration[]
     */
    public array $inputs = [];

    /** The title of the attribute collection page. */
    public ?string $title = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['inputs'])) {
            $this->inputs = $data['inputs'];
        }
        if (isset($data['title'])) {
            $this->title = $data['title'];
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
