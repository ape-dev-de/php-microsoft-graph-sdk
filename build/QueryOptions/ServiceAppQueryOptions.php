<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceApp resources
 *
 * Available select fields:
 * - application
 * - effectiveDateTime
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - registrationDateTime
 * - status
 */
class ServiceAppQueryOptions extends QueryOptions
{
    public const FIELD_APPLICATION = 'application';
    public const FIELD_EFFECTIVE_DATE_TIME = 'effectiveDateTime';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_REGISTRATION_DATE_TIME = 'registrationDateTime';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific ServiceApp properties
     * 
     * @param array<string> $select Use ServiceAppQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
