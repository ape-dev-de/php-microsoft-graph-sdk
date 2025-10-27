<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VppToken
 */
class VppToken
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The Apple ID associated with the given Apple Volume Purchase Program Token. */
    public ?string $appleId = null;

    /** Whether or not apps for the VPP token will be automatically updated. */
    public ?bool $automaticallyUpdateApps = null;

    /** The country or region associated with the Apple Volume Purchase Program Token. */
    public ?string $countryOrRegion = null;

    /** The expiration date time of the Apple Volume Purchase Program Token. */
    public ?\DateTimeInterface $expirationDateTime = null;

    /** Last modification date time associated with the Apple Volume Purchase Program Token. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** The last time when an application sync was done with the Apple volume purchase program service using the the Apple Volume Purchase Program Token. */
    public ?\DateTimeInterface $lastSyncDateTime = null;

    /**  */
    public ?VppTokenSyncStatus $lastSyncStatus = null;

    /** The organization associated with the Apple Volume Purchase Program Token */
    public ?string $organizationName = null;

    /**  */
    public ?VppTokenState $state = null;

    /** The Apple Volume Purchase Program Token string downloaded from the Apple Volume Purchase Program. */
    public ?string $token = null;

    /**  */
    public ?VppTokenAccountType $vppTokenAccountType = null;


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
        if (isset($data['appleId'])) {
            $this->appleId = $data['appleId'];
        }
        if (isset($data['automaticallyUpdateApps'])) {
            $this->automaticallyUpdateApps = is_bool($data['automaticallyUpdateApps']) ? $data['automaticallyUpdateApps'] : (bool)$data['automaticallyUpdateApps'];
        }
        if (isset($data['countryOrRegion'])) {
            $this->countryOrRegion = $data['countryOrRegion'];
        }
        if (isset($data['expirationDateTime'])) {
            $this->expirationDateTime = is_string($data['expirationDateTime']) ? new \DateTimeImmutable($data['expirationDateTime']) : $data['expirationDateTime'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['lastSyncDateTime'])) {
            $this->lastSyncDateTime = is_string($data['lastSyncDateTime']) ? new \DateTimeImmutable($data['lastSyncDateTime']) : $data['lastSyncDateTime'];
        }
        if (isset($data['lastSyncStatus'])) {
            $this->lastSyncStatus = is_array($data['lastSyncStatus']) ? new VppTokenSyncStatus($data['lastSyncStatus']) : $data['lastSyncStatus'];
        }
        if (isset($data['organizationName'])) {
            $this->organizationName = $data['organizationName'];
        }
        if (isset($data['state'])) {
            $this->state = is_array($data['state']) ? new VppTokenState($data['state']) : $data['state'];
        }
        if (isset($data['token'])) {
            $this->token = $data['token'];
        }
        if (isset($data['vppTokenAccountType'])) {
            $this->vppTokenAccountType = is_array($data['vppTokenAccountType']) ? new VppTokenAccountType($data['vppTokenAccountType']) : $data['vppTokenAccountType'];
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
