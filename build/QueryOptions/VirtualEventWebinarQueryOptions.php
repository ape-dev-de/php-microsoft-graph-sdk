<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventWebinar resources
 *
 * Available select fields:
 * - audience
 * - coOrganizers
 * - registrationConfiguration
 * - registrations
 */
class VirtualEventWebinarQueryOptions extends QueryOptions
{
    public const FIELD_AUDIENCE = 'audience';
    public const FIELD_CO_ORGANIZERS = 'coOrganizers';
    public const FIELD_REGISTRATION_CONFIGURATION = 'registrationConfiguration';
    public const FIELD_REGISTRATIONS = 'registrations';

    /**
     * Select specific VirtualEventWebinar properties
     * 
     * @param array<string> $select Use VirtualEventWebinarQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
