<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserFlowLanguageConfiguration
 */
class UserFlowLanguageConfiguration
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The language name to display. This property is read-only. */
    public ?string $displayName = null;

    /** Indicates whether the language is enabled within the user flow. */
    public ?bool $isEnabled = null;

    /** 
     * Collection of pages with the default content to display in a user flow for a specified language. This collection doesn't allow any kind of modification.
     * @var UserFlowLanguagePage[]
     */
    public array $defaultPages = [];

    /** 
     * Collection of pages with the overrides messages to display in a user flow for a specified language. This collection only allows you to modify the content of the page, any other modification isn't allowed (creation or deletion of pages).
     * @var UserFlowLanguagePage[]
     */
    public array $overridesPages = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isEnabled'])) {
            $this->isEnabled = $data['isEnabled'];
        }
        if (isset($data['defaultPages'])) {
            $this->defaultPages = $data['defaultPages'];
        }
        if (isset($data['overridesPages'])) {
            $this->overridesPages = $data['overridesPages'];
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
