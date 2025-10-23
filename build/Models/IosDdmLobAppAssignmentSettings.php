<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosDdmLobAppAssignmentSettings
 */
class IosDdmLobAppAssignmentSettings
{
    /** 
     * Domain names to associate with the app
     * @var string[]
     */
    public array $associatedDomains = [];

    /** When true, the system allows direct downloads for the AssociatedDomains. When false, the system will not allow direct downloads for the AssociatedDomains. Default is false. */
    public ?bool $associatedDomainsDirectDownloadAllowed = null;

    /** When true, indicates that the app should not be backed up to iCloud. When false, indicates that the app may be backed up to iCloud. Default is false. */
    public ?bool $preventManagedAppBackup = null;

    /** When true, the device locks its screen after every transaction that requires a customer’s card PIN. When false, the user can choose the behavior. Default value is false. */
    public ?bool $tapToPayScreenLockEnabled = null;

    /** The unique identifier of the relay to associate with the app. */
    public ?string $vpnConfigurationId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['associatedDomains'])) {
            $this->associatedDomains = $data['associatedDomains'];
        }
        if (isset($data['associatedDomainsDirectDownloadAllowed'])) {
            $this->associatedDomainsDirectDownloadAllowed = $data['associatedDomainsDirectDownloadAllowed'];
        }
        if (isset($data['preventManagedAppBackup'])) {
            $this->preventManagedAppBackup = $data['preventManagedAppBackup'];
        }
        if (isset($data['tapToPayScreenLockEnabled'])) {
            $this->tapToPayScreenLockEnabled = $data['tapToPayScreenLockEnabled'];
        }
        if (isset($data['vpnConfigurationId'])) {
            $this->vpnConfigurationId = $data['vpnConfigurationId'];
        }
    }
}
