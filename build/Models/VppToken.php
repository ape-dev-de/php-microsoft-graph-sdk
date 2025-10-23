<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VppToken
 */
class VppToken
{
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
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['appleId'])) {
            $this->appleId = $data['appleId'];
        }
        if (isset($data['automaticallyUpdateApps'])) {
            $this->automaticallyUpdateApps = $data['automaticallyUpdateApps'];
        }
        if (isset($data['countryOrRegion'])) {
            $this->countryOrRegion = $data['countryOrRegion'];
        }
        if (isset($data['expirationDateTime'])) {
            $this->expirationDateTime = $data['expirationDateTime'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['lastSyncDateTime'])) {
            $this->lastSyncDateTime = $data['lastSyncDateTime'];
        }
        if (isset($data['lastSyncStatus'])) {
            $this->lastSyncStatus = $data['lastSyncStatus'];
        }
        if (isset($data['organizationName'])) {
            $this->organizationName = $data['organizationName'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
        if (isset($data['token'])) {
            $this->token = $data['token'];
        }
        if (isset($data['vppTokenAccountType'])) {
            $this->vppTokenAccountType = $data['vppTokenAccountType'];
        }
    }
}
