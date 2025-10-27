<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppleManagedIdentityProvider
 */
class AppleManagedIdentityProvider
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The display name of the identity provider. */
    public ?string $displayName = null;

    /** The certificate data, which is a long string of text from the certificate. Can be null. */
    public ?string $certificateData = null;

    /** The Apple developer identifier. Required. */
    public ?string $developerId = null;

    /** The Apple key identifier. Required. */
    public ?string $keyId = null;

    /** The Apple service identifier. Required. */
    public ?string $serviceId = null;


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
        if (isset($data['certificateData'])) {
            $this->certificateData = $data['certificateData'];
        }
        if (isset($data['developerId'])) {
            $this->developerId = $data['developerId'];
        }
        if (isset($data['keyId'])) {
            $this->keyId = $data['keyId'];
        }
        if (isset($data['serviceId'])) {
            $this->serviceId = $data['serviceId'];
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
