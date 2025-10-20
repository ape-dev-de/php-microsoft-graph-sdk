<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ParticipantInfo resources
 *
 * Available select fields:
 * - countryCode
 * - endpointType
 * - identity
 * - languageId
 * - participantId
 * - region
 */
class ParticipantInfoQueryOptions extends QueryOptions
{
    public const FIELD_COUNTRY_CODE = 'countryCode';
    public const FIELD_ENDPOINT_TYPE = 'endpointType';
    public const FIELD_IDENTITY = 'identity';
    public const FIELD_LANGUAGE_ID = 'languageId';
    public const FIELD_PARTICIPANT_ID = 'participantId';
    public const FIELD_REGION = 'region';

    /**
     * Select specific ParticipantInfo properties
     * 
     * @param array<string> $select Use ParticipantInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
