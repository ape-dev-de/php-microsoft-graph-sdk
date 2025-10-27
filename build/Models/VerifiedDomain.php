<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VerifiedDomain
 */
class VerifiedDomain
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** For example, Email, OfficeCommunicationsOnline. */
    public ?string $capabilities = null;

    /** true if this is the default domain associated with the tenant; otherwise, false. */
    public ?bool $isDefault = null;

    /** true if this is the initial domain associated with the tenant; otherwise, false. */
    public ?bool $isInitial = null;

    /** The domain name; for example, contoso.com. */
    public ?string $name = null;

    /** For example, Managed. */
    public ?string $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['capabilities'])) {
            $this->capabilities = $data['capabilities'];
        }
        if (isset($data['isDefault'])) {
            $this->isDefault = $data['isDefault'];
        }
        if (isset($data['isInitial'])) {
            $this->isInitial = $data['isInitial'];
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
