<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SettingTemplateValue
 */
class SettingTemplateValue
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Default value for the setting. */
    public ?string $defaultValue = null;

    /** Description of the setting. */
    public ?string $description = null;

    /** Name of the setting. */
    public ?string $name = null;

    /** Type of the setting. */
    public ?string $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['defaultValue'])) {
            $this->defaultValue = $data['defaultValue'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['type'])) {
            $this->type = $data['type'];
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
