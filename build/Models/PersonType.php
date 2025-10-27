<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PersonType
 */
class PersonType
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The type of data source, such as Person. */
    public ?string $class = null;

    /** The secondary type of data source, such as OrganizationUser. */
    public ?string $subclass = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['class'])) {
            $this->class = $data['class'];
        }
        if (isset($data['subclass'])) {
            $this->subclass = $data['subclass'];
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
