<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecuritySensorDeploymentPackage resources
 *
 * Available select fields:
 * - downloadUrl
 * - version
 */
class SecuritySensorDeploymentPackageQueryOptions extends QueryOptions
{
    public const FIELD_DOWNLOAD_URL = 'downloadUrl';
    public const FIELD_VERSION = 'version';

    /**
     * Select specific SecuritySensorDeploymentPackage properties
     * 
     * @param array<string> $select Use SecuritySensorDeploymentPackageQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
