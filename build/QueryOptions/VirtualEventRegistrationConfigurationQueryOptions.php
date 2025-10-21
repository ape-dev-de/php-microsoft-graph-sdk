<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventRegistrationConfiguration resources
 *
 * Available select fields:
 * - capacity
 * - registrationWebUrl
 * - questions
 */
class VirtualEventRegistrationConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VirtualEventRegistrationConfiguration
     */
    public const FIELD_CAPACITY = 'capacity';
    public const FIELD_REGISTRATION_WEB_URL = 'registrationWebUrl';
    public const FIELD_QUESTIONS = 'questions';

    /**
     * Select specific VirtualEventRegistrationConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
