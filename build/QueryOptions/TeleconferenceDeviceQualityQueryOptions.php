<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeleconferenceDeviceQuality resources
 *
 * Available select fields:
 * - callChainId
 * - cloudServiceDeploymentEnvironment
 * - cloudServiceDeploymentId
 * - cloudServiceInstanceName
 * - cloudServiceName
 * - deviceDescription
 * - deviceName
 * - mediaLegId
 * - mediaQualityList
 * - participantId
 */
class TeleconferenceDeviceQualityQueryOptions extends QueryOptions
{
    public const FIELD_CALL_CHAIN_ID = 'callChainId';
    public const FIELD_CLOUD_SERVICE_DEPLOYMENT_ENVIRONMENT = 'cloudServiceDeploymentEnvironment';
    public const FIELD_CLOUD_SERVICE_DEPLOYMENT_ID = 'cloudServiceDeploymentId';
    public const FIELD_CLOUD_SERVICE_INSTANCE_NAME = 'cloudServiceInstanceName';
    public const FIELD_CLOUD_SERVICE_NAME = 'cloudServiceName';
    public const FIELD_DEVICE_DESCRIPTION = 'deviceDescription';
    public const FIELD_DEVICE_NAME = 'deviceName';
    public const FIELD_MEDIA_LEG_ID = 'mediaLegId';
    public const FIELD_MEDIA_QUALITY_LIST = 'mediaQualityList';
    public const FIELD_PARTICIPANT_ID = 'participantId';

    /**
     * Select specific TeleconferenceDeviceQuality properties
     * 
     * @param array<string> $select Use TeleconferenceDeviceQualityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
