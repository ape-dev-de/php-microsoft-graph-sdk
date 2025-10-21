<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityGoogleCloudResourceEvidence
 */
class SecurityGoogleCloudResourceEvidence
{
    public function __construct(
        /**  */
        public ?string $fullResourceName = null,
        /** The zone or region where the resource is located. */
        public ?string $location = null,
        /** The type of location. Possible values are: unknown, regional, zonal, global, unknownFutureValue. */
        public ?string $locationType = null,
        /** The Google project ID as defined by the user. */
        public ?string $projectId = null,
        /** The project number assigned by Google. */
        public ?float $projectNumber = null,
        /** The name of the resource. */
        public ?string $resourceName = null,
        /** The type of the resource. */
        public ?string $resourceType = null
    ) {}
}
