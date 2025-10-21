<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventExternalRegistrationInformation resources
 *
 * Available select fields:
 * - referrer
 * - registrationId
 */
class VirtualEventExternalRegistrationInformationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VirtualEventExternalRegistrationInformation
     */
    public const FIELD_REFERRER = 'referrer';
    public const FIELD_REGISTRATION_ID = 'registrationId';

    /**
     * Select specific VirtualEventExternalRegistrationInformation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
