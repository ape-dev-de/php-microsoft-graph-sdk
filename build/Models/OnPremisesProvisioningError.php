<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnPremisesProvisioningError
 */
class OnPremisesProvisioningError
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Category of the provisioning error. Note: Currently, there is only one possible value. Possible value: PropertyConflict - indicates a property value is not unique. Other objects contain the same value for the property. */
    public ?string $category = null;

    /** The date and time at which the error occurred. */
    public ?\DateTimeInterface $occurredDateTime = null;

    /** Name of the directory property causing the error. Current possible values: UserPrincipalName or ProxyAddress */
    public ?string $propertyCausingError = null;

    /** Value of the property causing the error. */
    public ?string $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['category'])) {
            $this->category = $data['category'];
        }
        if (isset($data['occurredDateTime'])) {
            $this->occurredDateTime = is_string($data['occurredDateTime']) ? new \DateTimeImmutable($data['occurredDateTime']) : $data['occurredDateTime'];
        }
        if (isset($data['propertyCausingError'])) {
            $this->propertyCausingError = $data['propertyCausingError'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
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
