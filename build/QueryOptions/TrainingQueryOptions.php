<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Training resources
 *
 * Available select fields:
 * - availabilityStatus
 * - createdBy
 * - createdDateTime
 * - description
 * - displayName
 * - durationInMinutes
 * - hasEvaluation
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - source
 * - supportedLocales
 * - tags
 * - type
 * - languageDetails
 */
class TrainingQueryOptions extends QueryOptions
{
    public const FIELD_AVAILABILITY_STATUS = 'availabilityStatus';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_DURATION_IN_MINUTES = 'durationInMinutes';
    public const FIELD_HAS_EVALUATION = 'hasEvaluation';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_SOURCE = 'source';
    public const FIELD_SUPPORTED_LOCALES = 'supportedLocales';
    public const FIELD_TAGS = 'tags';
    public const FIELD_TYPE = 'type';
    public const FIELD_LANGUAGE_DETAILS = 'languageDetails';

    /**
     * Select specific Training properties
     * 
     * @param array<string> $select Use TrainingQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
