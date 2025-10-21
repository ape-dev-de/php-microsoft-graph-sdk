<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintConnector resources
 *
 * Available select fields:
 * - appVersion
 * - displayName
 * - fullyQualifiedDomainName
 * - location
 * - operatingSystem
 * - registeredDateTime
 */
class PrintConnectorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintConnector
     */
    public const FIELD_APP_VERSION = 'appVersion';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_FULLY_QUALIFIED_DOMAIN_NAME = 'fullyQualifiedDomainName';
    public const FIELD_LOCATION = 'location';
    public const FIELD_OPERATING_SYSTEM = 'operatingSystem';
    public const FIELD_REGISTERED_DATE_TIME = 'registeredDateTime';

    /**
     * Select specific PrintConnector properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
