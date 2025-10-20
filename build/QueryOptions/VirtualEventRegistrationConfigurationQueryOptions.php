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
    public const FIELD_CAPACITY = 'capacity';
    public const FIELD_REGISTRATION_WEB_URL = 'registrationWebUrl';
    public const FIELD_QUESTIONS = 'questions';

    /**
     * Select specific VirtualEventRegistrationConfiguration properties
     * 
     * @param array<string> $select Use VirtualEventRegistrationConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
