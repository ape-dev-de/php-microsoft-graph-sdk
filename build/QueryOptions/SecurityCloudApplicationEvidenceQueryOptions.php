<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityCloudApplicationEvidence resources
 *
 * Available select fields:
 * - appId
 * - displayName
 * - instanceId
 * - instanceName
 * - saasAppId
 * - stream
 */
class SecurityCloudApplicationEvidenceQueryOptions extends QueryOptions
{
    public const FIELD_APP_ID = 'appId';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_INSTANCE_ID = 'instanceId';
    public const FIELD_INSTANCE_NAME = 'instanceName';
    public const FIELD_SAAS_APP_ID = 'saasAppId';
    public const FIELD_STREAM = 'stream';

    /**
     * Select specific SecurityCloudApplicationEvidence properties
     * 
     * @param array<string> $select Use SecurityCloudApplicationEvidenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
