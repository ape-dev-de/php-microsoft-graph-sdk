<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessGuestsOrExternalUsers
 */
class ConditionalAccessGuestsOrExternalUsers
{
    /** 
     * The tenant IDs of the selected types of external users. Either all B2B tenant or a collection of tenant IDs. External tenants can be specified only when the property guestOrExternalUserTypes isn't null or an empty String.
     * @var ConditionalAccessExternalTenants|\stdClass|null
     */
    public mixed $externalTenants = null;

    /**  */
    public ?ConditionalAccessGuestOrExternalUserTypes $guestOrExternalUserTypes = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['externalTenants'])) {
            $this->externalTenants = is_array($data['externalTenants']) ? new ConditionalAccessExternalTenants($data['externalTenants']) : $data['externalTenants'];
        }
        if (isset($data['guestOrExternalUserTypes'])) {
            $this->guestOrExternalUserTypes = is_array($data['guestOrExternalUserTypes']) ? new ConditionalAccessGuestOrExternalUserTypes($data['guestOrExternalUserTypes']) : $data['guestOrExternalUserTypes'];
        }
    }
}
