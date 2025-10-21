<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AgreementFileProperties resources
 *
 * Available select fields:
 * - createdDateTime
 * - displayName
 * - fileData
 * - fileName
 * - isDefault
 * - isMajorVersion
 * - language
 */
class AgreementFilePropertiesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AgreementFileProperties
     */
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_FILE_DATA = 'fileData';
    public const FIELD_FILE_NAME = 'fileName';
    public const FIELD_IS_DEFAULT = 'isDefault';
    public const FIELD_IS_MAJOR_VERSION = 'isMajorVersion';
    public const FIELD_LANGUAGE = 'language';

    /**
     * Select specific AgreementFileProperties properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
