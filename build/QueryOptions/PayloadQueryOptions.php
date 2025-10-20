<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Payload resources
 *
 * Available select fields:
 * - brand
 * - complexity
 * - createdBy
 * - createdDateTime
 * - description
 * - detail
 * - displayName
 * - industry
 * - isAutomated
 * - isControversial
 * - isCurrentEvent
 * - language
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - payloadTags
 * - platform
 * - predictedCompromiseRate
 * - simulationAttackType
 * - source
 * - status
 * - technique
 * - theme
 */
class PayloadQueryOptions extends QueryOptions
{
    public const FIELD_BRAND = 'brand';
    public const FIELD_COMPLEXITY = 'complexity';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DETAIL = 'detail';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_INDUSTRY = 'industry';
    public const FIELD_IS_AUTOMATED = 'isAutomated';
    public const FIELD_IS_CONTROVERSIAL = 'isControversial';
    public const FIELD_IS_CURRENT_EVENT = 'isCurrentEvent';
    public const FIELD_LANGUAGE = 'language';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_PAYLOAD_TAGS = 'payloadTags';
    public const FIELD_PLATFORM = 'platform';
    public const FIELD_PREDICTED_COMPROMISE_RATE = 'predictedCompromiseRate';
    public const FIELD_SIMULATION_ATTACK_TYPE = 'simulationAttackType';
    public const FIELD_SOURCE = 'source';
    public const FIELD_STATUS = 'status';
    public const FIELD_TECHNIQUE = 'technique';
    public const FIELD_THEME = 'theme';

    /**
     * Select specific Payload properties
     * 
     * @param array<string> $select Use PayloadQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
