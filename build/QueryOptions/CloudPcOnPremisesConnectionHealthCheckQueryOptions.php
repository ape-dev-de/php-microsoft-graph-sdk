<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcOnPremisesConnectionHealthCheck resources
 *
 * Available select fields:
 * - additionalDetail
 * - correlationId
 * - displayName
 * - endDateTime
 * - errorType
 * - recommendedAction
 * - startDateTime
 * - status
 */
class CloudPcOnPremisesConnectionHealthCheckQueryOptions extends QueryOptions
{
    public const FIELD_ADDITIONAL_DETAIL = 'additionalDetail';
    public const FIELD_CORRELATION_ID = 'correlationId';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_ERROR_TYPE = 'errorType';
    public const FIELD_RECOMMENDED_ACTION = 'recommendedAction';
    public const FIELD_START_DATE_TIME = 'startDateTime';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific CloudPcOnPremisesConnectionHealthCheck properties
     * 
     * @param array<string> $select Use CloudPcOnPremisesConnectionHealthCheckQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
